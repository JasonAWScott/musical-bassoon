( function( $ ) {

	$(document).ready(function($){

		$('#main-nav').meanmenu({
			meanScreenWidth: "1050",
			meanMenuContainer: ".navigation-wrap",
			meanRevealPosition: "left",
			meanRevealPositionDistance: "6px",
		});

		// Go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		
		$( window ).scroll(function(){
			if ( $( this ).scrollTop() > 100 ) {
				$scroll_obj.fadeIn();
			} else {
				$scroll_obj.fadeOut();
			}
		});

		$scroll_obj.click(function(){
			$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
			return false;
		});

		/* show/hide search form  */
		jQuery(".search-box").hide();

		jQuery(".search-btn").click(function(e) {

		  var parent_element = $(this).parent();

		  parent_element.children('.search-box').slideToggle('slow');

		  parent_element.toggleClass('open');

		  e.preventDefault();

		});

	} );

} )( jQuery );
