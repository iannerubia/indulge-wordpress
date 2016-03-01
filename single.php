<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

<div class="section section-featured">
	<?php
		$img_arr = array(
			'class' => 'img-responsive'
		);
		the_post_thumbnail( 'full', $img_arr ); 
	?>  
	<div class="featured-inner">
		<div class="featured-title">
			<h1 class="post-title">
				<?php the_title(); ?>
			</h1>
		</div>		
	</div>
</div>

<div class="section section--innerpage">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<div class="col-md-8 col-md-offset-2">
					<main id="main" class="site-main" role="main">
						<?php 
							if ( have_posts() ) {

								while ( have_posts() ) {
								// the_author();	
								the_post();
							
								the_content();						
								} // end while
							} // end if
						?>	
					</main><!-- .site-main -->		
				</div>
				<div class="post-meta col-md-12">
				<span class="post-author">Written by
					<?php
						if (is_singular()) {
						    $address = get_the_author_meta('display_name', $author_id);
						}
						echo $address;
					?>			
				</span>
				<span class="post-date">, <?php the_time('F j, Y'); ?></span>

				</div>
			</div><!-- .content-area -->
		</div> 
	</div>
</div>	

<div class="section section-otherpost bg-light-gray">
	<div class="container">
		<div class="row">
			<h1 class="section-title">Related Post</h1>
		</div>
		<div class="row">
		<?php

			$tags = wp_get_post_tags($post->ID);

			if ($tags) {
				$first_tag = $tags[0]->term_id;

				$args = array(
					'tag__in' => array($first_tag),
					'post__not_in' => array($post->ID),
					'posts_per_page'=>4,
					'order' => 'ASC',
					'caller_get_posts'=>1
				);

				$my_query = new WP_Query($args);

				if( $my_query->have_posts() <= 1 ) {

					while ($my_query->have_posts()) : $my_query->the_post(); ?>

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
								<h3 class="post-title h3"> <?php the_title(); ?></h3>		                   
							</div>			
						</div>
					</a>
				</article>            
			</div>	
				<?php endwhile;
			}	
				wp_reset_query();
		}
		?>
		</div>
	</div>
</div>
<?php get_footer();
