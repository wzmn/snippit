<?php 

	/* Template Name: Coming Soon */ 

	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php cogncise_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/dist/output.css" rel="stylesheet">
	<script src="https://unpkg.com/floating.js"></script>
<style>
  .main-page {
    height: calc(100vh - 80px);
    align-items: center;
    justify-content: center;
    font-size: 10rem;
    display: flex;
    /* background: red; */
    z-index: 1000;
    position: relative;
  }
  .main-page>div {
    background: url('<?php echo get_stylesheet_directory_uri() . "/images/cutout/background.png"; ?>');
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    background-size: contain;
  }
  .float-container div * {
    width: initial !important;
    height: initial !important;
  }
</style>
</head>
<body>
<nav class="relative bg-white sticky top-0 z-30 w-full">
		<div class="container mx-auto flex justify-between items-center px-5 py-4">
			<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				if ($custom_logo_id) :
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<a href="<?php echo get_home_url(); ?>" name="logo">
				<span class="text-2xl font-extrabold text-blue-600">
					 <img alt="logo" class="max-w-[170px]" src="<?php echo $image[0]; ?>">
				</span>
			</a>
			<?php endif; ?>
		</div>
	</nav>
	<main class="font-regular relative main-page text-center">
		<div class="text-6xl md:text-[10rem] leading-normal">COMING SOON</div>
	</main>
<script>
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/green.png"; ?>'>`,
    number: 1,
    duration: 11,
	size: 8,
	// repeat: 1,
  });
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/blue.png"; ?>'>`,
    number: 1,
    duration: 8,
	  size: 8,
	// repeat: 1,
  });
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/cyan.png"; ?>'>`,
    number: 1,
    size: 8,
	// repeat: 1,
    duration: 15
  });
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/yellow.png"; ?>'>`,
    number: 1,
    size: 8,
	// repeat: 1,
    duration: 12
  });




  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/yellow.png"; ?>'>`,
    number: 1,
    duration: 9,
	size: 5,
	// repeat: 1,
  });
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/cyan.png"; ?>'>`,
    number: 1,
    duration: 6,
	  size: 5,
	// repeat: 1,
  });
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/blue.png"; ?>'>`,
    number: 1,
    size: 5,
	// repeat: 1,
    duration: 13
  });
  floating({
    content: `<img src='<?php echo get_stylesheet_directory_uri() . "/images/cutout/green.png"; ?>'>`,
    number: 1,
    size: 5,
	// repeat: 1,
    duration: 10
  });
//   floating({});
</script>
</body>
<?php 
		endwhile;
	endif;

?>