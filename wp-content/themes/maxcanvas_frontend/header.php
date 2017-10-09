<?php
/**
 * HEADER
 *
 * @package maxcanvas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) { header("X-UA-Compatible: IE=Edge");} ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-xs-6 col-sm-3">
					<a href="<?php echo esc_url( home_url() ) ?>"><img src="http://placehold.it/700x200&text=Logo" alt="<?php echo get_bloginfo('name') ?>"></a>
				</div><!-- Logo -->
				<div class="col-xs-6 col-sm-9">
					<div id="mobile-header" class="pull-right">

					   	<a id="responsive-menu-button" href="#open">
							<span></span>
							<span></span>
							<span></span>
					    </a>
					    
					    <div id="navigation">
							<nav role="navigation" class="nav row">
								<a id="btnClose" href="javascript:void(0)" onClick="jQuery.sidr('close', 'open');">
	                        		<i class="fa fa-times" aria-hidden="true"></i>
	                        	</a>
	                        	<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '')); ?>
	                        </nav>
	                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<label>
									<span class="screen-reader-text"><?php echo __( 'Search for:'); ?></span>
									<input type="search" class="search-field" placeholder="<?php echo __( 'Search &hellip;'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
								</label>
								<button type="submit" class="search-submit">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
		                </div>

					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #header -->
</header>
