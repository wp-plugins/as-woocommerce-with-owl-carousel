<?php
/**
 * @package as-woocommerce-with-owl-carousel
 * @version 1.0
 * @licence GPLv2
 */

/*
Plugin Name: AS woocommerce with owl carousel
Plugin URI: https://wordpress.org/plugins/as-woocommerce-with-owl-carousel/
Description: AS woocommerce with owl carousel is a jquery plugin for WordPress site. This plugin will create a nice carousel for your site.
Author: anuislam
Version: 1.0
Author URI: http://asfoundation.tk/
*/

/*  Copyright 2015  anuislam  (email : anuislams@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 1, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 function as_woocommerce_with_owl_carousel_script(){

     wp_register_script( 'as_carousel', plugins_url( 'owl-carousel/owl.carousel.min.js', __FILE__ ), 'jquery', 1.0, true );


	 wp_enqueue_style( 'as_carousel_css', plugins_url( 'owl-carousel/owl.carousel.css', __FILE__ ) );
	 wp_enqueue_style( 'as_theme_css', plugins_url( 'owl-carousel/owl.theme.css', __FILE__ ) );
	 wp_enqueue_style( 'as_woo_owl_css', plugins_url( 'css/as_woo_owl_css.css', __FILE__ ) );

	 wp_enqueue_script('jquery');
	 wp_enqueue_script('as_carousel');

 }
 add_action('wp_enqueue_scripts','as_woocommerce_with_owl_carousel_script', 1);


function as_woo_owl_admin_js(){
wp_register_script( 'as_woo_owl', plugins_url( 'js/as_woo_owl.js', __FILE__ ), 'jquery', 1.0, true );
wp_enqueue_script('as_woo_owl');


wp_enqueue_style( 'as_woo_owl_admin_css', plugins_url( 'css/as_woo_owl_admin_css.css', __FILE__ ) );

}
add_action('admin_enqueue_scripts','as_woo_owl_admin_js');


define( 'as_woo_owl_path', plugin_dir_path( __FILE__ ) );
require_once( as_woo_owl_path . '/inc/as_shortcode.php' );
require_once( as_woo_owl_path . '/inc/as_woo_owl_option.php' );
require_once( as_woo_owl_path . '/inc/as_woo_owl_opt/as_woo_owl_option_save.php' );
