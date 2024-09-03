<?php get_header() ?>
<?php
$products=[];
if (have_posts()) {while(have_posts()) {the_post();
$products[] = wc_get_product(get_the_ID());
} };
 $data['products'] = format_products($products);
  $current_cat = get_queried_object();
  $current_cat_id = get_queried_object_id();

  $sess1__ctas = get_field('cta_buttons', 'term_'. $current_cat_id);
  $sess2__img = get_field('sess2_image', 'term_'. $current_cat_id);
  $sess2__head = get_field('sess2_headline', 'term_'. $current_cat_id);
  $sess2__text = get_field('sess2_content_text', 'term_'. $current_cat_id);
  $sess2__cta = get_field('sess2_cta_label', 'term_'. $current_cat_id);
?>
<main>
  <section id="sess1__archive">
    <img src="<?= the_field('sess1_image_bg_desk', 'term_'. $current_cat_id) ?>" alt="<?= esc_html($current_cat->name) ?>" class="sess1__archive-bg-desk">
    <img src="<?= the_field('sess1_image_bg_mobile', 'term_'. $current_cat_id) ?>" alt="<?= esc_html($current_cat->name) ?>" class="sess1__archive-bg-mobile">
    <div class="sess1__archive-container">
      <h1><?= esc_html($current_cat->name) ?></h1>
      <p class="sess1__archive-subtitle">
        <?= the_field('sess1_subtitle', 'term_'. $current_cat_id) ?>
      </p>
      <div class="sess1__archive-ctas__wrapper">
      <?php foreach($sess1__ctas as $cta) { ?>
      <a href="<?= $cta['cta_link'] ?>" class="cta-btn sess1__archive-cta">
        <?= $cta['cta_label'] ?>
      </a>
      <?php } ?>
      </div>
    </div>
  </section>
  <?php if($sess2__img && $sess2__text) { ?>
  <section id="sess2__archive">
    <div class="sess2__archive-container">
      <img src="<?= $sess2__img ?>" alt="">
      <div class="sess2__archive-content">
        <?php if($sess2__head) { ?>
        <h2><?= $sess2__head ?></h2>
        <?php } ?>
        <div class="sess2_archive-content__text">
        <?= $sess2__text ?>
        </div>
        <?php if($sess2__cta) { ?>
        <a href="<?= the_field('sess2_cta_link', 'term_'. $current_cat_id) ?>" class="cta-btn sess2__archive-cta"><?= $sess2__cta ?></a>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>
  <section id="sess3__archive">
    <div class="sess3__archive-content">
      <?php barelaser_product_list($data['products']) ?>
    </div>
  </section>
</main>

<?php get_footer() ?>
