<?php
/**
 * Farmhouse Theme.
 *
 * Homepage content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */
 
$farmhouse_main_image_url 	= CHILD_URL . '/config/import/images/large-bg.jpg';
$farmhouse_sample1_image_url  = CHILD_URL . '/config/import/images/sample1.jpg';
$farmhouse_sample2_image_url  = CHILD_URL . '/config/import/images/sample2.jpg';
$farmhouse_sample3_image_url  = CHILD_URL . '/config/import/images/sample3.jpg';

$farmhouse_home4_content = <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"backgroundImgURL":"$farmhouse_main_image_url","hasParallax":true,"columns":1,"layout":"gb-1-col-equal","columnsGap":0,"align":"full","paddingTop":10,"paddingBottom":10,"paddingUnit":"%","columnMaxWidth":600} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 gb-1-col-equal gb-background-cover gb-background-no-repeat gb-has-parallax gb-columns-center alignfull" style="padding-top:10%;padding-bottom:10%;background-image:url($farmhouse_main_image_url)"><div class="gb-layout-column-wrap gb-block-layout-column-gap-0 gb-is-responsive-column" style="max-width:600px"><!-- wp:genesis-blocks/gb-column {"focalPoint":{"x":"0.33","y":"0.78"},"customBackgroundColor":"#ffffff","paddingSync":true,"paddingUnit":"%","padding":15,"paddingTop":5,"paddingRight":10,"paddingBottom":5,"paddingLeft":10,"className":"is-style-black-border"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-black-border gb-block-layout-column"><div class="gb-block-layout-column-inner gb-has-custom-background-color" style="padding:15%;background-color:#ffffff;background-position:33% 78%"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Helping women live their best life!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">With looking good, feeling great, and traveling smart!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Learn more</a></div>
<!-- /wp:button -->

<!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Read  the  blog</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"containerMaxWidth":600} -->
<div class="wp-block-genesis-blocks-gb-container gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:600px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Would you like the take your business to the next level?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-capital-text"} -->
<p class="has-text-align-center is-style-capital-text">... let's see how I can help you!</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"hasParallax":true,"columns":3,"layout":"gb-3-col-equal","align":"full","paddingSync":true,"padding":5,"paddingTop":5,"paddingRight":5,"paddingBottom":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1220} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal gb-has-parallax gb-columns-center alignfull" style="padding:5%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1220px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80279,"sizeSlug":"large","className":"is-style-offset-border-style"} -->
<figure class="wp-block-image size-large is-style-offset-border-style"><a href="#"><img src="$farmhouse_sample1_image_url" alt="" class="wp-image-80279"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">generate more revenue</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"paddingUnit":"%","columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80291,"sizeSlug":"large","className":"is-style-book-style is-style-offset-border-style"} -->
<figure class="wp-block-image size-large is-style-book-style is-style-offset-border-style"><a href="#"><img src="$farmhouse_sample2_image_url" alt="" class="wp-image-80291"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">build more community</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80296,"sizeSlug":"large","className":"is-style-book-style is-style-offset-border-style"} -->
<figure class="wp-block-image size-large is-style-book-style is-style-offset-border-style"><a href="#"><img src="$farmhouse_sample3_image_url" alt="" class="wp-image-80296"/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">create residual income</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingBottom":5,"containerMaxWidth":1240,"containerBackgroundColor":"#f4f1ea","align":"full"} -->
<div style="background-color:#f4f1ea;padding-bottom:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1240px"><!-- wp:paragraph {"align":"center","className":"is-style-script-text"} -->
<p class="has-text-align-center is-style-script-text">in the shop</p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-top-rated {"rows":1,"alignButtons":true,"contentVisibility":{"title":true,"price":false,"rating":false,"button":false}} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":3,"containerPaddingBottom":3,"containerMaxWidth":1220,"align":"full"} -->
<div style="padding-bottom:3%;padding-top:3%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1220px"><!-- wp:heading {"align":"center","level":3,"className":"script is-style-script-text"} -->
<h3 class="has-text-align-center script is-style-script-text">as seen on</h3>
<!-- /wp:heading -->

<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingRight":5,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1240,"containerBackgroundColor":"#ffffff","className":"is-style-angled-underlay"} -->
<div style="background-color:#ffffff;padding-left:5%;padding-right:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container is-style-angled-underlay gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1240px"><!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":4,"sectionTitle":"Latest Helpful Blog Posts","imageSize":"vertical-entry-image"} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;

return $farmhouse_home4_content;
