<?php
/**
 * Template Name: Front Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<!-- Section Categories-->
	<div class="section section-categories">
		<div class="container">
			<div class="row">
				<h1 class="section-title text-center">Head-to-Toes Goodness</h1>
				<h4 class="section-subtitle">You are a Few Clicks Away to Unwind from the Daily Grind</h4>
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_barber.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Barber</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>		
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="" class="inner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_facials.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Facials & Body Treatments</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>	
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="" class="inner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_hair-styling.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Hair Styling</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>	
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_makeup">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_makeup.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Make Up</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 box ">
					<a href="#" class="inner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_massage.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Massage</h5>				
								</div>									
							</div>
						</div>					
					</a>	
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_medical-therapy.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Medical Therapy</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_nail-care">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_nail-care.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Nail Care</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/category_waxing.jpg" alt="">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Waxing, Threading & Laser Hair Removal</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Section - Post a Job and Post Giver -->
	<div class="section section-two-column section-indulgence">
		<div class="container">
			<div class="row">
				<h2 class="section-title h5">Leave Your Stress with Blissful Abandon. <br><span class="h1 lightblue">Indulge Now.</span></h2>
			</div>
			<div class="row">	
				<div class="col-md-6 box box-giver">
					<div class="inner vertical-parent ">
						<div class="vertical-child">
							<h2 class="box-title ">
								<a href="#">For you</a>
							</h2>
						</div>					
					</div>
				</div>			
				<div class="col-md-6 box box-post-job">
					<div class="inner vertical-parent">
						<div class="vertical-child">
							<h2 class="box-title "><a href="#">For your event</a></h2>			
						</div>					
					</div>
				</div>
			</div>			
		</div>
	</div>

	<!-- Section - Indulgence Giver -->
	<div class="section section-indulgence-giver">
		<div class="container">
			<div class="row">
				<h2 class="section-title">Our Top Indulgence Giver</h2>
				<h4 class="section-subtitle">The Bearers of Beauty, Relaxation and Wellness</h4>
			</div>
			<div class="row">
				<div class="box">
					<div class="col-sm-6 col-md-3 item">
						<div class="profile-img">
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-1.png" alt="">								
							</a>
						</div>
						<h3 class="profile-name">Jennifer G.</h3>	
						<p class="profile-desc">With Healing Hands to Soothe You</p>	
					</div>	
					<div class="col-sm-6 col-md-3 item">
						<div class="profile-img">
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-2.png" alt="">
							</a>
						</div>
						<h3 class="profile-name">Anna B.</h3>	
						<p class="profile-desc">Spantastics Indulgence</p>	
					</div>	
					<div class="col-sm-6 col-md-3 item">
						<div class="profile-img">
							<a href="">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-3.png" alt="">
							</a>
						</div>
						<h3 class="profile-name">Miranda M.</h3>	
						<p class="profile-desc">You're In good hands</p>	
					</div>	
					<div class="col-sm-6 col-md-3 item">
						<div class="profile-img">	
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-4.png" alt="">
							</a>
						</div>
						<h3 class="profile-name">Stacey K.</h3>	
						<p class="profile-desc">Relax and Rejuvinate</p>	
					</div>	
				</div>
			</div>			
		</div>
	</div>

<?php get_footer(); ?>
