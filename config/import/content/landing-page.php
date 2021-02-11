<?php
/**
 * Farmhouse Theme.
 *
 * Landing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$farmhouse_main_image_url 	= CHILD_URL . '/config/import/images/large-bg.jpg';

return <<<CONTENT
<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress. This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","id":80365,"sizeSlug":"large"} -->
<figure class="wp-block-image alignwide size-large"><img src="$farmhouse_main_image_url" alt="" class="wp-image-80365"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress. This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress. This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->
CONTENT;
