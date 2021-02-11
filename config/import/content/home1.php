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
$farmhouse_about3_image_url   = CHILD_URL . '/config/import/images/about3.jpg';

$farmhouse_home1_content = <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"backgroundImgURL":"$farmhouse_main_image_url","backgroundDimRatio":30,"hasParallax":true,"columns":1,"layout":"one-column","align":"full","paddingTop":13,"paddingRight":5,"paddingBottom":13,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#ffffff","columnMaxWidth":800} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-has-background-dim gb-has-background-dim-30 gb-background-cover gb-background-no-repeat gb-has-parallax gb-has-custom-background-color gb-columns-center alignfull" style="padding-top:13%;padding-right:5%;padding-bottom:13%;padding-left:5%;background-color:#ffffff;background-image:url($farmhouse_main_image_url)"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:800px"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Let's launch your day <em>dream</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","className":"is-style-capital-text"} -->
<p class="has-text-align-left is-style-capital-text">dreaming. executing. flourishing.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-button-line"} -->
<div class="wp-block-button is-style-button-line"><a class="wp-block-button__link no-border-radius">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"backgroundDimRatio":30,"hasParallax":true,"columns":2,"layout":"gb-2-col-equal","align":"full","paddingTop":5,"paddingBottom":5,"paddingUnit":"%","columnMaxWidth":1000} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal gb-has-background-dim gb-has-background-dim-30 gb-has-parallax gb-columns-center alignfull" style="padding-top:5%;padding-bottom:5%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1000px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"align":"center","className":"is-style-capital-text"} -->
<p class="has-text-align-center is-style-capital-text">Welcome to the</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"center","className":"no-margin"} -->
<h2 class="has-text-align-center no-margin">Farmhouse Theme</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","className":"is-style-default"} -->
<p class="has-text-align-center is-style-default">Macaroon sesame snaps drage lemon drops liquorice chocolate bar. Bear claw cake pie gingerbread gummies cake. Apple pie bear claw bear claw. Cookie sweet sweet roll candy canes muffin cupcake chupa chups. Toffee jujubes cake gingerbread oat cake chocolate bar chocolate cake lemon drops. Toffee cake donut jelly-o cookie toffee cookie dessert. Muffin souffle jelly caramels. Cookie sugar plum liquorice cheesecake danish. Chocolate chupa chups tiramisu dragee cake cheesecake bear claw icing cookie.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"className":"is-style-default"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-default gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80278,"sizeSlug":"large","className":"is-style-shadow-style"} -->
<figure class="wp-block-image size-large is-style-shadow-style"><img src="$farmhouse_about3_image_url" alt="" class="wp-image-80278"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"align":"full","className":"is-style-angled-underlay"} -->
<div class="wp-block-genesis-blocks-gb-container alignfull is-style-angled-underlay gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal","align":"full","paddingTop":5,"paddingRight":3,"paddingBottom":5,"paddingLeft":3,"paddingUnit":"%","columnMaxWidth":1240} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal gb-columns-center alignfull" style="padding-top:5%;padding-right:3%;padding-bottom:5%;padding-left:3%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1240px"><!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample1_image_url","focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingUnit":"%","padding":5,"paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample1_image_url);background-position:63.716814159292035% 51.99999640969669%"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Blog</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample2_image_url","focalPoint":{"x":0.552,"y":0.6317646699793199},"paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample2_image_url);background-position:55.2% 63.17646699793199%"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Shop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundImgURL":"$farmhouse_sample3_image_url","backgroundDimRatio":50,"focalPoint":{"x":0.4778761061946903,"y":0.596470552332261},"paddingUnit":"%","paddingTop":50,"paddingBottom":50} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner gb-has-background-dim gb-has-background-dim-50 gb-background-cover gb-background-no-repeat" style="padding-top:50%;padding-bottom:50%;background-image:url($farmhouse_sample3_image_url);background-position:47.78761061946903% 59.6470552332261%"><!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
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

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingBottom":5,"align":"full","className":"is-style-default"} -->
<div style="padding-bottom:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container alignfull is-style-default gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:paragraph {"align":"center","className":"is-style-capital-text"} -->
<p class="has-text-align-center is-style-capital-text">what we offer</p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":48} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:48px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal","paddingUnit":"%","columnMaxWidth":1240} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal gb-columns-center"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1240px"><!-- wp:genesis-blocks/gb-column {"focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingSync":true,"paddingUnit":"%","padding":5,"paddingTop":50,"paddingBottom":50,"className":"is-style-border"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-border gb-block-layout-column"><div class="gb-block-layout-column-inner" style="padding:5%;background-position:63.716814159292035% 51.99999640969669%"><!-- wp:image {"id":80297,"sizeSlug":"large","className":"is-style-shadow-style"} -->
<figure class="wp-block-image size-large is-style-shadow-style"><img src="$farmhouse_sample1_image_url" alt="" class="wp-image-80297"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3} -->
<h3 class="has-text-align-center">Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Cookie caramels chocolate cake. Sweet roll sugar plum toffee tiramisu lemon drops donut halvah. Chupa chups sweet powder sweet roll cotton candy halvah ice cream gummi bears chocolate. Cheesecake muffin lollipop muffin muffin candy gingerbread candy canes. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"focalPoint":{"x":0.552,"y":0.6317646699793199},"paddingSync":true,"paddingUnit":"%","padding":5,"paddingTop":50,"paddingBottom":50,"className":"is-style-border"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-border gb-block-layout-column"><div class="gb-block-layout-column-inner" style="padding:5%;background-position:55.2% 63.17646699793199%"><!-- wp:image {"id":80286,"sizeSlug":"horizontal-entry-image","className":"is-style-shadow-style"} -->
<figure class="wp-block-image size-horizontal-entry-image is-style-shadow-style"><img src="$farmhouse_sample2_image_url" alt="" class="wp-image-80286"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3} -->
<h3 class="has-text-align-center">Coaching</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Cookie caramels chocolate cake. Sweet roll sugar plum toffee tiramisu lemon drops donut halvah. Chupa chups sweet powder sweet roll cotton candy halvah ice cream gummi bears chocolate. Cheesecake muffin lollipop muffin muffin candy gingerbread candy canes. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"backgroundDimRatio":50,"focalPoint":{"x":0.4778761061946903,"y":0.596470552332261},"paddingSync":true,"paddingUnit":"%","padding":5,"paddingTop":50,"paddingBottom":50,"columnVerticalAlignment":"center","className":"is-style-border"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-border gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner gb-has-background-dim gb-has-background-dim-50" style="padding:5%;background-position:47.78761061946903% 59.6470552332261%"><!-- wp:image {"id":80280,"sizeSlug":"horizontal-entry-image","className":"is-style-shadow-style"} -->
<figure class="wp-block-image size-horizontal-entry-image is-style-shadow-style"><img src="$farmhouse_sample3_image_url" alt="" class="wp-image-80280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3} -->
<h3 class="has-text-align-center">Marketing</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Cookie caramels chocolate cake. Sweet roll sugar plum toffee tiramisu lemon drops donut halvah. Chupa chups sweet powder sweet roll cotton candy halvah ice cream gummi bears chocolate. Cheesecake muffin lollipop muffin muffin candy gingerbread candy canes. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"backgroundImgURL":"$farmhouse_main_image_url","backgroundDimRatio":20,"hasParallax":true,"columns":1,"layout":"gb-1-col-equal","align":"full","paddingSync":true,"padding":5,"paddingTop":5,"paddingRight":5,"paddingBottom":5,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#ffffff","columnMaxWidth":850} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 gb-1-col-equal gb-has-background-dim gb-has-background-dim-20 gb-background-cover gb-background-no-repeat gb-has-parallax gb-has-custom-background-color gb-columns-center alignfull" style="padding:5%;background-color:#ffffff;background-image:url($farmhouse_main_image_url)"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:850px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:shortcode -->
[testimonial_rotator id="80347"]
<!-- /wp:shortcode --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-wideleft","columnsGap":3,"align":"full","marginTop":5,"marginUnit":"%","paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1220,"className":"home-content-sidebar"} -->
<div class="wp-block-genesis-blocks-gb-columns home-content-sidebar gb-layout-columns-2 gb-2-col-wideleft gb-columns-center alignfull" style="margin-top:5%;padding-right:5%;padding-left:5%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-3 gb-is-responsive-column" style="max-width:1220px"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-post-grid {"postsToShow":1,"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":1,"excerptLength":35,"sectionTitle":"Latest from the Blog","sectionTitleTag":"h3","imageSize":"horizontal-entry-image"} /-->

<!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"postTitleTag":"h4","columns":3,"offset":1,"sectionTitle":"Latest Dinner Recipes","sectionTitleTag":"h3","imageSize":"vertical-entry-image"} /-->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="/blog/">More on the blog</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:shortcode -->
[get_sidebar id='block-sidebar']
<!-- /wp:shortcode --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;

return $farmhouse_home1_content;
