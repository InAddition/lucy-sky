<?php

/*================================================================================*/
/* Image Support */
/*================================================================================*/

if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
}

/*================================================================================*/
/* Image Sizes */
/*================================================================================*/

if(function_exists('add_image_size')){
	add_image_size('thumb', 600, 412, true);
	add_image_size('square', 600, 600, true);
	add_image_size( 'sml_feature', 1040, 500, true );
	add_image_size( 'feature', 1570, 500, true );
	add_image_size('full', 2000, 2000);
}

/*================================================================================*/
/* Thumbnail upscale */
/*================================================================================*/


function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
	if ( !$crop ) return null; // let the wordpress default function handle this

	$aspect_ratio = $orig_w / $orig_h;
	$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

	$crop_w = round($new_w / $size_ratio);
	$crop_h = round($new_h / $size_ratio);

	$s_x = floor( ($orig_w - $crop_w) / 2 );
	$s_y = floor( ($orig_h - $crop_h) / 2 );

	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );

?>