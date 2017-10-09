jQuery( document ).ready(function($){

	'use strict';
	
	var matchBoxes = function(){
	
		$('.match').css('min-height', 0 ).css('opacity', 1);

		$.each( $('.matchbox'), function(){

			var matchLimit = 0;

			if ( $(this).data('matchlimit') == 'lg' ) {
				matchLimit = 1200;
			} else if ( $(this).data('matchlimit') == 'md' ) {
				matchLimit = 992;
			} else if ( $(this).data('matchlimit') == 'sm' ) {
				matchLimit = 768;
			}

			if ( Modernizr.mq('(min-width: ' + matchLimit + 'px)') || $(this).hasClass('match-all-sizes') ){
				var maxHeight = 0;
				var matchHeight = [];
				$.each( $(this).find('.match'), function(){
					matchHeight.push($(this).outerHeight(false));
				});
				maxHeight = Math.max.apply(Math,matchHeight);
				$(this).find('.match').css('min-height',maxHeight).css('opacity', 1);
			} else {
				$(this).find('.match').removeAttr("style").css('opacity', 1);
			}
		});
		
	};
	
	$( window ).resize(function(){
		matchBoxes();
	});
	
	$( window ).on( "orientationchange", function( event ) {
		matchBoxes();
	});
	
	var timeoutID;

	$(document).ready(function(){
		window.setTimeout(matchBoxes,500);
		window.setTimeout(matchBoxes,1500);
	});


	
});
