<?php get_header() ?>
<?php
$products=[];
if (have_posts()) {while(have_posts()) {the_post();
$products[] = wc_get_product(get_the_ID());
} };
// $data['products'] = format_products($products);
?>
<img src="<?php the_field('category_image') ?>" alt="">
<?php get_footer() ?>
