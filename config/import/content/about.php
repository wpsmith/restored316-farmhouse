<?php
/**
 * Farmhouse Theme.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$farmhouse_about1_image_url   = CHILD_URL . '/config/import/images/about1.jpg';
$farmhouse_about2_image_url = CHILD_URL . '/config/import/images/about2.jpg';

return <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-wideleft","align":"full","marginUnit":"%","columnMaxWidth":1000} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-wideleft gb-columns-center alignfull"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1000px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center","className":"is-style-offset-down"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-offset-down gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80258,"sizeSlug":"full","className":"offset-down"} -->
<figure class="wp-block-image size-full offset-down"><img src="$farmhouse_about1_image_url" alt="" class="wp-image-80258"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"is-style-capital-text"} -->
<p class="is-style-capital-text">About me</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Hi, I'm Lauren!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Cotton candy gingerbread chocolate bar tootsie roll. Candy donut jelly chocolate bar wafer dessert icing gummies cotton candy. Cookie muffin macaroon candy canes. Jujubes candy gummies lollipop.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sesame snaps topping candy canes toffee jelly beans gummies. Fruitcake cotton candy marshmallow dragee cake fruitcake ice cream dessert cupcake. Cupcake gummi bears bear claw chocolate pudding. Jujubes caramels jelly beans carrot cake dragee cheesecake gingerbread macaroon.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-wideright","align":"full","marginUnit":"%","columnMaxWidth":1000} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-wideright gb-columns-center alignfull"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1000px"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:paragraph -->
<p>Jelly tart chocolate tiramisu chupa chups wafer candy macaroon. Lemon drops tart sugar plum cotton candy marzipan sweet roll cupcake icing pudding. Apple pie dragee candy canes candy halvah marzipan chupa chups lollipop. Sesame snaps apple pie dessert tootsie roll gummies brownie tootsie roll apple pie.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Muffin tiramisu tiramisu cookie. Souffle danish jelly. Tiramisu marshmallow chocolate carrot cake chocolate cake chocolate bar lollipop powder dragee. Jelly-o candy canes dragee powder gummies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-script-text"} -->
<p class="is-style-script-text">Lauren</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center","className":"is-style-offset-up"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-offset-up gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80259,"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="$farmhouse_about2_image_url" alt="" class="wp-image-80259"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"backgroundDimRatio":20,"focalPoint":{"x":"0.58","y":"0.44"},"columns":2,"layout":"gb-2-col-equal","align":"full","paddingSync":true,"padding":5,"paddingUnit":"%","backgroundColor":"theme-primary","columnMaxWidth":800} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal gb-has-background-dim gb-has-background-dim-20 has-theme-primary-background-color gb-columns-center alignfull" style="padding:5%;background-position:57.99999999999999% 44%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:800px"><!-- wp:genesis-blocks/gb-column {"paddingUnit":"%","padding":20,"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:heading {"align":"left","level":4,"className":"is-style-small-text"} -->
<h4 class="has-text-align-left is-style-small-text">Where you can find me!</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus non erat in ipsum viverra tempus. Sed ac odio sit amet quam rhoncus euismod. Duis congue laoreet augue, vel malesuada dui volutpat sit amet. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"left"} -->
<div class="wp-block-buttons alignleft"><!-- wp:button {"borderRadius":0,"textColor":"theme-button","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-theme-button-color has-text-color no-border-radius" href="http://instagram.com" target="_blank" rel="noreferrer noopener">Follow me</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"paddingSync":true,"paddingUnit":"%"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[instagram-feed num=4 cols=2 showheader=false showbutton=false showfollow=false]
<!-- /wp:shortcode --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingRight":5,"containerPaddingBottom":5,"containerPaddingLeft":5,"containerMaxWidth":1220,"align":"full"} -->
<div style="padding-left:5%;padding-right:5%;padding-bottom:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1220px"><!-- wp:genesis-blocks/gb-post-grid {"className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":4,"sectionTitle":"Some of my favs","imageSize":"gb-block-post-grid-square"} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;
