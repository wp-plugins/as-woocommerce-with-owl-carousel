<?php

function as_woo_owl_excerpt($num) {
global $post;
$as_limit = $num+1;
$as_excerpt = explode(' ', $post->post_excerpt, $as_limit);
array_pop($as_excerpt);
echo implode(" ", $as_excerpt);
}

function as_woo_owl_add_cart_button($button, $add_to_cartsdsd){
global $product;
if($button == 'default'){
	$button = 'themeforest';
}
if ($add_to_cartsdsd == 'true') {
  return apply_filters( 'as_woo_owl_add_to_cart',
    sprintf( '<a class="'.$button.' add_to_cart_button product_type_simple" href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s">%s</a>',
      esc_url( $product->add_to_cart_url() ),
      esc_attr( $product->id ),
      esc_attr( $product->get_sku() ),
      esc_attr( isset( $quantity ) ? $quantity : 1 ),
      $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
      esc_attr( $product->product_type ),
      esc_html( $product->add_to_cart_text() )
    ),
  $product );
}else{
  echo '<a href="'.get_the_permalink().'" class="'.$button.'" >Add to cart</a>';
}

}



function As_woo_image_size(){
	add_image_size( 'as_woo_owl_image', 300, 200, true );
}
add_action('after_setup_theme', 'As_woo_image_size');
function as_woocommerce_owl_featured_shortcode($atts, $content = null){
	$as_woo_featured = extract(shortcode_atts( array(
               'carousel_name'      => '',
               'items'             => '',
               'itemsdesktop'       => '',
               'itemsdesktopsmall'  => '',
               'itemstablet'        => '',
               'itemstabletsmall'  => '',
               'itemsmobile'  => '',
               'singleitem'   => '',
               'itemsscaleup' => '',
               'slidespeed'   => '',
               'paginationspeed'   => '',
               'rewindspeed'  => '',
               'autoplay'     => '',
               'stoponhover'  => '',
               'navigation'   => '',
               'navigationtext'    => '',
               'rewindnav'    => '',
               'scrollperpage'     => '',
               'pagination'   => '',
               'paginationnumbers' => '',
               'responsive'   => '',
               'lazyload'     => '',
               'lazyfollow'   => '',
               'lazyeffect'   => '',
               'mousedrag'    => '',
               'touchdrag'    => '',
               'afterlazyload'     => '',
               'add_to_cart'     => 'true',
               'icon'     => 'left11.right11',
               'button'     => 'default'
		), $atts));
	ob_start();
	//start product query
	$as_query = array(
        'post_type'      		=> 'product',
		'post_status' 			=> 'publish',
		'ignore_sticky_posts' 	=> 1,
        'posts_per_page' 		=> -1,
        'meta_query' 			=> array(
								array(
									'key' => '_visibility',
									'value' => array('catalog', 'visible'),
									'compare' => 'IN'
									),
									array(
										'key' => '_featured',
										'value' => 'yes'
										)
									)
								);
	$as_product_query = new WP_query($as_query);

$icon = explode('.', $icon);

  ?>

<div class="as_woo_owl_outer">
    <div class="as_woo_owl_next_<?php echo $carousel_name; ?> as_woo_owl_next">
        <img src="<?php echo plugins_url( '../ico/'.$icon[1].'.png', __FILE__ ) ?>" alt="">
    </div>
    <div id="as_woo_owl_name_<?php echo $carousel_name; ?>" class="as_woo_owl_middil">

<?php	while ( $as_product_query->have_posts() ) : $as_product_query->the_post(); ?>


<div class="as_woo_owl_item">
	<figure class="as_woo_owl_image">
		<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('as_woo_owl_image', array('alt' => get_the_title())); ?></a>
	</figure>
	<div class="as_woo_owl_content">
		<h3>
		    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>         </h3>
		<div class="as_woo_owl_description">
			<?php global $product; if ( $price_html = $product->get_price_html() ) : ?>
			<span class="as_woo_owl_price"><?php echo $price_html; ?></span>
			<?php endif; ?>
			<div class="as_woo_owl_pera" >
				<p><?php as_woo_owl_excerpt('20'); ?></p>
			</div>
		</div>
		<div class="as_woo_owl_add_to_cart_button">
		    <?php echo as_woo_owl_add_cart_button($button, $add_to_cart); ?>
		</div>

	</div>
</div>


	<?php
	endwhile;
    ?>
    </div>
    <div class="as_woo_owl_prev_<?php echo $carousel_name; ?> as_woo_owl_prev">
    <img src="<?php echo plugins_url( '../ico/'.$icon[0].'.png', __FILE__ ) ?>" alt="">
    </div>

    </div>
	<script>

	jQuery(document).ready(function($) {

    var as_woo_owl_ac = $("#as_woo_owl_name_<?php echo $carousel_name; ?>");
	as_woo_owl_ac.owlCarousel({
      <?php

      if (!empty($items)) {
        echo 'items : '.$items .',';
      }
      if (!empty($itemsdesktop)) {
        echo 'itemsDesktop : ['.$itemsdesktop .'],';
      }
      if (!empty($itemsdesktopsmall)) {
        echo 'itemsDesktopSmall : ['. $itemsdesktopsmall.'],';
      }
      if (!empty($itemstablet)) {
         echo 'itemsTablet: ['.$itemstablet.'],';
      }
      if (!empty($itemstabletsmall)) {
        echo 'itemsTabletSmall : '.$itemstabletsmall.',';
      }
      if (!empty($itemsmobile)) {
        echo 'itemsMobile : ['.$itemsmobile.'],';
      }
      if (!empty($singleitem)) {
        echo 'singleItem : '.$singleitem.',';
      }
      if (!empty($itemsscaleup)) {
        echo 'itemsScaleUp : '.$itemsscaleup.',';
      }
      if (!empty($slidespeed)) {
        echo 'slideSpeed : '.$slidespeed.',';
      }
      if (!empty($paginationspeed)) {
        echo 'paginationSpeed : '.$paginationspeed.',';
      }
      if (!empty($rewindspeed)) {
        echo 'rewindSpeed : '.$rewindspeed.',';
      }
      if (!empty($autoplay)) {
        echo 'autoPlay : '.$autoplay.',';
      }
      if (!empty($stoponhover)) {
        echo 'stopOnHover : '.$stoponhover.',';
      }
      if (!empty($navigation)) {
        echo 'navigation : '.$navigation.',';
      }
      if (!empty($navigationtext)) {
        echo 'navigationText : ['.$navigationtext.'],';
      }
      if (!empty($rewindnav)) {
        echo 'rewindNav : '.$rewindnav.',';
      }
      if (!empty($scrollperpage)) {
        echo 'scrollPerPage : '.$scrollperpage.',';
      }
      if (!empty($pagination)) {
        echo 'pagination : '.$pagination.',';
      }
      if (!empty($paginationnumbers)) {
        echo 'paginationNumbers : '.$paginationnumbers.',';
      }
      if (!empty($responsive)) {
        echo 'responsive : '.$responsive.',';
      }
      if (!empty($lazyload)) {
        echo 'lazyLoad : '.$lazyload.',';
      }
      if (!empty($lazyfollow)) {
        echo 'lazyFollow : '.$lazyfollow.',';
      }
      if (!empty($lazyeffect)) {
        echo 'lazyEffect : "'.$lazyeffect.'",';
      }
      if (!empty($mousedrag)) {
        echo 'mouseDrag : '.$mousedrag.',';
      }
      if (!empty($touchdrag)) {
        echo 'touchDrag : '.$touchdrag.',';
      }
      if (!empty($afterlazyload)) {
        echo 'afterLazyLoad : '.$afterlazyload.',';
      }
        ?>
	});

    $(".as_woo_owl_prev_<?php echo $carousel_name; ?>").click(function(){
        as_woo_owl_ac.trigger('owl.next');
    })
    $(".as_woo_owl_next_<?php echo $carousel_name; ?>").click(function(){
        as_woo_owl_ac.trigger('owl.prev');
    })


	});
	</script>

	<?php
	return ob_get_clean();
}
add_shortcode('as_featured_product','as_woocommerce_owl_featured_shortcode');