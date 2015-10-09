<?php
/**
 * The template used for displaying - Footer Widget
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<!-- Section Footer -->
	<div class="section section-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-3 col-md-offset-2 box a-style-sm">	
					<!-- Static Widget Markup
					<div class="widget">
						<h3 class="widget-title">Company</h3>	
						<ul class="">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Policies</a></li>
							<li><a href="#">Terms and Privacy</a></li>
						</ul>						
					</div>
					 -->
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>		
				</div>
				<div class="col-sm-4 col-md-3 box a-style-sm">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
				<div class="col-sm-4 col-md-3 box a-style-sm">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>	
			</div>
		</div>
	</div>

	<!-- Section Social-->
	<div class="section section-social">
		<div class="container">
			<div class="row"><h2 class="section-title">Join Us</h2></div>
			<div class="row">
				<div class="col-md-12">
					<div class="div social-lists">
						<a href="" class="iconn btn-facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="iconn btn-twitter"><i class="fa fa-twitter"></i></a>
						<a href="" class="iconn btn-green"><i class="fa fa-google"></i></a>					
						<a href="" class="iconn btn-linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="" class="iconn btn-pinterest"><i class="fa fa-pinterest"></i></a>
						<a href="" class="iconn btn-instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="iconn btn-youtube"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Copyright -->
	<div class="section footer-copyright">
		<small>© 2015 Indulge Now | <a href="#">Privacy Policy</a> | All Rights Reserved </small>
	</div>	









