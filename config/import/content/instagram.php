<?php
/**
 * Farmhouse Theme.
 *
 * Instagram content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return <<<CONTENT
<!-- wp:genesis-blocks/gb-container {"containerPaddingRight":5,"containerPaddingLeft":5} -->
<div style="padding-left:5%;padding-right:5%" class="wp-block-genesis-blocks-gb-container gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:heading {"align":"center","level":3,"className":"site-title"} -->
<h3 class="has-text-align-center site-title">Farmhouse</h3>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":44} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:44px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Hi there Instagram friends!  Welcome to our page dedicated to all of our lovely followers.  Below you will find all the most helpful links and content that you?re looking for without scrolling all the way through our site!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"borderRadius":0,"className":"full is-style-outline"} -->
<div class="wp-block-button full is-style-outline"><a class="wp-block-button__link no-border-radius">Home</a></div>
<!-- /wp:button -->

<!-- wp:button {"borderRadius":0,"className":"full is-style-outline"} -->
<div class="wp-block-button full is-style-outline"><a class="wp-block-button__link no-border-radius">About</a></div>
<!-- /wp:button -->

<!-- wp:button {"borderRadius":0,"className":"full is-style-outline"} -->
<div class="wp-block-button full is-style-outline"><a class="wp-block-button__link no-border-radius">Blog</a></div>
<!-- /wp:button -->

<!-- wp:button {"borderRadius":0,"className":"full is-style-outline"} -->
<div class="wp-block-button full is-style-outline"><a class="wp-block-button__link no-border-radius">Index</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingRight":5,"containerPaddingLeft":5,"containerMaxWidth":1600} -->
<div style="padding-left:5%;padding-right:5%" class="wp-block-genesis-blocks-gb-container gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1600px"><!-- wp:heading {"align":"center","level":4} -->
<h4 class="has-text-align-center">Latest from the Blog</h4>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"columns":3,"imageSize":"vertical-entry-image"} /-->

<!-- wp:button {"borderRadius":0,"align":"center","className":"is-style-outline"} -->
<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link no-border-radius" href="/blog/">more from the blog</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;
