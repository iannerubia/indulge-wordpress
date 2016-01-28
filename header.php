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
	<nav class="navbar navbar-fixed-top">
		<div class="container">
			<div class="col-xs-6 padding-0">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo bloginfo( 'home' ); ?>">
						<img src="http://s3-us-west-2.amazonaws.com/indulgenow/assets/images/logo.png" alt="">
					</a>
				</div>				
			</div>
			<div class="box-cta col-xs-6 padding-0">
				<a href="http://www.beta.indulgenow.com/#/" class="btn-green active"><i class="fa fa-long-arrow-left"></i> Back to Homepage</a></li>
			</div>
		</div>
	</nav>

	<!-- Section - Hero -->
	<?php 

		if ( is_front_page() && is_home() ) {

			get_template_part( "content", "hero" );

		} 

	?>
