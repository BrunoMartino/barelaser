<?php
function format_products($products, $img_size = 'medium') {
  $products_final = [];
  foreach($products as $product) {
    if( $product ->is_type('variable')) {
      $min_price = wc_price($product->get_variation_regular_price('min', true));
      $max_price = wc_price($product->get_variation_regular_price('max', true));
      $product_id = $product->get_id();
    } else {
      $regular_price = $product->get_regular_price();
      $product_id = $product->get_id();
    }
    $products_final[] = [
      'name' => $product->get_name(),
      'link' => $product->get_permalink(),
      'max-price' => $max_price,
      'min-price'=> $min_price,
      'img' => wp_get_attachment_image_src($product->get_image_id(), $img_size)[0],
      'id' => $product_id
    ];
  }
  return $products_final;
}
?>
<?php
function barelaser_product_list($products) {
  $img_url = get_stylesheet_directory_uri() . '/dist/imgs';
?>
<nav id="category__product-container">
  <ul class="category__product-list">
    <?php foreach($products as $product) {?>
  <li class="category__product-thumb">
  <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
  <div class="category__product-thumb__content">
    <h3><?= $product['name'] ?></h3>
    <div class="product__price">
      <p><?= $product['min-price'] . ' - ' . $product['max-price'] ?></p>
    </div>
    <div class="afterpay__info">
      <?php echo do_shortcode(('[afterpay_paragraph]')); ?>
    </div>
    <?php 
    $wc_product = wc_get_product( $product['id']);
    if($wc_product->is_type('variable')) {?>
      <a href="<?= $product['link'] ?>" class="cta-btn product__cta">select options</a>
    <?php } else { ?>
      <a href="<?= esc_url( '?add-to-cart=' . $product['id'] ); ?>" 
                 class="add_to_cart_button ajax_add_to_cart cta-btn product__cta" 
                 data-product_id="<?= $product['id'] ?>" 
                 data-quantity="1" 
                 aria-label="<?= esc_attr( $product['name'] ) ?>" 
                 rel="nofollow">Add to Cart</a>
    <?php }?>
    </div>
    </li>
    <?php }?>
  </ul>
</nav>
<?php }?>