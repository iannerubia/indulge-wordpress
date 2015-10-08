<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="top"></div>
	<div id="navbar-menu-wrapper">
		<div class="inner-menu-wrapper">
			<div id="navbarbar" class="navbar-collapse collapse">
			</div><!--/.nav-collapse -->				
		</div>
	</div>
	<nav class="navbar navbar-fixed-top navbar-green">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="<?php echo bloginfo( 'home' ); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse hidden-xs">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="active">List Services</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Log in</a></li>
					<!-- 
						if user is login - Profile avatar
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img style="border-radius: 50px;" src="<?php //echo get_stylesheet_directory_uri(); ?>/img/profile-marianne.png" alt="">
						Marianne <b class="caret"></b></a>
						<ul class="dropdown-menu dropdown-menu--lightblue ">
							<li><a href="#">Your Listings</a></li>
							<li><a href="#">Bookings</a></li>
							<li><a href="#">Edit Profile</a></li>
							<li><a href="#">Account</a></li>
						</ul>
					</li>
					 -->

				</ul>
				<?php
					function disable() {
					    wp_nav_menu( array(
					        'menu'              => 'menu-list-services',
					        'theme_location'    => 'primary',
					        'depth'             => 2,
					        'container'         => 'div',
					        'container_class'   => 'collapse navbar-collapse navbar-right',
							'container_id'      => 'navbar-primary',
					        'menu_class'        => 'nav navbar-nav',
					        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					        'walker'            => new wp_bootstrap_navwalker())
					    );					
					}
				?>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<!-- Section - Hero -->
	<?php 

		if ( !is_front_page() && is_home() ) {

			get_template_part( "content", "hero" );

		} 

	?>
