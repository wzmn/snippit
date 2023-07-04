<?php 

	/* Template Name: Blogs Page */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
 	<style>
		.banner-text-container {
			transform: translateX(-50%);
			left: 50%;
		}
		.banner-text {
			height: 100%;
			max-width: 630px;
			width: 100%;
		}
	</style>
		<div class="truncate whitespace-normal mx-auto min-h-[520px] bg-cover bg-center relative" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
		<?php if (get_the_content()) : ?>
			<div class="absolute banner-text-container container h-full">
				<div class="flex flex-col justify-evenly banner-text px-4">
					<?php the_content();?>
				</div>
			</div>
		<?php endif;?>
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
					<div class="flex flex-col md:flex-row-reverse items-center justify-between w-full">
						<?php if (get_the_post_thumbnail_url()) :?>
						<div class="image min-w-[250px] max-w-[250px] mb-5 md:mb-0">
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