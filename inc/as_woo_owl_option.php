<?php
//As woo owl option page
function as_woo_owl_admin_menu(){
	add_theme_page('As woo owl options','As option', 'manage_options', 'as_options', 'as_woo_owl_display_menu');
}
add_action('admin_menu','as_woo_owl_admin_menu');

function as_woo_owl_display_menu(){
	require_once( as_woo_owl_path . '/inc/as_woo_owl_opt/as_woo_owl_opt_interface.php' );	
}