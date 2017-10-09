<?php
/**
 * BREADCRUMBS
 *
 * @package maxcanvas
 */
?>

<div id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
			</div>
		</div>
	</div>
</div>