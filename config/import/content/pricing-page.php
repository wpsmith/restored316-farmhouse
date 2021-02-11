<?php
/**
 * Farmhouse pricing page.
 *
 * Pricing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return <<<CONTENT
<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Two Columns</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-pricing -->
<div class="wp-block-genesis-blocks-gb-pricing gb-pricing-columns-2"><div class="gb-pricing-table-wrap gb-block-pricing-table-gap-2"><!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage One\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package One</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a basic offer.\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a basic offer.</em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"99","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">99</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-medium" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table -->

<!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage Two\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package Two</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003e\u003cem\u003eThis is an advanced offer.\u003c/em\u003e\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em><em>This is an advanced offer.</em></em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"199","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">199</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonSize":"gb-button-size-small","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-small" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table --></div></div>
<!-- /wp:genesis-blocks/gb-pricing -->

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Three Columns</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-pricing {"columns":3} -->
<div class="wp-block-genesis-blocks-gb-pricing gb-pricing-columns-3"><div class="gb-pricing-table-wrap gb-block-pricing-table-gap-2"><!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage One\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package One</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a basic offer.\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a basic offer.</em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"99","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">99</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-medium" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table -->

<!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage Two\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package Two</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003e\u003cem\u003eThis is an advanced offer.\u003c/em\u003e\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em><em>This is an advanced offer.</em></em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"199","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">199</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonSize":"gb-button-size-small","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-small" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table -->

<!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage Three\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package Three</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"This is a premium offer."} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">This is a premium offer.</div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"299","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">299</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-medium" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table --></div></div>
<!-- /wp:genesis-blocks/gb-pricing -->

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Four Columns</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-pricing {"columns":4} -->
<div class="wp-block-genesis-blocks-gb-pricing gb-pricing-columns-4"><div class="gb-pricing-table-wrap gb-block-pricing-table-gap-2"><!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage One\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package One</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a basic offer.\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a basic offer.</em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"99","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">99</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-medium" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table -->

<!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage Two\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package Two</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003e\u003cem\u003eThis is an advanced offer.\u003c/em\u003e\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em><em>This is an advanced offer.</em></em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"199","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">199</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonSize":"gb-button-size-small","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-small" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table -->

<!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage Three\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package Three</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"This is a premium offer."} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">This is a premium offer.</div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"299","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">299</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-medium" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table -->

<!-- wp:genesis-blocks/gb-pricing-table {"borderWidth":1,"borderColor":"#f4f1ea"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table gb-block-pricing-table-center gb-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="gb-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#f4f1ea"><!-- wp:genesis-blocks/gb-pricing-table-title {"title":"\u003cstrong\u003ePackage 4\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-genesis-blocks-gb-pricing-table-title gb-pricing-table-title has-medium-font-size"><strong>Package 4</strong></div>
<!-- /wp:genesis-blocks/gb-pricing-table-title -->

<!-- wp:genesis-blocks/gb-pricing-table-subtitle {"subtitle":"\u003cem\u003e\u003cem\u003eThis is an advanced premium offer.\u003c/em\u003e\u003c/em\u003e"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-subtitle gb-pricing-table-subtitle" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em><em>This is an advanced premium offer.</em></em></div>
<!-- /wp:genesis-blocks/gb-pricing-table-subtitle -->

<!-- wp:genesis-blocks/gb-pricing-table-price {"price":"399","currency":"$","term":"/mo"} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-price gb-pricing-table-price-wrap gb-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="gb-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="gb-pricing-table-price" style="font-size:60px">399</div><span class="gb-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-price -->

<!-- wp:genesis-blocks/gb-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-genesis-blocks-gb-pricing-table-features gb-pricing-table-features gb-list-border-none gb-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Logo concept</li><li>5-page web design</li><li>3 hours of training</li><li>2 Email templates</li></ul>
<!-- /wp:genesis-blocks/gb-pricing-table-features -->

<!-- wp:genesis-blocks/gb-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#272c30","buttonShape":"gb-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-genesis-blocks-gb-pricing-table-button gb-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="gb-block-button"><a class="gb-button gb-button-shape-square gb-button-size-medium" style="color:#ffffff;background-color:#272c30">Buy Now</a></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table-button --></div></div>
<!-- /wp:genesis-blocks/gb-pricing-table --></div></div>
<!-- /wp:genesis-blocks/gb-pricing -->
CONTENT;
