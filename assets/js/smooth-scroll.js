/**
 * Smooth Scroll.
 *
 * Scrolls to the select
 *
 * @package Farmhouse Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

var restored = restored || {};

restored.smoothScroll = ( function( $ ) {
	'use strict';

	var scrollSpeed = 1000,

	scrollTo = function( clickedLink, event ) {
		var target = $( clickedLink.hash );

		// Abort if link points outside the current page.
		if ( window.location.hostname !== clickedLink.hostname ) {
			return;
		}

		if ( window.location.pathname !== clickedLink.pathname ) {
			return;
		}

		if ( 0 === target.length ) {
			target = $( '[name=' + clickedLink.hash.slice( 1 ) + ']' );
		}

		if ( 0 < target.length ) {
			$( 'html,body' ).animate({
				scrollTop: target.offset().top
			}, scrollSpeed );
		}

		event.preventDefault();
	},

	/**
	 * Bind click events to scroll effect.
	 * Since 1.0.0
	 */
	init = function() {
		$( 'a[href*="#"]:not([href="#"])' ).click( function( event ) {
			scrollTo( this, event );
		});
	};

	// Expose the ready function.
	return {
		init: init
	};

}( jQuery ) );

jQuery( restored.smoothScroll.init );
