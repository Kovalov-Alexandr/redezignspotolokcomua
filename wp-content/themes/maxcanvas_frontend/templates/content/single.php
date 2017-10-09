<?php
/**
 * CONTENT SINGLE
 *
 * @package maxcms
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		?>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="entry-meta">
			<?php maxcanvas_posted_on(""); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
