<?php
/**
 * PAGINATION
 *
 * @package maxcanvas
 */
?>

<div class="pagination-nav">
	<?php if(is_singular()): ?>
		<div class="pull-left">
			<?php previous_post_link(); ?>
		</div>
		<div class="pull-right">
			<?php next_post_link(); ?>
		</div>
	<?php else: ?>
		<div class="pull-left">
			<?php previous_posts_link(); ?>
		</div>
		<div class="pull-right">
			<?php next_posts_link(); ?>
		</div>
	<?php endif; ?>
</div>
