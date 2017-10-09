<?php
/**
 * ARCHIVE
 *
 * @package maxcanvas
 */

get_header(); ?>

<?php get_template_part( 'templates/component/subheader' ); ?>

<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<header class="entry-header">
					<h1 class="entry-title"><?php echo get_the_archive_title(); ?></h1>
				</header><!-- .entry-header -->

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/content/post' ); ?>

					<?php endwhile; ?>

					<?php get_template_part( 'templates/component/pagination' ); ?>

				<?php else : ?>

					<?php get_template_part( 'templates/content/none' ); ?>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div><!-- row -->
	</div><!-- container -->
</main><!-- #main -->

<?php get_template_part( 'templates/component/bottom' ); ?>

<?php get_footer(); ?>
