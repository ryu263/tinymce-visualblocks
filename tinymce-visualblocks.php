<?php
/*
Plugin Name: TinyMCE VisualBlocks
Plugin URI: http://webcre-archive.com
Description: View VisualBlocks in WordPress Visual Editor
Version: 1.0
Author: Ryujiro Yamamoto
Author URI: http://webcre-archive.com
*/

function tinymce_visualblocks_script( $tinymce_vb ) {
	$tinymce_vb[ 'visualblocks' ] = plugins_url( '', __FILE__ ) . '/plugin.min.js';
	return $tinymce_vb;
}
add_filter( 'mce_external_plugins', 'tinymce_visualblocks_script' );

function tinymce_visualblocks_setting( $in ) {
//	$in['plugins'] .= ',visualblocks';
	$in['toolbar2'] .= ',visualblocks';
	$in['visualblocks_default_state'] = true;
	return $in;
}
add_filter('tiny_mce_before_init', 'tinymce_visualblocks_setting' );

?>