<?php
//Template Name: Home-zion
get_header();
$img_url = get_stylesheet_directory_uri() . '/dist/imgs';
$sess1_video = get_field('video_bg');
$sess1_btns = get_field('sess1_btn_list');
$sess2_slides =get_field('sess2_slides');
$sess3_adv =get_field('membership_advantages');
$sess4_slides =get_field('sess4_membership_slides');
$sess5_fotona = get_field('fotona_services');
?>
<main>
  <section id="sess1__home">
    <?php if($sess1_video) {?>
    <video class="sess1__home-video__bg" autoplay="" preload="" muted="" loop="" playsinline="">
      <source src="<?= the_field('video_bg') ?>" type="video/mp4">
    </video>
    <?php } else {?>
    <div class="bg-placeholder"></div>
    <?php }?>
    <div class="sess1__home-wrapper" data-anima="scroll">
      <h1><?= the_field('sess1_title') ?></h1>
      <nav class="sess1__home-btn_container">
      <ul>
      <?php foreach ($sess1_btns as $btn) { ?>
        <li><a href="<?= $btn['button_link'] ?>"><?= $btn['button_cta'] ?></a></li> 
      <? } ?>
      </ul> 
      </nav>
    </div>
  </section>
  <section id="sess2__home">
    <h2><?= the_field('sess2_title') ?></h2>
    <div id="sess2__home-slide" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach($sess2_slides as $slide) { ?>
            <li class="splide__slide product__slide">
            <a href="<?= $slide['link'] ?>">
            <img src="<?= $slide['image'] ?>" alt="<?= $slide['title'] ?>">
            <div class="product__bg-gradient "></div>
            <div class="product__slide-content">
            <h3><?= $slide['title'] ?></h3>
            <div class="content__arrow">
              <img src="<?= $img_url . '/to-right-arrow.svg' ?>" alt="arrow icon">
      </div>
    </div>
  </a>
</li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section id="sess3__home">
    <div class="sess3__home-container">
      <div class="sess3__home-content" data-anima="scroll">
        <h2 class="sess3__title"><?= the_field('sess3_title') ?></h2>
        <ul class="member__adv-list">
        <?php foreach($sess3_adv as $adv) { ?>
          <li class="member__adv-item">
            <p><?= $adv['advantage_line'] ?></p>
          </li>
          <?php } ?>
        </ul>
        <p class="sess3__home-subtitle"><?= the_field('sess3_subtitle') ?></p>
        <a class="cta-btn sess3-cta" href="<?= the_field('sess3_button_link') ?>"><?= the_field('sess3_button_cta') ?></a>
      </div>
      <div class="sess3__home-img" data-anima="scroll">
        <img src="<?= the_field('sess3_image') ?>" alt="<?= the_field('sess3_title') ?>">
      </div>
    </div>
  </section>
  <section id="sess4__home">
    <h2><?= the_field('sess2_headline') ?></h2>
    <div id="membership__cards" class="splide" data-anima="scroll">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach ($sess4_slides as $index => $slide) {?>
          <li class="plan__item splide__slide">
            <div class="plan__item-content">
            <h3 class="<?= "plan-title-" . $index ?>"><?= $slide['plan_title'] ?></h3>
            <p class="plan__price"><?= $slide['plan_price'] ?></p>
            <div class="plan__description">
              <?php foreach ($slide['plan_benefits'] as $benefits) { ?>
              <p class="plan__service"> <?= $benefits['monthly_options'] ?></p>
              <?php }?>
              <p class="plan__additional"><?= $slide['additional_benefits'] ?></p>
              <p class="plan__excluded"><?= $slide['excluded_services'] ?></p>
            </div>
            </div>
            <a href="<?= $slide['cta_link'] ?>" class="cta-btn membership__cards-cta"><?= $slide['cta_label'] ?></a>
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </section>
  <section  id="sess5__home">
      <div class="sess5__home-container">
        <div class="sess5__img" data-anima="scroll">
          <img src="<?php the_field('sess5__img') ?>" alt="<?php the_field('sess5_headline') ?>">
        </div>
        <div class="sess5__home-content__container">
          <div class="sess5__home-content" data-anima="scroll">
            <h2><?php the_field('sess5__headline') ?></h2>
            <div class="sess5__home-content-text">
            <?php the_field('sess5_small_text') ?>
            </div>
            <a href="<?php the_field('sess5_cta_link') ?>" class="cta-btn sess5__cta"><?php the_field('sess5_cta_label') ?></a>
          </div>
          <div class="sess5__home-services">
            <?php foreach($sess5_fotona as $service) { ?>
            <h3><?= $service['service_title'] ?></h3>
            <p><?= $service['service_subtitle'] ?></p>
            <?php } ?>
          </div>
        </div>
      </div>
  </section>
  <?php 
   $shorcode_content = get_field('google_shortcode');
   if($shorcode_content) {
  ?>
  <section id="sess6__home">
    <div class="sess6__home-container">
      <h2><?php the_field('sess6_headline') ?></h2>
      <?php 
      echo do_shortcode( $shorcode_content )
      ?>
    </div>
  </section>
  <?php }?>
  <section id="sess7__home">
    <img src="<?php the_field('sess7_img_bg') ?>" alt="<?php the_field('sess7_headline') ?>">
    <div class="sess7__home-container">
      <div class="sess7__home-wrapper sess7__home-parallax">
      <h2><?php the_field('sess7_headline') ?></h2>
      <a href="<?php the_field('sess7_cta_link') ?>" class="cta-btn sess7__cta"><?php the_field('sess7_cta_label') ?></a>
      </div>
    </div>
  </section>
  <section id="sess8__home">
    <div class="sess8__home-container">
    <img src="<?php the_field('sess8_img_bg') ?>" alt="background logo">
    <div class="sess8__home-newsform" data-anima="scroll">
    <h2><?php the_field('sess8_headline') ?></h2>
    <p><?php the_field('sess8_cta_form') ?></p>
      <?php 
      $shorcode_content = get_field('form_shorcode');
      echo do_shortcode( $shorcode_content )
      ?>
    </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>