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

$farmhouse_home3_content = <<<CONTENT
<!-- wp:genesis-blocks/gb-container {"align":"full","className":"is-style-angled-underlay"} -->
<div class="wp-block-genesis-blocks-gb-container alignfull is-style-angled-underlay gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:genesis-blocks/gb-columns {"columns":6,"layout":"gb-6-col-equal","align":"full","paddingTop":3,"paddingRight":3,"paddingLeft":3,"paddingUnit":"%"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-6 gb-6-col-equal alignfull" style="padding-top:3%;padding-right:3%;padding-left:3%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample1_image_url","focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingUnit":"%","padding":5,"paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample1_image_url);background-position:63.716814159292035% 51.99999640969669%"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"theme-secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-theme-secondary-background-color has-background no-border-radius">Beauty</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample2_image_url","focalPoint":{"x":0.552,"y":0.6317646699793199},"paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample2_image_url);background-position:55.2% 63.17646699793199%"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"theme-secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-theme-secondary-background-color has-background no-border-radius">fashion</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample3_image_url","backgroundDimRatio":50,"focalPoint":{"x":0.4778761061946903,"y":0.596470552332261},"paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-has-background-dim gb-has-background-dim-50 gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample3_image_url);background-position:47.78761061946903% 59.6470552332261%"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"theme-secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-theme-secondary-background-color has-background no-border-radius">fitness</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample1_image_url","paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample1_image_url)"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"theme-secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-theme-secondary-background-color has-background no-border-radius">food</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample2_image_url","paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample2_image_url)"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"theme-secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-theme-secondary-background-color has-background no-border-radius">home decor</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample3_image_url","paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample3_image_url)"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"theme-secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-theme-secondary-background-color has-background no-border-radius">travel</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingRight":5,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1220,"className":"is-style-default"} -->
<div style="padding-left:5%;padding-right:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container is-style-default gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1220px"><!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":4,"sectionTitle":"Latest from the Blog","imageSize":"vertical-entry-image"} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"hasParallax":true,"columns":2,"layout":"gb-2-col-wideright","align":"full","marginSync":true,"marginUnit":"%","paddingSync":true,"padding":5,"paddingTop":3,"paddingBottom":3,"paddingUnit":"%","backgroundColor":"theme-primary","columnMaxWidth":1240} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-wideright gb-has-parallax has-theme-primary-background-color gb-columns-center alignfull" style="padding:5%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1240px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center","paddingSync":true,"paddingUnit":"%","padding":5,"columnVerticalAlignment":"top"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-top"><div class="gb-block-layout-column-inner" style="padding:5%;text-align:center"><!-- wp:heading {"align":"left","level":4} -->
<h4 class="has-text-align-left">Latest Home Decor Tips</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lob.</p>
<!-- /wp:paragraph -->

<!-- wp:button {"borderRadius":0,"align":"left","className":"is-style-fill"} -->
<div class="wp-block-button alignleft is-style-fill"><a class="wp-block-button__link no-border-radius" href="/category/favs/">More Home Decor</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"paddingSync":true,"paddingUnit":"%","padding":5,"columnVerticalAlignment":"center","className":"light-text"} -->
<div class="wp-block-genesis-blocks-gb-column light-text gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="padding:5%"><!-- wp:genesis-blocks/gb-post-grid {"categories":"77","className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"postTitleTag":"h4","columns":3,"sectionTitle":"Recent Recipes","imageSize":"vertical-entry-image"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":3,"containerPaddingRight":5,"containerPaddingBottom":3,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1240} -->
<div style="padding-left:5%;padding-right:5%;padding-bottom:3%;padding-top:3%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1240px"><!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":4,"offset":4,"sectionTitle":"Latest in Travel","imageSize":"vertical-entry-image"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"backgroundImgURL":"$farmhouse_main_image_url","backgroundDimRatio":20,"hasParallax":true,"columns":2,"layout":"gb-2-col-equal","align":"full","padding":5,"paddingTop":8,"paddingRight":5,"paddingBottom":8,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#ffffff","columnMaxWidth":1220} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal gb-has-background-dim gb-has-background-dim-20 gb-background-cover gb-background-no-repeat gb-has-parallax gb-has-custom-background-color gb-columns-center alignfull" style="padding-top:8%;padding-right:5%;padding-bottom:8%;padding-left:5%;background-color:#ffffff;background-image:url($farmhouse_main_image_url)"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1220px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:heading -->
<h2>Plan your next month of Instagram with this free guide</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-capital-text"} -->
<p class="is-style-capital-text">free with your name and email address</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus non erat in ipsum viverra tempus. Sed ac odio sit amet quam rhoncus euismod. Duis congue laoreet augue, vel malesuada dui volutpat sit amet.&nbsp;</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"paddingUnit":"%","columnVerticalAlignment":"center","className":"light-text"} -->
<div class="wp-block-genesis-blocks-gb-column light-text gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:html -->
YOUR CODE HERE
<!-- /wp:html --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;

return $farmhouse_home3_content;
