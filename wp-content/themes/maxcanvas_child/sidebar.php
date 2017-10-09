<?php
/**
 * SIDEBAR
 *
 * @package maxcanvas
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) && ! is_active_sidebar( 'page-sidebar' ) ): // Ensure document exits
  return;
endif; ?>

<div id="secondary" class="widget-area col-md-3" role="complementary">

	<?php
	if ( is_home() || is_single() || is_archive() ): // Check for blog
		dynamic_sidebar( 'blog-sidebar' );
	else: // All other pages
		dynamic_sidebar( 'page-sidebar' );
	endif;
	?>

</div>
