(function( $ ) {
	'use strict';

	var fwsTextHighlight = function() {
		fwsTextHighlightIt();
		$(window).on('scroll', function(){
			fwsTextHighlightIt();
	     });
		$( window ).resize(function() {
			fwsTextHighlightIt();
		});
	}

	var fwsTextHighlightIt = function() {
		
		var windowHeight = $(window).height();
	    var windowScrollTop = $(window).scrollTop();
	    var fwsTextElements = $(".fws-text-to-highlight").not('.fws-text-highlighted');

	    fwsTextElements.each( function( index ) {
	    	
	    	var fwsTextElement = this;
	    	var fwsTextElementBg = $( fwsTextElement ).data( 'bg' );
	    	var fwsTextElementDelay = parseInt( $( fwsTextElement ).data( 'delay' ) );

	    	if ( isNaN( fwsTextElementDelay ) ) {
	    		fwsTextElementDelay = 1000;
	    	}

	    	$( fwsTextElement ).css( 'background', function( cVal ) {
	    		return 'linear-gradient(to left, transparent 50%, ' + fwsTextElementBg + ' 50%)';
	    	});

	    	var elementHeight = $(fwsTextElement).height();
	    	var elementOffsetTop = $(fwsTextElement).offset().top;
	    	if ((elementOffsetTop <= windowScrollTop + windowHeight) && (elementOffsetTop + elementHeight >= windowScrollTop)) {
		        setTimeout(function(){
		            $(fwsTextElement).addClass('fws-text-highlighted');
		        }, fwsTextElementDelay );
		    }
	    })
	}

	$(function() {
		fwsTextHighlight();
    });

})( jQuery );