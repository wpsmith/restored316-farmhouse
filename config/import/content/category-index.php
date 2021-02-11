<?php
/**
 * Farmhouse Theme.
 *
 * Category Index content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */
 
return <<<CONTENT
<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":3,"containerPaddingRight":3,"containerPaddingBottom":3,"containerPaddingLeft":3,"containerMaxWidth":1220,"align":"full"} -->
<div style="padding-left:3%;padding-right:3%;padding-bottom:3%;padding-top:3%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1220px"><!-- wp:genesis-blocks/gb-post-grid {"categories":"82","className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":4,"sectionTitle":"Latest Travel","imageSize":"vertical-entry-image"} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":3,"containerPaddingRight":3,"containerPaddingBottom":3,"containerPaddingLeft":3,"containerMaxWidth":1220,"containerBackgroundColor":"#f4f1ea","align":"full"} -->
<div style="background-color:#f4f1ea;padding-left:3%;padding-right:3%;padding-bottom:3%;padding-top:3%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1220px"><!-- wp:genesis-blocks/gb-post-grid {"categories":"77","className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":4,"sectionTitle":"Latest Fashion","imageSize":"vertical-entry-image"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","align":"full","marginBottom":10,"columnMaxWidth":1220} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal gb-columns-center alignfull" style="margin-bottom:10px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1220px"><!-- wp:genesis-blocks/gb-column {"paddingSync":true,"paddingUnit":"%","padding":5,"columnVerticalAlignment":"center","className":"border"} -->
<div class="wp-block-genesis-blocks-gb-column border gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="padding:5%"><!-- wp:genesis-blocks/gb-post-grid {"categories":"78","className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"sectionTitle":"Latest Fitness","imageSize":"vertical-entry-image"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"paddingSync":true,"paddingUnit":"%","padding":5,"className":"border"} -->
<div class="wp-block-genesis-blocks-gb-column border gb-block-layout-column"><div class="gb-block-layout-column-inner" style="padding:5%"><!-- wp:genesis-blocks/gb-post-grid {"categories":"81","className":"smaller-title","postsToShow":2,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"sectionTitle":"Latest Self-Care","imageSize":"vertical-entry-image"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;
