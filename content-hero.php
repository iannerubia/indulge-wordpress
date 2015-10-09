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













