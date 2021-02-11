(function (window, document) {
    "use strict";

    function supportsWoff2() {
        /*global FontFace*/
        // Source: https://github.com/filamentgroup/woff2-feature-test
        if (!window.FontFace) {
            return false;
        } else {
            var f = new FontFace('t', 'url("data:application/font-woff2,") format("woff2")', {});
            f.load();
            return f.status === 'loading';
        }
    }

    function loadCSS(href, before, media) {
        // Arguments explained:
        // `href` is the URL for your CSS file.
        // `before` optionally defines the element we'll use as a reference for injecting our <link>
        // By default, `before` uses the first <script> element in the page.
        // However, since the order in which stylesheets are referenced matters, you might need a more specific location in your document.
        // If so, pass a different reference element to the `before` argument and it'll insert before that instead
        // note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
        var ss = window.document.createElement("link");
        var ref = before || window.document.getElementsByTagName("script")[0];
        var sheets = window.document.styleSheets;
        ss.rel = "stylesheet";
        ss.href = href;
        // temporarily, set media to something non-matching to ensure it'll fetch without blocking render
        ss.media = "only x";
        // inject link
        ref.parentNode.insertBefore(ss, ref);
        // This function sets the link's media back to `all` so that the stylesheet applies once it loads
        // It is designed to poll until document.styleSheets includes the new sheet.
        function toggleMedia() {
            var defined;
            for (var i = 0; i < sheets.length; i++) {
                if (sheets[i].href && sheets[i].href.indexOf(href) > -1) {
                    defined = true;
                }
            }
            if (defined) {
                ss.media = media || "all";
            } else {
                setTimeout(toggleMedia);
            }
        }

        toggleMedia();
        return ss;
    }

    function loadFont(fontName, woffUrl, woff2Url) {
        // 0. Many unsupported browsers should stop here
        var nua = navigator.userAgent;
        var noSupport = !window.addEventListener || (nua.match(/(Android (2|3|4.0|4.1|4.2|4.3))|(Opera (Mini|Mobi))/) && !nua.match(/Chrome/)); // IE8 and below || Android Stock Browser below 4.4 and Opera Mini

        if (noSupport) {
            return;
        }

        function triggerLocalStorage() {
            // 1. Setting up localStorage
            var loSto = {};
            try {
                // We set up a proxy variable to help with localStorage, e.g. when cookies are disabled and the browser prevents us accessing it.
                // Otherwise some exceptions can be thrown which completely prevent font loading.
                loSto = localStorage || {};
            } catch (ex) {
            }

            var localStoragePrefix = 'x-font-' + fontName;
            var localStorageUrlKey = localStoragePrefix + 'url';
            var localStorageCssKey = localStoragePrefix + 'css';
            var storedFontUrl = loSto[localStorageUrlKey];
            var storedFontCss = loSto[localStorageCssKey];

            // 2. Setting up the <style> element, that we are using to apply the base64 encoded font data
            var styleElement = document.createElement('style');
            styleElement.rel = 'stylesheet';
            document.head.appendChild(styleElement);
            // Setting styleElement.textContent must be after this line, because of IE9 errors

            // 3. Checking whether the font data is already in localStorage and up-to-date
            if (storedFontCss && (storedFontUrl === woffUrl || storedFontUrl === woff2Url)) {
                // The CSS is still in the localStorage AND it was loaded from one of the current URLs
                // 4. Apply the font style sheet
                styleElement.textContent = storedFontCss;
            } else {
                // The data was not present, or loaded from an obsolete URL so we have to load it again
                // 5. Checking for WOFF2 support to know which URL we should use
                var url = (woff2Url && supportsWoff2()) ? woff2Url : woffUrl; // only WOFF2 / WOFF support

                // 6. Fetching the font data from the server
                var request = new XMLHttpRequest();
                request.open('GET', url);
                request.onload = function () {
                    if (request.status >= 200 && request.status < 400) {

                        // 7. Updating localStorage with the fresh data and applying the font data
                        loSto[localStorageUrlKey] = url;
                        loSto[localStorageCssKey] = styleElement.textContent = request.responseText;
                    }
                };
                request.send();
            }
        }

        // 9. Test for private browsing so we can still supply fonts
        var privateBrowsing = false;
        try {
            localStorage.test = 2;
        } catch (e) {
            privateBrowsing = true;
        }

        // 10. Init the font loading
        if (privateBrowsing) {
            if (supportsWoff2()) {
                loadCSS(woff2Url);
            } else {
                loadCSS(woffUrl);
            }
        } else {
            triggerLocalStorage();
        }
    }

    for (var i = 0; i < farmhouseFonts.length; i++) {
        loadFont(farmhouseFonts[i].name, farmhouseFonts[i].woff, farmhouseFonts[i].woff2);
    }
})(window, document);
