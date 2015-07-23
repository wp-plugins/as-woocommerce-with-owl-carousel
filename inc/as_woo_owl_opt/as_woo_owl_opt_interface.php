<?php
$as_name_error = '';
if (isset($_POST) === true && empty($_POST) === false ) {
global $wpdb;

	$carousel_name = $_POST['carousel_name'];
	$carousel_name = strip_tags($carousel_name);
	$carousel_name = htmlentities($carousel_name);
	$carousel_name = preg_replace('/\s+/', '', $carousel_name);


	$items = $_POST['items'];
	$items = strip_tags($_POST['items']);
	$items = htmlentities($items);

	$itemsDesktopwidth = $_POST['itemsDesktop'];
	$itemsDesktopwidth = strip_tags($itemsDesktopwidth);
	$itemsDesktopwidth = htmlentities($itemsDesktopwidth);

	$itemsDesktopitem = strip_tags($_POST['itemsDesktop_two']);
	$itemsDesktopitem = htmlentities($itemsDesktopitem);

	$itemsDesktopSmallwidth = strip_tags($_POST['itemsDesktopSmall_one']);
	$itemsDesktopSmallwidth = htmlentities($itemsDesktopSmallwidth);

	$itemsDesktopSmallitem = strip_tags($_POST['itemsDesktopSmall_two']);
	$itemsDesktopSmallitem = htmlentities($itemsDesktopSmallitem);

	$itemsTabletwidth = strip_tags($_POST['itemsTablet_one']);
	$itemsTabletwidth = htmlentities($itemsTabletwidth);

	$itemsTabletitem = strip_tags($_POST['itemsTablet_two']);
	$itemsTabletitem = htmlentities($itemsTabletitem);

	$itemsTabletSmall = strip_tags($_POST['itemsTabletSmall']);
	$itemsTabletSmall = htmlentities($itemsTabletSmall);

	$itemsMobilewidth = strip_tags($_POST['itemsMobile_one']);
	$itemsMobilewidth = htmlentities($itemsMobilewidth);

	$itemsMobileitem = strip_tags($_POST['itemsMobile_two']);
	$itemsMobileitem = htmlentities($itemsMobileitem);

	$singleItem = strip_tags($_POST['singleItem']);
	$singleItem = htmlentities($singleItem);

	$itemsScaleUp = strip_tags($_POST['itemsScaleUp']);
	$itemsScaleUp = htmlentities($itemsScaleUp);

	$slideSpeed = strip_tags($_POST['slideSpeed']);
	$slideSpeed = htmlentities($slideSpeed);

	$paginationSpeed = strip_tags($_POST['paginationSpeed']);
	$paginationSpeed = htmlentities($paginationSpeed);

	$rewindSpeed = strip_tags($_POST['rewindSpeed']);
	$rewindSpeed = htmlentities($rewindSpeed);

	$autoPlay = strip_tags($_POST['autoPlay']);
	$autoPlay = htmlentities($autoPlay);

	$stopOnHover = strip_tags($_POST['stopOnHover']);
	$stopOnHover = htmlentities($stopOnHover);

	$navigation = strip_tags($_POST['navigation']);
	$navigation = htmlentities($navigation);

	$navigationprev = strip_tags($_POST['navigationText_one']);
	$navigationprev = htmlentities($navigationprev);

	$navigationnext = strip_tags($_POST['navigationText_two']);
	$navigationnext = htmlentities($navigationnext);

	$rewindNav = strip_tags($_POST['rewindNav']);
	$rewindNav = htmlentities($rewindNav);

	$scrollPerPage = strip_tags($_POST['scrollPerPage']);
	$scrollPerPage = htmlentities($scrollPerPage);

	$pagination = strip_tags($_POST['pagination']);
	$pagination = htmlentities($pagination);

	$paginationNumbers = strip_tags($_POST['paginationNumbers']);
	$paginationNumbers = htmlentities($paginationNumbers);

	$responsive = strip_tags($_POST['responsive']);
	$responsive = htmlentities($responsive);

	$lazyLoad = strip_tags($_POST['lazyLoad']);
	$lazyLoad = htmlentities($lazyLoad);

	$lazyFollow = strip_tags($_POST['lazyFollow']);
	$lazyFollow = htmlentities($lazyFollow);

	$lazyEffect = strip_tags($_POST['lazyEffect']);
	$lazyEffect = htmlentities($lazyEffect);

	$mouseDrag = strip_tags($_POST['mouseDrag']);
	$mouseDrag = htmlentities($mouseDrag);

	$touchDrag = strip_tags($_POST['touchDrag']);
	$touchDrag = htmlentities($touchDrag);

	$afterLazyLoad = strip_tags($_POST['afterLazyLoad']);
	$afterLazyLoad = htmlentities($afterLazyLoad);

	$as_woo_owl_add_to_cart = strip_tags($_POST['as_woo_owl_add_to_cart']);
	$as_woo_owl_add_to_cart = htmlentities($as_woo_owl_add_to_cart);

	$as_button = strip_tags($_POST['as_button']);
	$as_button = htmlentities($as_button);

	$as_icon = $_POST['as_select_icon'];

	if (empty($carousel_name) === true) {
		$as_name_error = 'Please enter Carousel Name';
	}
	if (empty($as_name_error) === true) {
		as_woo_owl_save_opt_name(

				array(
					     'carousel_name' => $carousel_name,
					     'items' => $items,
					     'itemsDesktopwidth' => $itemsDesktopwidth,
					     'itemsDesktopitem' => $itemsDesktopitem,
					     'itemsDesktopSmallwidth' => $itemsDesktopSmallwidth,
					     'itemsDesktopSmallitem' => $itemsDesktopSmallitem,
					     'itemsTabletwidth' => $itemsTabletwidth,
					     'itemsTabletitem' => $itemsTabletitem,
					     'itemsTabletSmall' => $itemsTabletSmall,
					     'itemsMobilewidth' => $itemsMobilewidth,
					     'itemsMobileitem' => $itemsMobileitem,
					     'singleItem' => $singleItem,
					     'itemsScaleUp' => $itemsScaleUp,
					     'slideSpeed' => $slideSpeed,
					     'paginationSpeed' => $paginationSpeed,
					     'rewindSpeed' => $rewindSpeed,
					     'autoPlay' => $autoPlay,
					     'stopOnHover' => $stopOnHover,
					     'navigation' => $navigation,
					     'navigationprev' => $navigationprev,
					     'navigationnext' => $navigationnext,
					     'rewindNav' => $rewindNav,
					     'scrollPerPage' => $scrollPerPage,
					     'pagination' => $pagination,
					     'paginationNumbers' => $paginationNumbers,
					     'responsive' => $responsive,
					     'lazyLoad' => $lazyLoad,
					     'lazyFollow' => $lazyFollow,
					     'lazyEffect' => $lazyEffect,
					     'mouseDrag' => $mouseDrag,
					     'touchDrag' => $touchDrag,
					     'afterLazyLoad' => $afterLazyLoad,
					     'as_woo_owl_add_to_cart' => $as_woo_owl_add_to_cart,
					     'as_button' => $as_button,
					     'as_icon' => $as_icon
					)

			);

	$as_woo_owl_save_conf = 'Settings saved';

	}
}






