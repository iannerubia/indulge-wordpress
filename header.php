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
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="top"></div>
	<nav class="navbar navbar-fixed-top navbar-overlay">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="<?php echo bloginfo( 'home' ); ?>">
					<img src="http://s3-us-west-2.amazonaws.com/indulgenow/assets/images/logo.png" alt="">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse hidden-xs">
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="http://www.beta.indulgenow.com/#/" class="active"><i class="fa fa-long-arrow-left"></i> Back to Homepage</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<!-- Section - Hero -->
	<?php 

		if ( is_front_page() && is_home() ) {

			get_template_part( "content", "hero" );

		} 

	?>
