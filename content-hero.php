<?php
/**
 * The template used for displaying - Banner section 
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<!-- Section Header-->
	<div class="section-header video-wrapper-control vid-overlay-20">
		<video class="myHTMLvideo" muted autoplay  poster="<?php echo get_stylesheet_directory_uri(); ?>/img/section-bg-video.jpg" id="bgvid" loop>
		<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video-1x.mp4" type="video/mp4">
		</video>
		<div class="container">
			<div class="row inner">
				<!-- Hero Text -->
				<div class="col-md-12 box box-hero-text">
					<h1 class="box-title">Your Feel-Good Zone</h1>
					<p class="box-subtitle h3">Bringing Beauty, Relaxation and Wellness to the comfort of your home or wherever you are!</p>
					<a href="" class="btn btn-primary btn-opaque h3 btn-lg active">How it works</a>
				</div>
				<!-- 	
					Static-Signup Form; 
					Disabled by client request - 09-22-15 
						-->
				<!-- Sign Up Form
				<div class="col-sm-10 col-sm-offset-1 col-md-5 col-lg-4 box box-form">
					<div class="form">
						<div class="form-group">
							<h1 class="h3 box-title">Sign Up Now</h1>
						</div>	
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name">
						</div>							
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>							
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email Address">
						</div>
													
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Password">
						</div>														
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Zip Code">
						</div>		
						<div class="form-group">
							<a href="#" class="btn btn-primary btn-50 btn-twitter"><i class="fa fa-twitter"></i> Sign Up</a>
							<a href="#" class="btn btn-warning btn-50 btn-white"><i class="fa fa-google-plus"></i> Sign Up</a>
						</div>		
						<div class="form-group">
							<a href="" class="btn btn-warning btn-block btn-facebook"><i class="fa fa-facebook"></i> Facebook Sign Up</a>
						</div>
						<div class="form-group">
							<p class="text-center"><em>- or -</em></p>
						</div>	
						<div class="form-group last">
							<a href="" class="btn btn-warning btn-block btn-green">Sign Up</a>
						</div>
						<span class="arrow-dashed hidden-sm hidden-xs hidden-md"></span>
						<small class="text-center">By Signing Up I agree to the Terms of Service, Privacy Policy, Refund Policy, and Host Guarantee Terms</small>						
					</div>
				</div>
				-->
			</div>
		</div>

	<!-- Section - Searchbar -->
	<div class="searchbar hidden-xs hidden-sm hidden-md">
		<div class="row margin-control">
			<div class="form form-inline box">
				<div class="col-md-4 inner-submit">
					<a href="#" class="btn btn-primary btn-green pull-right">Post A Job</a>
				</div>	
				<div class="col-md-8 inner-fields">
				<div class="form-group">
					<div class="input-group">
  						<span class="input-group-addon">
       				 		<input type="text" class="form-control" placeholder="Indulgence Services">  							
  						</span>
  						<span class="input-group-addon">
       				 		<select class="dd form-control">
       				 			<option value="">When</option>
       				 			<option value="">Option 2</option>
       				 			<option value="">Option 3</option>
       				 			<option value="">Option 4</option>
       				 		</select>							
  						</span>
  						<span class="input-group-addon">
       				 		<select id="" class="dd form-control">
       				 			<option value="">Zip Code</option>
       				 			<option value="">Option 2</option>
       				 			<option value="">Option 3</option>
       				 			<option value="">Option 4</option>
       				 		</select>							
  						</span>
  						<span class="input-group-addon">
       				 		<select id="" class="dd form-control">
       				 			<option value="">Within No. of Miles</option>
       				 			<option value="">Option 2</option>
       				 			<option value="">Option 3</option>
       				 			<option value="">Option 4</option>
       				 		</select>							
  						</span>  						
  						<span class="input-group-addon">
       				 		<a href="" class="btn btn-green"> <i class="fa fa-search"></i> </a>							
  						</span>
					</div>					
				</div>
				</div>			
			</div>			
		</div>
	</div>		
</div>













