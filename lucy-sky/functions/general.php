<?php


function current_url(){
	return (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
}
function obfuscate_email( $email ) {
	$alwaysEncode = array('.', ':', '@');
	$result = '';
	for ($i = 0; $i < strlen($email); $i++) {
		if (in_array($email[$i], $alwaysEncode) || mt_rand(1, 100) < 25) {
			if (mt_rand(0, 1)) {
				$result .= '&#' . ord($email[$i]) . ';';
			} else {
				$result .= '&#x' . dechex(ord($email[$i])) . ';';
			}
		} else {
			$result .= $email[$i];
		}
	}
	return $result;
}



/*==============================================================================
Pagination
==============================================================================*/
function tfg_pagination( $pages = '', $range = 2 ) {
	$showitems = $range * 2 + 1;
	global $paged;
	if( empty( $paged ) ) {
		$paged = 1;
	}
	if( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if( !$pages ) {
			$pages = 1;
		}
	}
	if( $pages > 1 ) {
		echo "<ul class='pagination'>";
		echo "<li class='pagination-label'>Page " . $paged . ' of ' . $pages . "</li>";
		if( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) echo "<li class='pagination-item'><a href='" . get_pagenum_link( 1 ) . "' class='pagination-link'>&laquo;</a></li>";
		if( $paged > 1 && $showitems < $pages ) echo "<li class='pagination-item'><a href='" . get_pagenum_link( $paged - 1 ) . "' class='pagination-link'>&lsaquo;</a></li>";
		for( $i = 1; $i <= $pages; $i++ ) {
			if( $pages != 1  && ( !( $i >= $paged + $range+1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				if( $paged == $i ) {
					echo "<li class='pagination-item pagination-item-current'><a href='" . get_pagenum_link( $i ) . "' class='pagination-link'>" . $i . "</a></li>";
				} else {
					echo "<li class='pagination-item'><a href='" . get_pagenum_link( $i ) . "' class='pagination-link'>" . $i . "</a></li>";
				}
			}
		}
		if( $paged < $pages && $showitems < $pages ) echo "<li class='pagination-item'><a href='" . get_pagenum_link( $paged + 1 ) . "' class='pagination-link'>&rsaquo;</a></li>";
		if( $paged < $pages - 1 && $paged + $range-1 < $pages && $showitems < $pages ) echo "<li class='pagination-item'><a href='".get_pagenum_link($pages)."' class='pagination-link'>&raquo;</a></li>";
		echo "</ul>";
	}
}
/*================================================================================*/
/* Page and Subpage Parent Checks */
/*================================================================================*/
// Get the id of a page by its name
function get_page_id($page_name){
	global $wpdb;
	$page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name;
}
function is_tree($pid) {
	global $post;
	$anc = get_post_ancestors( $post->ID );
	foreach($anc as $ancestor) {
		if(is_page() && $ancestor == $pid) {
			return true;
		}
	}
	if(is_page()&&(is_page($pid)))
		return true;
	else
		return false;
};
function get_parent_slug() {
	global $post;
	if($post->post_parent == 0) return '';
	$post_data = get_post($post->post_parent);
	return $post_data->post_name;
}


function wpb_custom_new_menu() {
  register_nav_menu('locations',__( 'Locations' ));
  register_nav_menu('products',__( 'Products' ));
  register_nav_menu('order_online',__( 'Order Online' ));
  register_nav_menu('vip',__( 'VIP' ));
  register_nav_menu('knowledge',__( 'Knowledge' ));
  register_nav_menu('about',__( 'About Us' ));
  register_nav_menu('contact',__( 'Contact Us' ));
  register_nav_menu('lucy_cares',__( 'Lucy Cares' ));
  register_nav_menu('wholesale',__( 'Wholesale' ));
  register_nav_menu('newsletter',__( 'Join Our Newsletter' ));
}
function get_nav_menu( $menu_slug ) {
	//$menu_locs = get_nav_menu_locations();
	//$menu_items = wp_get_nav_menu_items($menu_locs[$menu_slug]);
	$menu_items = wp_get_nav_menu_items( $menu_slug );
	$nav_items = array();
	$sub_nav_items = array();
	foreach( $menu_items as $item ) {
		if( $item->menu_item_parent) {
			$sub_nav_items[] = $item;
		} else {
			$nav_items[$item->ID] = $item;
			$nav_items[$item->ID]->sub_nav = array();
		}
	}
	foreach( $sub_nav_items as $item ) {
		$nav_items[$item->menu_item_parent]->sub_nav[] = $item;
	}
	
	return $nav_items;
}
add_action( 'init', 'wpb_custom_new_menu' );


function max_title_length( $title ) {
	$max = 50;
	if( strlen( $title ) > $max ) {
	return substr( $title, 0, $max ). " &hellip;";
	} else {
	return $title;
	}
}


function auto_featured_image() {
    global $post;
 
    if (!has_post_thumbnail($post->ID)) {
        $attached_image = get_children( "post_parent=$post->ID&amp;post_type=attachment&amp;post_mime_type=image&amp;numberposts=1" );
         
      if ($attached_image) {
              foreach ($attached_image as $attachment_id => $attachment) {
                   set_post_thumbnail($post->ID, $attachment_id);
              }
         }
    }
}
// Use it temporary to generate all featured images
add_action('the_post', 'auto_featured_image');
// Used for new posts
add_action('save_post', 'auto_featured_image');
add_action('draft_to_publish', 'auto_featured_image');
add_action('new_to_publish', 'auto_featured_image');
add_action('pending_to_publish', 'auto_featured_image');
add_action('future_to_publish', 'auto_featured_image');


?>