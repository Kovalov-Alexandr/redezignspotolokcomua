<?php
/**
 * front PAGE
 *
 * @package maxcanvas
 */
?>
<!-- Main content width varies between homepage and subpages with a sidebar -->
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9'); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
