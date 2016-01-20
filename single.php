<?php
/**
 * The template for displaying all single posts and attachments
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
				<div class="col-md-8 col-md-offset-2">
					<main id="main" class="site-main" role="main">

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', 'get_post_format()' );

					// End the loop.
					endwhile;
					?>

					</main><!-- .site-main -->		

					<div class="post-header">
						<p class="post-meta">Written by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
					</div>					
				</div>
			</div><!-- .content-area -->
		</div> 
	</div>
</div>	


<div class="section section-otherpost bg-light-gray">
	<div class="container">
		<div class="row">
			<h1 class="section-title">Related Article</h1>
		</div>
		<div class="row">
            <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>  

			<div class="col-md-6">	
                <!-- blog item -->
                <article class="post-item">
                	<a href="<?php the_permalink(); ?>">
	                	<div class="post-thumbnail">
	                    	<?php 
	                    		$img_arr = array(
	                    			'class' => 'img-responsive'
	                    		);

	                    		the_post_thumbnail( 'full', $img_arr ); 
	                    	?>  
	                    	<div class="post-header">
                   				<h2 class="post-title h2"> <?php the_title(); ?></h2>		                    		
	                    	</div>
                    	                      		
	                	</div>
                	</a>
                </article>            
			</div>	
	        <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>