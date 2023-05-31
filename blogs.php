<?php 

	/* Template Name: Blogs Page */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
		<div class="relative truncate whitespace-normal">
			<div class="grid">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
		</div>
		<div class="grid grid-cols-3 gap-4 bg-gradient p-6 text-center text-white font-bold rounded-br-curve  md:mb-40 mb-20">
		
		</div>
		<style>
			a.more-link {
				margin-top: 10px;
				display: flex;
				color: #0a84ff;
				font-weight: 400;
			}
		</style>
		<div class="container mx-auto px-5 mb-20">
			<div class="grid lg:grid-cols-2 grid-cols-1 gap-12">
				
			<?php
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				// The Query
				$the_query = new WP_Query(  array( 'post_type' => 'post', 'posts_per_page' => -1, 'paged' => $paged ) );

				// The Loop
				if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); 
			?>
				<div class="shadow flex">
					<div class="flex flex-row-reverse items-center justify-between w-full">
						<?php if (get_the_post_thumbnail_url()) :?>
						<div class="image min-w-[250px] max-w-[250px]">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<?php endif;?>
						<div class="content h-full px-8 py-4">
							<a href="<?php echo get_the_permalink();?>" class="text-2xl mb-2"><?php echo get_the_title();?></a>	
							<p class="font-light">
								<?php echo get_the_excerpt();?>
							</p>
							
						</div>
					</div>
				</div>
			<?php } } 
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			</div>
		</div>
<?php 
		endwhile;
	endif;
get_footer(); 

?>