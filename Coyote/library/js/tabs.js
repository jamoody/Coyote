jQuery(document).ready(function($) {
	
	"use strict";
 
	$('.tab:first-child').addClass('active-tab');
	$('.tab-content:first-child').addClass('active-content');
	$('.tab').click( function() {
		
		if ( $(this).hasClass('active-tab') ) {
			return;
		} else {
			$(this).closest('.tab-title-container').find('.active-tab').removeClass('active-tab');
			$(this).addClass('active-tab');
			var n = $(this).index() + 1;
			$(this).closest('.tab-title-container').siblings('.tab-content-window').find('.active-content').removeClass('active-content');
			$(this).closest('.tab-title-container').siblings('.tab-content-window').find('.tab-content:nth-child(' + n + ')').addClass('active-content');
		}
	});
});