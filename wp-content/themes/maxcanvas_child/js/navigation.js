jQuery(function($) {


// set dropdown position on load and resize
	$(document).ready(submenuResize);
	$(window).on('resize',submenuResize);

	function submenuResize() {
			$('#navigation ul.sub-menu').each(function(){

				parentWidth  = $(this).closest('li.menu-item-has-children').outerWidth();
				parentOffset = $(this).closest('li.menu-item-has-children').offset().right;
				submenuWidth = $(this).outerWidth();
				
				submenuLeft = parentOffset - (submenuWidth/2) + (parentWidth/2);
				
				$(this).css('right', submenuLeft);

			});
	}

	$('#responsive-menu-button').sidr({
		name    : 'open',
		side    : 'right',
		renaming : false,
		timing: 'ease-in-out',
		source  : '#navigation',
		body: ''
	});

	$(window).resize(function() {
       $.sidr('close', 'open');
	});

});

