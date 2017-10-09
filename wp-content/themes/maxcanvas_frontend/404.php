<?php
/**
 * 404
 *
 * @package maxcanvas
 */

get_header(); ?>

<?php get_template_part( 'templates/component/subheader' ); ?>

<?php get_template_part( 'templates/component/breadcrumbs' ); ?>

<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row">

			<article class="error-404 not-found col-md-12">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'maxcanvas' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'maxcanvas' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</article><!-- .error-404 -->


		</div><!-- row -->
	</div><!-- container -->
</main><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
