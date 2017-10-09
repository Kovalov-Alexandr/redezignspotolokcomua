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

				<!-- !! PLACE FRONT END PAGE CODE IN THIS PAGE TEMPLATE. DO NOT ALTER THIS PAGE.  ADD A NEW TEPLATE PART IF YOU NEED TO BREAK THE CONTAINTER GRID AND USE A CONTAINER FLUID -->
				<?php get_template_part( 'templates/content/front-page' ); ?>

			<?php endwhile; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
