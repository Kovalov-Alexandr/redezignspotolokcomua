<?php
/**
 * BILLBOARD
 *
 * @package maxcanvas
 */
?>

<div id="billboard">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="billboard-slider">
					<div>		
						<img src="http://placehold.it/1140x400&text=Billboard1" width="100%" height="auto" alt="Billboard1"/>
					</div>
					<div>		
						<img src="http://placehold.it/1140x400&text=Billboard2" width="100%" height="auto" alt="Billboard2"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function( $ ) {
	$('.billboard-slider').slick();
});
</script>