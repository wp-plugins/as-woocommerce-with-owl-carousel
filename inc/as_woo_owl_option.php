<?php
//As woo owl option page
function as_woo_owl_admin_menu(){
	add_theme_page('As woo owl options','As option', 'manage_options', 'as_options', 'as_woo_owl_display_menu');
}
add_action('admin_menu','as_woo_owl_admin_menu');

function as_woo_owl_display_menu(){?>
<div class="wrap" style="position:relative;overflow: hidden;">
     <div class="my_status_main">
        <div class="my_status_main_inner">
            <span class="as_click_hide"><img src="<?php echo plugins_url( 'img/right.png', __FILE__ ); ?>" alt=""></span>
            <span class="as_click_show"><img src="<?php  echo plugins_url( 'img/right.png', __FILE__ ); ?>" alt=""></span>
            <ul class="as_url">
                <li><span>See on my other plugins</span> <a target="_blank" href="https://wordpress.org/plugins/as-login/"><img  class="fiverr" src="<?php  echo plugins_url( 'img/wordpress.png', __FILE__ ); ?>" alt=""></a></li>
                <li><span>See on my Fiverr profile</span> <a target="_blank" href="https://www.fiverr.com/anuislam"><img  class="fiverr" src="<?php  echo plugins_url( 'img/fiverr.png', __FILE__ ); ?>" alt=""></a></li>
                <li><span>See on my PeoplePerhour profile</span> <a target="_blank" href="http://www.peopleperhour.com/freelancer/anu-islam/web-design-wordpress-wordpress-pl/910027"><img class="github" src="<?php  echo plugins_url( 'img/People.png', __FILE__ ); ?>" alt=""></a></li>

                <li><span>See on my GitHub repository</span> <a target="_blank" href="https://github.com/anuislam"><img class="github" src="<?php  echo plugins_url( 'img/github.png', __FILE__ ); ?>" alt=""></a></li>
            </ul>
        </div>
    </div>
	<?php require_once( as_woo_owl_path . '/inc/as_woo_owl_opt/as_woo_owl_opt_interface.php' ); ?>
</div><?php
}