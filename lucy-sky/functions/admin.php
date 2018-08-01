<?php
/*==============================================================================
Custom Login Style
==============================================================================*/
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
function my_login_stylesheet() { ?>
	<link rel="stylesheet"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/wp-login.css'; ?>" />

	<?php }



	// Move Yoast to bottom
	function yoasttobottom() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'yoasttobottom');