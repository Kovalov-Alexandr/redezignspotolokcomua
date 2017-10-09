<?php
/**
 * The template for displaying search results pages.
 *
 * @package maxcanvas
 */

get_header(); ?>

<?php get_template_part( 'templates/component/subheader' ); ?>

<?php get_template_part( 'templates/component/breadcrumbs' ); ?>

<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<header class="entry-header">
						<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'maxcanvas' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/content/search' ); ?>

					<?php endwhile; ?>

					<?php get_template_part( 'templates/component/pagination' ); ?>

				<?php else : ?>

					<?php get_template_part( 'templates/content/none' ); ?>

				<?php endif; ?>

			</div>

		</div><!-- row -->
	</div><!-- container -->
</main><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
