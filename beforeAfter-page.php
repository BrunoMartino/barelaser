<?php
//Template Name: Before-After Zion
get_header();
$sess2__before_after = get_field('services_before_after');
?>
<main>
<section id="sess1__before">
  <img src="<?php the_field('sess1_img_bg_desk') ?>" alt="page banner" class="sess1__before-bg-desk">
  <img src="<?php the_field('sess1_img_bg_mobile') ?>" alt="page banner" class="sess1__before-bg-mobile">
  <div class="sess1__before-container">
    <h1><?php the_field('sess1_headline') ?></h1>
  </div>
</section>
<section id="sess2__before">
    <div class="sess2__before-container">
      <h2><?php the_field('sess2_headline') ?></h2>
      <p><?php the_field('sess2_subtitle') ?></p>
      <div class="sess2__before-content">
        <?php foreach($sess2__before_after as $service) {?>
        <div class="sess2__before-content__service">
          <h3><?= $service['service_title'] ?></h3>
          <ul class="sess2__before-content__service-list">
          <?php foreach($service['service_results'] as $item) {?>
            <li>
              <div class="service__content">
                <?php  echo do_shortcode($item['img_shortcode']) ?>  
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
