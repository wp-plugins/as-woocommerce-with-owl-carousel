<?php

function as_woo_owl_chack_table(){
	global $wpdb;
	$as_woo_owl_tbl_name = $wpdb->prefix.'as_woo_owl_opt_tbl';
	if($wpdb->get_var("SHOW TABLES LIKE '$as_woo_owl_tbl_name'") != $as_woo_owl_tbl_name) {
		return true;
	}else{
		return false;
	}
}

function as_woo_owl_create_tbl(){
	global $wpdb;
	if(as_woo_owl_chack_table() === true){
	    $as_woo_owl_crt_tbl_query = "
	            CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}as_woo_owl_opt_tbl` (
	              `as_woo_owl_opt_id` INT(11) NOT NULL,
	              `carousel_name` VARCHAR(100) NOT NULL,
	              `items` INT NOT NULL,
	              `itemsDesktopwidth` INT NOT NULL,
	              `itemsDesktopitem` INT NOT NULL,
	              `itemsDesktopSmallwidth` INT NOT NULL,
	              `itemsDesktopSmallitem` INT NOT NULL,
	              `itemsTabletwidth` INT NOT NULL,
	              `itemsTabletitem` INT NOT NULL,
	              `itemsTabletSmall` VARCHAR(6) NOT NULL,
	              `itemsMobilewidth` INT NOT NULL,
	              `itemsMobileitem` INT NOT NULL,
	              `singleItem` VARCHAR(6) NOT NULL,
	              `itemsScaleUp` VARCHAR(6) NOT NULL,
	              `slideSpeed` INT NOT NULL,
	              `paginationSpeed` INT NOT NULL,
	              `rewindSpeed` INT NOT NULL,
	              `autoPlay` VARCHAR(6) NOT NULL,
	              `stopOnHover` VARCHAR(6) NOT NULL,
	              `navigation` VARCHAR(6) NOT NULL,
	              `navigationprev` VARCHAR(50) NOT NULL,
	              `navigationnext` VARCHAR(50) NOT NULL,
	              `rewindNav` VARCHAR(6) NOT NULL,
	              `scrollPerPage` VARCHAR(6) NOT NULL,
	              `pagination` VARCHAR(6) NOT NULL,
	              `paginationNumbers` VARCHAR(6) NOT NULL,
	              `responsive` VARCHAR(6) NOT NULL,
	              `lazyLoad` VARCHAR(6) NOT NULL,
	              `lazyFollow` VARCHAR(6) NOT NULL,
	              `lazyEffect` VARCHAR(6) NOT NULL,
	              `mouseDrag` VARCHAR(6) NOT NULL,
	              `touchDrag` VARCHAR(6) NOT NULL,
                   `afterLazyLoad` VARCHAR(6) NOT NULL,
                   `as_woo_owl_add_to_cart` VARCHAR(6) NOT NULL,
                   `as_icon` VARCHAR(50) NOT NULL,
	              `as_button` VARCHAR(50) NOT NULL

	            ) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
	    ";
	    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	    dbDelta( $as_woo_owl_crt_tbl_query );
	}

	as_woo_owl_add_all_opt_name();
}
register_activation_hook ( __FILE__, 'as_woo_owl_create_tbl' );
add_action('plugins_loaded', 'as_woo_owl_create_tbl');

function as_woo_owl_chack_tbl_data(){
	global $wpdb;
	if (as_woo_owl_chack_table() === false) {
		$as_woo_owl_tbl_data = $wpdb->prefix.'as_woo_owl_opt_tbl';
		$as_woo_owl_result = $wpdb->get_results ("SELECT as_woo_owl_opt_id FROM $as_woo_owl_tbl_data");

		if (count ($as_woo_owl_result) > 0) {
			return true;
		} else {
			return false;
		}
	}

}

function as_woo_owl_save_opt_name(array $as_woo_owl_all_option){
global $wpdb;
if (as_woo_owl_chack_table() === false) {
	$as_woo_owl_table_name = $wpdb->prefix.'as_woo_owl_opt_tbl';
	if(as_woo_owl_chack_tbl_data() === true){
		//update data

$wpdb->update(
    $as_woo_owl_table_name, // Table
    array(
			'carousel_name' 		=> $as_woo_owl_all_option['carousel_name'],
			'items' 			=> $as_woo_owl_all_option['items'],
			'itemsDesktopwidth' 		=> $as_woo_owl_all_option['itemsDesktopwidth'],
			'itemsDesktopitem' 		=> $as_woo_owl_all_option['itemsDesktopitem'],
			'itemsDesktopSmallwidth'	=> $as_woo_owl_all_option['itemsDesktopSmallwidth'],
			'itemsDesktopSmallitem' 	=> $as_woo_owl_all_option['itemsDesktopSmallitem'],
			'itemsTabletwidth' 		=> $as_woo_owl_all_option['itemsTabletwidth'],
			'itemsTabletitem' 		=> $as_woo_owl_all_option['itemsTabletitem'],
			'itemsTabletSmall' 		=> $as_woo_owl_all_option['itemsTabletSmall'],
			'itemsMobilewidth' 		=> $as_woo_owl_all_option['itemsMobilewidth'],
			'itemsMobileitem' 		=> $as_woo_owl_all_option['itemsMobileitem'],
			'singleItem' 			=> $as_woo_owl_all_option['singleItem'],
			'itemsScaleUp' 			=> $as_woo_owl_all_option['itemsScaleUp'],
			'slideSpeed' 			=> $as_woo_owl_all_option['slideSpeed'],
			'paginationSpeed' 		=> $as_woo_owl_all_option['paginationSpeed'],
			'rewindSpeed' 			=> $as_woo_owl_all_option['rewindSpeed'],
			'autoPlay' 			=> $as_woo_owl_all_option['autoPlay'],
			'stopOnHover' 			=> $as_woo_owl_all_option['stopOnHover'],
			'navigation' 			=> $as_woo_owl_all_option['navigation'],
			'navigationprev' 		=> $as_woo_owl_all_option['navigationprev'],
			'navigationnext' 		=> $as_woo_owl_all_option['navigationnext'],
			'rewindNav' 			=> $as_woo_owl_all_option['rewindNav'],
			'scrollPerPage' 		=> $as_woo_owl_all_option['scrollPerPage'],
			'pagination' 			=> $as_woo_owl_all_option['pagination'],
			'paginationNumbers' 		=> $as_woo_owl_all_option['paginationNumbers'],
			'responsive' 			=> $as_woo_owl_all_option['responsive'],
			'lazyLoad' 			=> $as_woo_owl_all_option['lazyLoad'],
			'lazyFollow' 			=> $as_woo_owl_all_option['lazyFollow'],
			'lazyEffect' 			=> $as_woo_owl_all_option['lazyEffect'],
			'mouseDrag' 			=> $as_woo_owl_all_option['mouseDrag'],
			'touchDrag' 			=> $as_woo_owl_all_option['touchDrag'],
               'afterLazyLoad'          => $as_woo_owl_all_option['afterLazyLoad'],
               'as_woo_owl_add_to_cart'          => $as_woo_owl_all_option['as_woo_owl_add_to_cart'],
               'as_button'         => $as_woo_owl_all_option['as_button'],
			'as_icon' 		=> $as_woo_owl_all_option['as_icon'],
    	),
    array(
    		'as_woo_owl_opt_id' => '1',
    	)
);


	}

	}
}

function as_woo_owl_add_all_opt_name(){
global $wpdb;
if (as_woo_owl_chack_table() === false) {
	$as_woo_owl_table_name = $wpdb->prefix.'as_woo_owl_opt_tbl';
	if(as_woo_owl_chack_tbl_data() === false){
          //insert data
$wpdb->insert($as_woo_owl_table_name, array(
     'as_woo_owl_opt_id' => '1',
     'carousel_name' => '',
     'items' => '',
     'itemsDesktopwidth' => '',
     'itemsDesktopitem' => '',
     'itemsDesktopSmallwidth' => '',
     'itemsDesktopSmallitem' => '',
     'itemsTabletwidth' => '',
     'itemsTabletitem' => '',
     'itemsTabletSmall' => '',
     'itemsMobilewidth' => '',
     'itemsMobileitem' => '',
     'singleItem' => '',
     'itemsScaleUp' => '',
     'slideSpeed' => '',
     'paginationSpeed' => '',
     'rewindSpeed' => '',
     'autoPlay' => '',
     'stopOnHover' => '',
     'navigation' => '',
     'navigationprev' => '',
     'navigationnext' => '',
     'rewindNav' => '',
     'scrollPerPage' => '',
     'pagination' => '',
     'paginationNumbers' => '',
     'responsive' => '',
     'lazyLoad' => '',
     'lazyFollow' => '',
     'lazyEffect' => '',
     'mouseDrag' => '',
     'touchDrag' => '',
     'afterLazyLoad' => '',
     'as_woo_owl_add_to_cart' => 'true',
     'as_button' => 'themeforest',
     'as_icon' => 'left11.right11'

     ), array( '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s', '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s'
      ));
		}
	}
}

function as_woo_owl_all_options_show(){
	global $wpdb;
	$as_woo_name = $wpdb->prefix.'as_woo_owl_opt_tbl';
	$as_woo_owl_sql = "SELECT * FROM `$as_woo_name` WHERE `as_woo_owl_opt_id` = '1' ";
	$as_woo_owl_results = $wpdb->get_results($as_woo_owl_sql) or die(mysql_error());
	return $as_woo_owl_results;
}