foreach (as_woo_owl_all_options_show() as $as_woo_key => $as_woo_value) {
?>
<div class="as_woo_owl_main_body">
	<header class="as_woo_owl_main_header">
		<h2>As woocomerce with owl carousel</h2>
	</header>

	<div class="as_woo_owl_content">
		<form action="" method="POST">
			<div class="as_as_woo_bar">
<div class="as_main_width">
	<div class="as_woo_owl_header">
		<div id="as_woo_owl_header_select" onclick="selectText('as_woo_owl_header_select')">[as_featured_product]</div>
	</div>
	<?php if(isset($as_woo_owl_save_conf) === true){
		echo '<div class="as_woo_owl_save_conf">
		<strong>'.$as_woo_owl_save_conf.'.</strong><span>x</span>
	</div>';
	} ?>
<div class="as_woo_owl_body">
<div class="as_woo_owl_admin_item">
	<h3>Carousel Name</h3>
	<p>Carousel Name <strong>Note!</strong> must be an unique name.</p>
	<p style="color:red;"><?php echo $as_name_error; ?></p>
	<input id="carousel_name" type="text" name="carousel_name" value="<?php echo $as_woo_value->carousel_name; ?>" placeholder="Carousel Name">
</div>

<div class="as_woo_owl_admin_item">
	<h3>Items</h3>
	<p>How many show post in Carousel. </p>
	<input id="items" type="number" name="items" value="<?php if($as_woo_value->items > '0'){echo $as_woo_value->items;} ?>" placeholder="Items">
</div>

<div class="as_woo_owl_admin_item">
<h3>ItemsDesktop</h3>
<p>Select a device width and items default <strong>Width 1199 and Items 4</strong>.</p>
<input id="itemsDesktop_one" type="number" name="itemsDesktop" value="<?php if($as_woo_value->itemsDesktopwidth > '0'){echo $as_woo_value->itemsDesktopwidth;} ?>" placeholder="Desktop Width" min="1100" max="2500">

<input id="itemsDesktop_two" type="number" name="itemsDesktop_two" value="<?php if($as_woo_value->itemsDesktopitem > '0'){echo $as_woo_value->itemsDesktopitem;} ?>" placeholder="Desktop Items" min="3" max="8">
</div>

<div class="as_woo_owl_admin_item">
<h3>ItemsDesktopSmall</h3>
<p>Select a device width and items default <strong>Width 980 and Items 3</strong>.</p>
<input id="itemsDesktopSmall_one" type="number" name="itemsDesktopSmall_one" value="<?php if($as_woo_value->itemsDesktopSmallwidth > '0'){echo $as_woo_value->itemsDesktopSmallwidth;} ?>" placeholder="Desktop Small Width" min="970" max="1500">

<input id="itemsDesktopSmall_two" type="number" name="itemsDesktopSmall_two" value="<?php if($as_woo_value->itemsDesktopSmallitem > '0'){echo $as_woo_value->itemsDesktopSmallitem;} ?>" placeholder="Items Desktop Small Items" min="2" max="8">

</div>

<div class="as_woo_owl_admin_item">
<h3>ItemsTablet</h3>
<p>Select a device width and items default <strong>Width 768 and Items 2</strong>.</p>
<input class="as_left" id="itemsTablet_one" type="number" name="itemsTablet_one" value="<?php if($as_woo_value->itemsTabletwidth > '0'){echo $as_woo_value->itemsTabletwidth;} ?>" placeholder="itemsTablet" min="760" max="1000">
<input class="as_right" id="itemsTablet_two" type="number" name="itemsTablet_two" value="<?php if($as_woo_value->itemsTabletitem > '0'){echo $as_woo_value->itemsTabletitem;} ?>" placeholder="itemsTablet" min="2" max="5">
</div>

<div class="as_woo_owl_admin_item">
<h3>ItemsTabletSmall</h3>
<p>Default <strong>False</strong></p>
<select class="as_select" name="itemsTabletSmall" id="itemsTabletSmall">
	<option value="" <?php if($as_woo_value->itemsTabletSmall == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->itemsTabletSmall == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->itemsTabletSmall == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>


<div class="as_woo_owl_admin_item">
<h3>ItemsMobile</h3>
<p>Select a device width and items default <strong>Width 479 and Items 1</strong>.</p>
<input class="as_left" id="itemsMobile_one" type="number" name="itemsMobile_one" value="<?php if($as_woo_value->itemsMobilewidth > '0'){echo $as_woo_value->itemsMobilewidth;} ?>" placeholder="itemsMobile width" min="400" max="600">
<input class="as_right" id="itemsMobile_two" type="number" name="itemsMobile_two" value="<?php if($as_woo_value->itemsMobileitem > '0'){echo $as_woo_value->itemsMobileitem;} ?>" placeholder="itemsMobile item" min="1" max="3">

</div>


<div class="as_woo_owl_admin_item">
<h3>singleItem</h3>
<p>Default <strong>False</strong></p>
<select class="as_select" name="singleItem" id="singleItem">
	<option value="" <?php if($as_woo_value->singleItem == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->singleItem == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->singleItem == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>


<div class="as_woo_owl_admin_item">
<h3>itemsScaleUp</h3>
<p>Default <strong>False</strong></p>
<select class="as_select" name="itemsScaleUp" id="itemsScaleUp">
	<option value="" <?php if($as_woo_value->itemsScaleUp == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->itemsScaleUp == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->itemsScaleUp == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>


<div class="as_woo_owl_admin_item">
<h3>slideSpeed</h3>
<p>Default <strong>200</strong></p>
<input id="slideSpeed" type="number" name="slideSpeed" value="<?php if($as_woo_value->slideSpeed > '0'){echo $as_woo_value->slideSpeed;} ?>" placeholder="slideSpeed" min="150" max="100000">
</div>


<div class="as_woo_owl_admin_item">
<h3>paginationSpeed</h3>
<p>Default <strong>800</strong></p>
<input id="paginationSpeed" type="number" name="paginationSpeed" value="<?php if($as_woo_value->paginationSpeed > '0'){echo $as_woo_value->paginationSpeed;} ?>" placeholder="paginationSpeed" min="700" max="100000">
</div>

<div class="as_woo_owl_admin_item">
<h3>rewindSpeed</h3>
<p>Default <strong>1000</strong></p>
<input id="rewindSpeed" type="number" name="rewindSpeed" value="<?php if($as_woo_value->rewindSpeed > '0'){echo $as_woo_value->rewindSpeed;} ?>" placeholder="rewindSpeed">
</div>

<div class="as_woo_owl_admin_item">
<h3>autoPlay</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="autoPlay" id="autoPlay">
	<option value="" <?php if($as_woo_value->autoPlay == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->autoPlay == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->autoPlay == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>stopOnHover</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="stopOnHover" id="stopOnHover">
	<option value="" <?php if($as_woo_value->stopOnHover == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->stopOnHover == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->stopOnHover == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>navigation</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="navigation" id="navigation">
	<option value="" <?php if($as_woo_value->navigation == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->navigation == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->navigation == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">

<h3>navigationText</h3>
<p>Default <strong>prev -- next</strong></p>

<input class="as_woo_owl_left" id="navigationText_one" type="text" name="navigationText_one" value="<?php echo $as_woo_value->navigationprev; ?>" placeholder="prev">

<input class="as_woo_owl_right"  id="navigationText_two" type="text" name="navigationText_two" value="<?php echo $as_woo_value->navigationnext; ?>" placeholder="next">
</div>

<div class="as_woo_owl_admin_item">
<h3>rewindNav</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="rewindNav" id="rewindNav">
	<option value="" <?php if($as_woo_value->rewindNav == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->rewindNav == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->rewindNav == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>scrollPerPage</h3>
<p>Default <strong>False</strong></p>
<select class="as_select" name="scrollPerPage" id="scrollPerPage">
	<option value="" <?php if($as_woo_value->scrollPerPage == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->scrollPerPage == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->scrollPerPage == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>pagination</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="pagination" id="pagination">
	<option value="" <?php if($as_woo_value->pagination == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->pagination == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->pagination == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>paginationNumbers</h3>
<p>Default <strong>False</strong></p>
<select class="as_select" name="paginationNumbers" id="paginationNumbers">
	<option value="" <?php if($as_woo_value->paginationNumbers == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->paginationNumbers == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->paginationNumbers == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>


<div class="as_woo_owl_admin_item">
<h3>responsive</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="responsive" id="responsive">
	<option value="" <?php if($as_woo_value->responsive == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->responsive == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->responsive == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>lazyLoad</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="lazyLoad" id="lazyLoad">
	<option value="" <?php if($as_woo_value->lazyLoad == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->lazyLoad == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->lazyLoad == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>lazyFollow</h3>
<p>Default <strong>True</strong></p>
<select class="as_select" name="lazyFollow" id="lazyFollow">
	<option value="" <?php if($as_woo_value->lazyFollow == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->lazyFollow == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->lazyFollow == 'true'){ echo 'selected'; } ?> >True</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>lazyEffect</h3>
<p>Default <strong>Fade</strong></p>
<select class="as_select" name="lazyEffect" id="lazyEffect">
	<option value="" <?php if($as_woo_value->lazyEffect == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->lazyEffect == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="fade" <?php if($as_woo_value->lazyEffect == 'fade'){ echo 'selected'; } ?> >Fade</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>mouseDrag</h3>
<p>Default <strong>Ture</strong></p>
<select class="as_select" name="mouseDrag" id="mouseDrag">
	<option value="" <?php if($as_woo_value->mouseDrag == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->mouseDrag == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->mouseDrag == 'true'){ echo 'selected'; } ?> >Ture</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>touchDrag</h3>
<p>Default <strong>Ture</strong></p>
<select class="as_select" name="touchDrag" id="touchDrag">
	<option value="" <?php if($as_woo_value->touchDrag == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->touchDrag == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="true" <?php if($as_woo_value->touchDrag == 'true'){ echo 'selected'; } ?> >Ture</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>afterLazyLoad</h3>
<p>Default <strong>False</strong></p>
<select class="as_select" name="afterLazyLoad" id="afterLazyLoad">
	<option value="" <?php if($as_woo_value->afterLazyLoad == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->afterLazyLoad == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="ture" <?php if($as_woo_value->afterLazyLoad == 'true'){ echo 'selected'; } ?> >Ture</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
<h3>Add to cart</h3>
<p>Default <strong>True</strong> if true you can add to cart or false product page linking</p>
<select class="as_select" name="as_woo_owl_add_to_cart" id="as_woo_owl_add_to_cart">
	<option value="" <?php if($as_woo_value->as_woo_owl_add_to_cart == ''){ echo 'selected'; } ?> >Select an option</option>
	<option value="false" <?php if($as_woo_value->as_woo_owl_add_to_cart == 'false'){ echo 'selected'; } ?> >False</option>
	<option value="ture" <?php if($as_woo_value->as_woo_owl_add_to_cart == 'true'){ echo 'selected'; } ?> >Ture</option>
</select>
</div>

<div class="as_woo_owl_admin_item">
	<h3>Select a button</h3>
	<p>Default <strong>Themeforest</strong></p>
<div class="as_woo_owl_button">
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_one">
		<input <?php echo ($as_woo_value->as_button == 'button_one') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_one" value="button_one">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="button_one">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_two">
		<input <?php echo ($as_woo_value->as_button == 'button_two') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_two" value="button_two">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="button_two">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_three">
		<input <?php echo ($as_woo_value->as_button == 'button_three') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_three" value="button_three">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="button_three">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_four">
		<input <?php echo ($as_woo_value->as_button == 'button_four') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_four"  value="button_four">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="button_four">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_five">
		<input <?php echo ($as_woo_value->as_button == 'twitter') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_five" value="twitter">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="twitter">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_six">
		<input <?php echo ($as_woo_value->as_button == 'graphicriver') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_six"  value="graphicriver">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="graphicriver">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_seven">
		<input <?php echo ($as_woo_value->as_button == 'blue') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_seven" value="blue">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="blue">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_eight">
		<input <?php echo ($as_woo_value->as_button == 'themeforest') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_eight" value="themeforest">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="themeforest">sample</span>
		</div>
	</label>
	<label class="as_woo_owl_btn_style" for="as_woo_owl_btn_nine">
		<input <?php echo ($as_woo_value->as_button == 'yellow') ? 'checked="checked"': '' ; ?> type="radio" name="as_button" id="as_woo_owl_btn_nine" value="yellow">
		<div class="as_woo_owl_add_to_cart_button">
			<a href="" class="as_woo_owl_button_border" ></a>
			<span class="yellow">sample</span>
		</div>
	</label>

	<input type="hidden" name="as_woo_owl_save_button_opt" id="as_woo_owl_get_name" as_button_name="<?php echo $as_woo_value->as_button; ?>">

</div>
</div>




<div class="as_woo_owl_admin_item">
	<h3>Select a icon</h3>
	<p>Default <strong>Left11 Right11</strong></p>
	<ul class="as_woo_owl_select_icon">
		<li>
			<label for="as_select_icon_one">
				<input <?php echo ($as_woo_value->as_icon == 'left1.right1') ? 'checked="checked"': '' ; ?> type="radio" name="as_select_icon" value="left1.right1" id="as_select_icon_one">
				<span class="as_woo_owl_select_icon_border"></span>
				<img class="as_woo_owl_left" src="<?php echo plugins_url( 'ico/left1.png', __FILE__ )?>" alt="">
				<img class="as_woo_owl_right" src="<?php echo plugins_url( 'ico/right1.png', __FILE__ )?>" alt="">
			</label>
		</li>
		<li>
			<label for="as_select_icon_two">
				<input <?php echo ($as_woo_value->as_icon == 'left3.right3') ? 'checked="checked"': '' ; ?> type="radio" name="as_select_icon" value="left3.right3" id="as_select_icon_two">
				<span class="as_woo_owl_select_icon_border"></span>
				<img class="as_woo_owl_left" src="<?php echo plugins_url( 'ico/left3.png', __FILE__ )?>" alt="">
				<img class="as_woo_owl_right" src="<?php echo plugins_url( 'ico/right3.png', __FILE__ )?>" alt="">
			</label>
		</li>
		<li>
			<label for="as_select_icon_three">
				<input <?php echo ($as_woo_value->as_icon == 'left5.right5') ? 'checked="checked"': '' ; ?> type="radio" name="as_select_icon" value="left5.right5" id="as_select_icon_three">
				<span class="as_woo_owl_select_icon_border"></span>
				<img class="as_woo_owl_left" src="<?php echo plugins_url( 'ico/left5.png', __FILE__ )?>" alt="">
				<img class="as_woo_owl_right" src="<?php echo plugins_url( 'ico/right5.png', __FILE__ )?>" alt="">
			</label>
		</li>
		<li>
			<label for="as_select_icon_four">
				<input <?php echo ($as_woo_value->as_icon == 'left7.right7') ? 'checked="checked"': '' ; ?> type="radio" name="as_select_icon" value="left7.right7" id="as_select_icon_four">
				<span class="as_woo_owl_select_icon_border"></span>
				<img class="as_woo_owl_left" src="<?php echo plugins_url( 'ico/left7.png', __FILE__ )?>" alt="">
				<img class="as_woo_owl_right" src="<?php echo plugins_url( 'ico/right7.png', __FILE__ )?>" alt="">
			</label>
		</li>
		<li>
			<label for="as_select_icon_five">
				<input <?php echo ($as_woo_value->as_icon == 'left9.right9') ? 'checked="checked"': '' ; ?> type="radio" name="as_select_icon" id="as_select_icon_five" value="left9.right9">
				<span class="as_woo_owl_select_icon_border"></span>
				<img class="as_woo_owl_left" src="<?php echo plugins_url( 'ico/left9.png', __FILE__ )?>" alt="">
				<img class="as_woo_owl_right" src="<?php echo plugins_url( 'ico/right9.png', __FILE__ )?>" alt="">
			</label>
		</li>
		<li>
			<label for="as_select_icon_six">
				<input <?php echo ($as_woo_value->as_icon == 'left11.right11') ? 'checked="checked"': '' ; ?> type="radio" name="as_select_icon" id="as_select_icon_six" value="left11.right11">
				<span class="as_woo_owl_select_icon_border"></span>
				<img class="as_woo_owl_left" src="<?php echo plugins_url( 'ico/left11.png', __FILE__ )?>" alt="">
				<img  class="as_woo_owl_right"src="<?php echo plugins_url( 'ico/right11.png', __FILE__ )?>" alt="">
			</label>
		</li>
	</ul>
	<input type="hidden" name="" id="as_icon_data" as_icon_data="<?php echo $as_woo_value->as_icon; ?>">
</div>


	</div>

</div>


<div class="as_woo_owl_show_short_code" id="as_woo_owl_selectable" onclick="selectText('as_woo_owl_selectable')" style="display:none;">

</div>


			</div>
			<div class="as_woo_owl_submit_button">
				<input style="float:left;" class="button button-primary dsd" type="submit" value="Save" name="as_submit">
				<span style="float:right;" class="button button-primary as_woo_owl_add_new">Get Shortcode</span>
			</div>
		</form>
	</div>
</div>
<?php } ?>