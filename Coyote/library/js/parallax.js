jQuery(document).ready(function($) {
	
	"use strict";
 
	function parallax() {
    	var scrolled = $('.parallax-top').scrollTop();
		$('.parallax-slow').css('background-position-y', -(scrolled * 0.2) + 'px');
		$('.parallax-fast').css('background-position-y', -(scrolled * 0.4) + 'px');
	}
	
	$('.parallax-top').scroll(function(e){
    	parallax();
	});

});