<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<!-- Section Social-->
	<div class="section section-social">
		<div class="container">
			<div class="row"><h2 class="section-title">Join Us</h2></div>
			<div class="row">
				<div class="col-md-12">
					<?php echo display_ultimate_social_icons(); ?>	
				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div class="section footer-copyright">
			<small>© 2016 Indulge Now | <a href="#">Privacy Policy</a> | All Rights Reserved </small>
		</div>			
	</div>

<!-- 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
 -->

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<!--/ End JS Scripts -->

</body>
</html>