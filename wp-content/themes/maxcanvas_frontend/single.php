<?php
/**
 * SINGLE
 *
 * @package maxcanvas
 */

get_header(); ?>

<?php get_template_part( 'templates/component/subheader' ); ?>

<?php get_template_part( 'templates/component/breadcrumbs' ); ?>

<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row">

			<div class="col-md-9">

				<?php while ( have_posts() ) : the_post(); ?>
					<!-- !! PLACE FRONT END PAGE CODE IN THIS PAGE TEMPLATE. DO NOT ALTER THIS PAGE.  ADD A NEW TEPLATE PART IF YOU NEED TO BREAK THE CONTAINTER GRID AND USE A CONTAINER FLUID -->
					<?php get_template_part( 'templates/content/single' ); ?>

				<?php endwhile; // end of the loop. ?>

					<?php comments_template(); ?>
					<?php wp_enqueue_script( 'comment-reply' ); ?>

					<?php get_template_part( 'templates/component/pagination' ); ?>

			</div>

			<?php get_sidebar(); ?>

		</div><!-- row -->
	</div><!-- container -->
</main><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
