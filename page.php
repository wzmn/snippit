<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	//get_template_part( 'template-parts/content/content-page' );
	?>
	<div class="container mx-auto py-10 px-5">
		<h1>
			<?php echo get_the_title();?>
		</h1>
	</div>
	<div class="container mx-auto py-10 px-5">
		<?php the_content(); ?>
	</div>

	<?php // If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
