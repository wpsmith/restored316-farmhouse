<?php
/**
 * Farmhouse Theme Sales page.
 *
 * Sales page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$farmhouse_main_image_url 	= CHILD_URL . '/config/import/images/large-bg.jpg';
$farmhouse_about3_image_url   = CHILD_URL . '/config/import/images/about3.jpg';

$farmhouse_sales_content = <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"backgroundImgURL":"$farmhouse_main_image_url","hasParallax":true,"columns":1,"layout":"gb-1-col-equal","columnsGap":0,"align":"full","paddingTop":10,"paddingBottom":10,"paddingUnit":"%","columnMaxWidth":600} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 gb-1-col-equal gb-background-cover gb-background-no-repeat gb-has-parallax gb-columns-center alignfull" style="padding-top:10%;padding-bottom:10%;background-image:url($farmhouse_main_image_url)"><div class="gb-layout-column-wrap gb-block-layout-column-gap-0 gb-is-responsive-column" style="max-width:600px"><!-- wp:genesis-blocks/gb-column {"focalPoint":{"x":"0.33","y":"0.78"},"customBackgroundColor":"#ffffff","paddingSync":true,"paddingUnit":"%","padding":15,"paddingTop":5,"paddingRight":10,"paddingBottom":5,"paddingLeft":10,"className":"is-style-black-border"} -->
<div class="wp-block-genesis-blocks-gb-column is-style-black-border gb-block-layout-column"><div class="gb-block-layout-column-inner gb-has-custom-background-color" style="padding:15%;background-color:#ffffff;background-position:33% 78%"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">An eye grabbing and attention seeking title goes here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">enter a small description of your offer that will reach your ideal customer</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Enroll now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":10,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200,"containerDimRatio":20} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1200px"><!-- wp:heading {"align":"center","className":"fade-in-up"} -->
<h2 class="has-text-align-center fade-in-up">Does any of this sound familiar?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"fade-in-up"} -->
<p class="has-text-align-center fade-in-up">Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Nam non mi  arcu. Etiam mauris justo, tincidunt at  magna nec, bibendum dapibus elit.  Etiam interdum volutpat volutpat  hendrerit. Aliquam eu mollis risus, in  sagittis nibh. Duis non nulla  eget.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":37} -->
<div style="height:37px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"has-3-columns fade-in-up"} -->
<div class="wp-block-columns has-3-columns fade-in-up"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":4,"className":"script is-style-script-text"} -->
<h4 class="has-text-align-center script is-style-script-text">problem 1</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">With an emphasis on typography, white space, and mobile-optimized design, your website will look absolutely breathtaking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":4,"className":"script is-style-script-text"} -->
<h4 class="has-text-align-center script is-style-script-text">problem 2</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Our team will teach you the art of writing audience-focused content that will help you achieve the success you truly deserve.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":4,"className":"script is-style-script-text"} -->
<h4 class="has-text-align-center script is-style-script-text">problem 3</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We help creative entrepreneurs build their digital business by focusing on three key elements of a successful online platform.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingBottom":10,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#f4f1ea","containerDimRatio":100} -->
<div style="background-color:#f4f1ea;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1200px"><!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">What if you could...</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi 
arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit.
 Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis 
mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ut aliquam vitae nulla in egestas. In 
tempus at ex ac hendrerit. Phasellus id tempor turpis. Aenean ultrices 
sem ut viverra scelerisque. Quisque aliquam mauris eu nisl interdum, eu 
porta est rhoncus. Proin volutpat lorem sit amet orci venenatis dictum.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":10,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":800} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:800px"><!-- wp:heading {"align":"center","level":3,"className":"subtitle is-style-small-text"} -->
<h3 class="has-text-align-center subtitle is-style-small-text">Introducing </h3>
<!-- /wp:heading -->

<!-- wp:heading {"align":"center","className":"no-margin"} -->
<h2 class="has-text-align-center no-margin">Name of your course or offer here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":80365,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="$farmhouse_main_image_url" alt="" class="wp-image-80365"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4>Here is what you get:</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li></ul>
<!-- /wp:list --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","columnsGap":1,"align":"full","paddingSync":true,"padding":10,"paddingUnit":"%","backgroundColor":"theme-secondary","columnMaxWidth":1200,"className":"light-text"} -->
<div class="wp-block-genesis-blocks-gb-columns light-text gb-layout-columns-2 gb-2-col-equal has-theme-secondary-background-color gb-columns-center alignfull" style="padding:10%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-1 gb-is-responsive-column" style="max-width:1200px"><!-- wp:genesis-blocks/gb-column {"paddingSync":true,"paddingUnit":"%","paddingRight":10,"paddingLeft":10} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>This course is for you if:</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li></ul>
<!-- /wp:list --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>This course is NOT for you if:</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li></ul>
<!-- /wp:list --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-wideright","columnsGap":3,"align":"full","paddingSync":true,"padding":10,"paddingUnit":"%","columnMaxWidth":1200} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-wideright gb-columns-center alignfull" style="padding:10%"><div class="gb-layout-column-wrap gb-block-layout-column-gap-3 gb-is-responsive-column" style="max-width:1200px"><!-- wp:genesis-blocks/gb-column {"paddingSync":true,"paddingUnit":"%","paddingRight":10,"paddingLeft":10} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:image {"id":80278,"sizeSlug":"full","className":"is-style-offset-border-style"} -->
<figure class="wp-block-image size-full is-style-offset-border-style"><img src="$farmhouse_about3_image_url" alt="" class="wp-image-80278"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:heading {"level":3,"className":"script"} -->
<h3 class="script">Meet your teacher</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi 
arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit.
 Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis 
mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi 
arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit.
 Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis 
mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingBottom":5,"containerWidth":"full","containerMaxWidth":800,"containerBackgroundColor":"#f4f1ea"} -->
<div style="background-color:#f4f1ea;padding-bottom:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:800px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Call to Action here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph -->

<!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Enroll me!</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;

return $farmhouse_sales_content;
