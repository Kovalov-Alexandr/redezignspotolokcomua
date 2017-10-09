<?php
/**
 * CONTENT POST
 *
 * @package maxcanvas
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		<?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); } else{ echo'<img src="http://placehold.it/350x150">'; } ?>
	</div>

	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">

		<header class="entry-header">
			<?php the_title( '<h3 class="entry-title"><a href="'. get_permalink() .'">', '</a></h3>' ); ?>
			<div class="entry-meta">
				<i class="fa fa-clock-o"></i>
				<?php the_time( get_option( 'date_format' ) ); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
			<a class="read-more" href="<?php echo get_permalink(); ?>">Read More</a>
		</div><!-- .entry-content -->

	</div>

</article><!-- #post-## -->
