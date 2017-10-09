<?php
/**
 * HOMEPAGE
 *
 * @package maxcanvas
 */

get_header(); ?>

<?php get_template_part( 'templates/component/billboard' ); ?>

<div id="main">
	<div class="container">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content/front-page' ); ?>

			<?php endwhile; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
