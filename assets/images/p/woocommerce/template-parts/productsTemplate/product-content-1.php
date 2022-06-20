<?php $skip_min_height = false; ?><section class="u-align-center u-clearfix u-section-1" id="sec-d714">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><?php
$productsJson = '{"type":"Recent","source":"","tags":"","count":""}';
global $wp_query; $all = count($wp_query->posts); echo getGridAutoRowsStyles($productsJson, $all);
?>

    <?php global $product; if (!$product) {
	global $post; $product = wc_get_product($post->ID);
} ?><div class="u-expanded-width u-products u-repeater u-repeater-1"><?php
                                    $countItems = 6;
                                    while (have_posts()) { the_post();
                                    $templateOrder = $wp_query->current_post % $countItems;
                                ?><?php if ($templateOrder == 0) { ?><!--product_item-->
      <?php $product = wc_get_product($post->ID); $product_prices = get_product_prices($product); $productItemInvisible = !wp_get_attachment_image_url($product->get_image_id()) ? true : false; ?><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--product_image-->
          <?php
                            $product_image = theme_get_post_image(array('class' => 'u-expanded-width u-image u-image-default u-product-control u-image-1', 'default' => '/images/4.svg'));
                            if ($product_image) echo $product_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-1">
            <a class="u-product-title-link" href="<?php the_permalink(); ?>"><?php echo $product->get_title(); ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-1">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php if ($product->get_regular_price() !== '') { echo $product_prices['old_price']; } ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php if ($product->get_price() !== '') { echo $product_prices['new_price']; } ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><?php
$clickTypeProductbutton = 'add-to-cart';
$contentProductbutton = '';
?>

          <?php $post->clickTypeProductbutton = $clickTypeProductbutton; $post->classProductButton = 'u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-1';
	          $post->contentProductbutton = $contentProductbutton; do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 1) { ?><!--product_item-->
      <?php $product = wc_get_product($post->ID); $product_prices = get_product_prices($product); $productItemInvisible = !wp_get_attachment_image_url($product->get_image_id()) ? true : false; ?><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-2">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><!--product_image-->
          <?php
                            $product_image = theme_get_post_image(array('class' => 'u-expanded-width u-image u-image-default u-product-control u-image-2', 'default' => '/images/5.svg'));
                            if ($product_image) echo $product_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-2">
            <a class="u-product-title-link" href="<?php the_permalink(); ?>"><?php echo $product->get_title(); ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-2">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php if ($product->get_regular_price() !== '') { echo $product_prices['old_price']; } ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php if ($product->get_price() !== '') { echo $product_prices['new_price']; } ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><?php
$clickTypeProductbutton = 'add-to-cart';
$contentProductbutton = '';
?>

          <?php $post->clickTypeProductbutton = $clickTypeProductbutton; $post->classProductButton = 'u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-2';
	          $post->contentProductbutton = $contentProductbutton; do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 2) { ?><!--product_item-->
      <?php $product = wc_get_product($post->ID); $product_prices = get_product_prices($product); $productItemInvisible = !wp_get_attachment_image_url($product->get_image_id()) ? true : false; ?><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-3">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--product_image-->
          <?php
                            $product_image = theme_get_post_image(array('class' => 'u-expanded-width u-image u-image-default u-product-control u-image-3', 'default' => '/images/6.svg'));
                            if ($product_image) echo $product_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-3">
            <a class="u-product-title-link" href="<?php the_permalink(); ?>"><?php echo $product->get_title(); ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-3">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php if ($product->get_regular_price() !== '') { echo $product_prices['old_price']; } ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php if ($product->get_price() !== '') { echo $product_prices['new_price']; } ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><?php
$clickTypeProductbutton = 'add-to-cart';
$contentProductbutton = '';
?>

          <?php $post->clickTypeProductbutton = $clickTypeProductbutton; $post->classProductButton = 'u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-3';
	          $post->contentProductbutton = $contentProductbutton; do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 3) { ?><!--product_item-->
      <?php $product = wc_get_product($post->ID); $product_prices = get_product_prices($product); $productItemInvisible = !wp_get_attachment_image_url($product->get_image_id()) ? true : false; ?><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-4">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><!--product_image-->
          <?php
                            $product_image = theme_get_post_image(array('class' => 'u-expanded-width u-image u-image-default u-product-control u-image-4', 'default' => '/images/7.svg'));
                            if ($product_image) echo $product_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-4">
            <a class="u-product-title-link" href="<?php the_permalink(); ?>"><?php echo $product->get_title(); ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-4">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php if ($product->get_regular_price() !== '') { echo $product_prices['old_price']; } ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php if ($product->get_price() !== '') { echo $product_prices['new_price']; } ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><?php
$clickTypeProductbutton = 'add-to-cart';
$contentProductbutton = '';
?>

          <?php $post->clickTypeProductbutton = $clickTypeProductbutton; $post->classProductButton = 'u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-4';
	          $post->contentProductbutton = $contentProductbutton; do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 4) { ?><!--product_item-->
      <?php $product = wc_get_product($post->ID); $product_prices = get_product_prices($product); $productItemInvisible = !wp_get_attachment_image_url($product->get_image_id()) ? true : false; ?><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-5">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><!--product_image-->
          <?php
                            $product_image = theme_get_post_image(array('class' => 'u-expanded-width u-image u-image-default u-product-control u-image-5', 'default' => '/images/8.svg'));
                            if ($product_image) echo $product_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-5">
            <a class="u-product-title-link" href="<?php the_permalink(); ?>"><?php echo $product->get_title(); ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-5">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php if ($product->get_regular_price() !== '') { echo $product_prices['old_price']; } ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php if ($product->get_price() !== '') { echo $product_prices['new_price']; } ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><?php
$clickTypeProductbutton = 'add-to-cart';
$contentProductbutton = '';
?>

          <?php $post->clickTypeProductbutton = $clickTypeProductbutton; $post->classProductButton = 'u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-5';
	          $post->contentProductbutton = $contentProductbutton; do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 5) { ?><!--product_item-->
      <?php $product = wc_get_product($post->ID); $product_prices = get_product_prices($product); $productItemInvisible = !wp_get_attachment_image_url($product->get_image_id()) ? true : false; ?><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-6">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><!--product_image-->
          <?php
                            $product_image = theme_get_post_image(array('class' => 'u-expanded-width u-image u-image-default u-product-control u-image-6', 'default' => '/images/9.svg'));
                            if ($product_image) echo $product_image; else { echo '<div class="hidden-image"></div>'; $skip_min_height = true; } ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-6">
            <a class="u-product-title-link" href="<?php the_permalink(); ?>"><?php echo $product->get_title(); ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-6">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php if ($product->get_regular_price() !== '') { echo $product_prices['old_price']; } ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php if ($product->get_price() !== '') { echo $product_prices['new_price']; } ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><?php
$clickTypeProductbutton = 'add-to-cart';
$contentProductbutton = '';
?>

          <?php $post->clickTypeProductbutton = $clickTypeProductbutton; $post->classProductButton = 'u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-6';
	          $post->contentProductbutton = $contentProductbutton; do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div><!--/product_item--><?php } ?><?php } ?>
    </div>
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>