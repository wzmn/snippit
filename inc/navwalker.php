<?php

add_action('wp_nav_menu_item_custom_fields', function($item_id, $item) {
	$show_as_button = get_post_meta($item_id, '_show-as-button', true);
	?>
	<p class="cogncise-show-as-button description description-wide">
		<label for="cogncise-menu-mega-title-<?php echo $item_id; ?>" >
			<input type="checkbox" 
				id="cogncise-menu-mega-title-<?php echo $item_id; ?>" 
				name="cogncise-menu-mega-title[<?php echo $item_id; ?>]" 
				<?php checked($show_as_button, true); ?> 
			/><?php _e('Is this a title?', 'cogncise'); ?>
		</label>
	</p>
	<?php
}, 10, 2);

add_action('wp_update_nav_menu_item', function($menu_id, $menu_item_db_id) {
	$button_value = (isset($_POST['cogncise-menu-mega-title'][$menu_item_db_id]) && $_POST['cogncise-menu-mega-title'][$menu_item_db_id] == 'on') ? true : false;
	update_post_meta($menu_item_db_id, '_show-as-button', $button_value);
}, 10, 2);


add_filter('nav_menu_css_class', function($classes, $menu_item) {
	$show_as_button = get_post_meta($menu_item->ID, '_show-as-button', true);
	if ($show_as_button) {
		$classes[] = 'menu-item-button';
	}
	return $classes;
}, 10, 2);

// description

add_action('wp_nav_menu_item_custom_fields', function($item_id, $item) {
	$strategy_description = get_post_meta($item_id, '_strategy_description', true);
	?>
	<p class="cogncise-show-as-button description description-wide">
		<label for="cogncise-strategy-description-<?php echo $item_id; ?>" >
			<textarea placeholder="Insert description" id="cogncise-strategy-description-<?php echo $item_id; ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="cogncise-strategy-description[<?php echo $item_id; ?>]"><?php echo $strategy_description; ?></textarea>
			<div>
				<?php _e('Strategry Description', 'cogncise'); ?>
			</div>
		</label>
	</p>
	<?php
}, 10, 2);

add_action('wp_update_nav_menu_item', function($menu_id, $menu_item_db_id) {
	$desc_value = isset($_POST['cogncise-strategy-description'][$menu_item_db_id]) ? $_POST['cogncise-strategy-description'][$menu_item_db_id] : "";
	update_post_meta($menu_item_db_id, '_strategy_description', $desc_value);
}, 10, 2);


// add_filter('nav_menu_css_class', function($classes, $menu_item) {
// 	$show_as_button = get_post_meta($menu_item->ID, '_strategy_description', true);
// 	if ($show_as_button) {
// 		$classes[] = 'menu-item-button';
// 	}
// 	return $classes;
// }, 10, 2);



class Tailwind_Menu_Walker extends Walker_Nav_Menu {
		function start_el(&$output, $item, $depth=0, $args=[], $id=0) {

			if ($this->has_children) {
				array_push($item->classes, 'var-has-mega-menu');
			}


			$output .= "<li class='" .  implode(" ", $item->classes) . "'>";
			$mega_title = (int) get_post_meta($item->ID, '_show-as-button', true);
			$block_desc = get_post_meta($item->ID, '_strategy_description', true);

			if ($item->url && $item->url != '#') {

					$output .= '<a href="' . $item->url . '" class="relative block py-6 px-2 lg:p-6 text-sm p-2 hover:text-blue font-regular text-gray-600">';

			} else if (!!$mega_title) {
				$output .= '<div class="text-xl font-bold">';
			} else {
				$output .= '<span class="relative cursor-pointer block py-6 px-2 lg:p-6 text-sm p-2 font-regular text-gray-600">';
			}

 
			$output .= $item->title;
 
			if ($item->url && $item->url != '#') {
				$output .= '</a>';
			} else if (!!$mega_title) {
				$output .= '</div>';
			} else {
				$output .= '</span>';
			}

			if (!empty($block_desc)) {
				$output .= '<p class="text-gray-100 text-sm">' . $block_desc . '</p>';
				$output .= '<div class="flex items-center relative py-3">
									<a href="' . $item->url . '" class="border-b-2 font-bold border-blue hover:text-blue-dark st-link">Find out more...</a>
								  <svg class="h-6 pr-3 fill-[#0c1559] text-blue-300 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"></path>
								  </svg>
								</div>';
			}
		}

		function start_lvl( &$output, $depth = 0, $args = array() ) {
			if (!$depth>0) {
				$output .= '<div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white"><div class="flex justify-center"><div class="container"><ul class="flex flex-row child-border justify-center">';
			}else{
				$output .= '<ul class="flex flex-col no-padding pb-6 pt-6 lg:pt-3">';
			}
		}
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			if (!$depth>0) {
				$output .= '</ul></div></div></div>';
			}else{
				$output .= '</ul>';
			}
		}

}


  ?>