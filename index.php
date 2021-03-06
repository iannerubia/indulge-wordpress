<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="section section--innerpage">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">

	            <?php $the_query = new WP_Query( 'posts_per_page=8' ); ?>
	            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>  

					<div class="col-md-6 col-lg-6">					
						<main id="main" class="site-main" role="main">
                            <!-- blog item -->
                            <article class="post-item">
                            	<a href="<?php the_permalink(); ?>">
	                            	<div class="post-thumbnail">
										<?php
											$img_arr = array(
												'class' => 'img-responsive'
											);
											// Post thumbnail.
											the_post_thumbnail( 'full', $img_arr );
										?>	
										<div class="post-header">
			                                <h3 class="post-title"> <?php the_title(); ?></h3>		
										</div>											             		
	                            	</div>
                            	</a>
                            </article>            
						</main><!-- .site-main -->
					</div>	
	            <?php endwhile; wp_reset_postdata(); ?>
			</div><!-- .content-area -->
		</div> 
	</div>
</div>	
<?php get_footer(); ?>
