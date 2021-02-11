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
 
$farmhouse_sample1_image_url  = CHILD_URL . '/config/import/images/sample1.jpg';

$farmhouse_home2_content = <<<CONTENT
<!-- wp:genesis-blocks/gb-container {"align":"full","className":"is-style-angled-underlay"} -->
<div class="wp-block-genesis-blocks-gb-container alignfull is-style-angled-underlay gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","align":"full","paddingTop":3,"paddingBottom":2,"paddingUnit":"%","columnMaxWidth":1240} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-columns-center alignfull" style="padding-top:3%;padding-bottom:2%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1240px"><!-- wp:genesis-blocks/gb-column {"className":"is-style-default"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-default gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title is-style-overlay","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"columns":3,"imageSize":"vertical-entry-image"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"backgroundDimRatio":20,"hasParallax":true,"columns":2,"layout":"gb-2-col-wideright","align":"full","padding":5,"paddingTop":5,"paddingRight":5,"paddingBottom":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":900} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-wideright gb-has-background-dim gb-has-background-dim-20 gb-has-parallax gb-columns-center alignfull" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:900px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80281,"sizeSlug":"large","className":"is-style-shadow-style"} -->
<figure class="wp-block-image size-large is-style-shadow-style"><img src="$farmhouse_sample1_image_url" alt="" class="wp-image-80281"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"paddingUnit":"%","columnVerticalAlignment":"top"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-top"><div class="gb-block-layout-column-inner"><!-- wp:heading -->
<h2>Plan your next month of Instagram with this free guide</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-capital-text"} -->
<p class="is-style-capital-text">free with your name and email address</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus non erat in ipsum viverra tempus. Sed ac odio sit amet quam rhoncus euismod. </p>
<!-- /wp:paragraph -->

<!-- wp:html -->
YOUR CODE HERE
<!-- /wp:html --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-wideleft","columnsGap":3,"align":"full","marginTop":5,"marginUnit":"%","paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1280,"className":"home-content-sidebar"} -->
<div class="wp-block-genesis-blocks-gb-columns home-content-sidebar gb-layout-columns-2 gb-2-col-wideleft gb-columns-center alignfull" style="margin-top:5%;padding-right:5%;padding-left:5%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-3 gb-is-responsive-column" style="max-width:1280px"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:genesis-blocks/gb-post-grid {"postsToShow":1,"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":1,"offset":3,"excerptLength":35,"sectionTitle":"Latest from the Blog","sectionTitleTag":"h3","imageSize":"horizontal-entry-image"} /-->

<!-- wp:genesis-blocks/gb-post-grid {"postsToShow":4,"displayPostDate":false,"displayPostAuthor":false,"postTitleTag":"h4","offset":1,"excerptLength":35,"sectionTitle":"Latest from the Blog","sectionTitleTag":"h3","imageSize":"gb-block-post-grid-square"} /-->

<!-- wp:button {"borderRadius":0,"align":"center","className":"is-style-outline"} -->
<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link no-border-radius" href="/blog">More on the blog</a></div>
<!-- /wp:button -->

<!-- wp:genesis-blocks/gb-post-grid {"categories":"77","className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":3,"sectionTitle":"Latest Travel","imageSize":"gb-block-post-grid-square"} /-->

<!-- wp:genesis-blocks/gb-post-grid {"categories":"81","className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":3,"sectionTitle":"Latest Fashion","imageSize":"gb-block-post-grid-square"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:shortcode -->
[get_sidebar id='block-sidebar']
<!-- /wp:shortcode --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;

return $farmhouse_home2_content;
