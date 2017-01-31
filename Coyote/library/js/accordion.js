jQuery(document).ready(function($) {
	
	"use strict";
 
	$('.accordion-section').click(function(){
		if($(this).hasClass('accordion-open')) {
			$(this).children('.accordion-content').slideUp();
			$(this).removeClass('accordion-open');
		} else {
			$(this).children('.accordion-content').slideDown();
			$(this).siblings('.accordion-section').find('.accordion-content').slideUp();
			$(this).siblings('.accordion-section').removeClass('accordion-open');
			$(this).addClass('accordion-open');
		}
	});
});