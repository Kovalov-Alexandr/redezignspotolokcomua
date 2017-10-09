<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package maxcanvas
 */

get_header(); ?>

<?php get_template_part( 'templates/component/subheader' ); ?>

<?php get_template_part( 'templates/component/breadcrumbs' ); ?>

<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>
				<!-- !! PLACE FRONT END PAGE CODE IN THIS PAGE TEMPLATE. DO NOT ALTER THIS PAGE.  ADD A NEW TEPLATE PART IF YOU NEED TO BREAK THE CONTAINTER GRID AND USE A CONTAINER FLUID -->
				<?php get_template_part( 'templates/content/page' ); ?>
			<?php endwhile; ?>

			<?php get_sidebar(); ?>

		</div><!-- row -->
	</div><!-- container -->
</main><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
