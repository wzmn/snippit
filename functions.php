<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Cogncise
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}
// add_filter( 'show_admin_bar', '__return_false' );

if ( ! function_exists( 'cogncise_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function cogncise_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'cogncise' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cogncise', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Main menu', 'cogncise' ),
				'mobile' => esc_html__( 'Mobile menu', 'cogncise' ),
				'footer'  => esc_html__( 'Footer menu', 'cogncise' ),
			)
		);

		/*
		*
		* Disabling the scaling
		*
		*/

		add_filter( 'big_image_size_threshold', '__return_false' );

		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		// add_theme_support( 'editor-styles' );
		// $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		// if ( 127 > Cogncise_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
		// 	add_theme_support( 'dark-editor-style' );
		// }

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'cogncise' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'cogncise' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'cogncise' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'cogncise' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'cogncise' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'cogncise' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'cogncise' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'cogncise' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'cogncise' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'cogncise' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'cogncise' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'cogncise' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'cogncise' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'cogncise' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'cogncise' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'cogncise' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'cogncise' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'cogncise' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'cogncise' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'cogncise' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'cogncise' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'cogncise' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'cogncise' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'cogncise' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'cogncise' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', cogncise_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_false' );
	}

	require get_template_directory() . '/inc/navwalker.php';

}
add_action( 'after_setup_theme', 'cogncise_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function cogncise_widgets_init() {

	register_sidebars(
		1,
		array(
			'name'          => esc_html__( 'Footer 1', 'cogncise' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'cogncise' ),
			'before_widget' => '<section id="%1$s" class="widget flex-1 mb-5 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="font-bold">',
			'after_title'   => '</div>',
		),
		// array(
		// 	'name'          => esc_html__( 'Footer 2', 'cogncise' ),
		// 	'id'            => 'sidebar-2',
		// 	'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'cogncise' ),
		// 	'before_widget' => '<section id="%1$s" class="widget flex-1 mb-5 %2$s">',
		// 	'after_widget'  => '</section>',
		// 	'before_title'  => '<div class="font-bold">',
		// 	'after_title'   => '</div>',
		// ),
		// array(
		// 	'name'          => esc_html__( 'Footer 3', 'cogncise' ),
		// 	'id'            => 'sidebar-3',
		// 	'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'cogncise' ),
		// 	'before_widget' => '<section id="%1$s" class="widget flex-1 mb-5 %2$s">',
		// 	'after_widget'  => '</section>',
		// 	'before_title'  => '<div class="font-bold">',
		// 	'after_title'   => '</div>',
		// ),		
		// array(
		// 	'name'          => esc_html__( 'Footer 4', 'cogncise' ),
		// 	'id'            => 'sidebar-4',
		// 	'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'cogncise' ),
		// 	'before_widget' => '<section id="%1$s" class="widget flex-1 mb-5 %2$s">',
		// 	'after_widget'  => '</section>',
		// 	'before_title'  => '<div class="font-bold">',
		// 	'after_title'   => '</div>',
		// )
	);
}
add_action( 'widgets_init', 'cogncise_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function cogncise_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cogncise_content_width', 750 );
}
add_action( 'after_setup_theme', 'cogncise_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'cogncise-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'cogncise-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}
	wp_enqueue_style( 'cogncise-tailwind-style', get_template_directory_uri() . '/dist/output.css', array(), null );

	// RTL styles.
	wp_style_add_data( 'cogncise-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'cogncise-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'cogncise-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'cogncise-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'cogncise-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'cogncise-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'cogncise-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'cogncise-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'cogncise-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'cogncise-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'cogncise_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_block_editor_script() {

	wp_enqueue_script( 'cogncise-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'cogncise_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function cogncise_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'cogncise_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_non_latin_languages() {
	$custom_css = cogncise_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'cogncise-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'cogncise_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-cogncise-svg-icons.php';

// Custom color classes.
// require get_template_directory() . '/classes/class-cogncise-custom-colors.php';
// new Cogncise_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
// require get_template_directory() . '/classes/class-cogncise-customize.php';
// new Cogncise_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
// require_once get_template_directory() . '/classes/class-cogncise-dark-mode.php';
// new Cogncise_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_customize_preview_init() {
	wp_enqueue_script(
		'cogncise-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'cogncise-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'cogncise-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'cogncise_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'cogncise-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'cogncise_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'cogncise_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function cogncise_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'cogncise_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'cogncise' );
	}
endif;
