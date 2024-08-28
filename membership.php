<?php
//Template Name: Membership-zion
get_header();
$img_url = get_stylesheet_directory_uri() . '/dist/imgs';
$sess2_slides = get_field('sess2_membership_slides');
$sess3_slides = get_field('laser_areas');
$sess5_slides = get_field('benefits_slide');
$sess6_accordion = get_field('questions_answers_buttons')
?>
<main>
  <section id="sess1__member">
    <img class="sess1__member-bg-desk" src="<?php the_field('sess1_image_bg_desk') ?>" alt="<?= the_field('sess1_title') ?>">
    <img class="sess1__member-bg-mobile" src="<?php the_field('sess1_image_bg_mobile') ?>" alt="<?= the_field('sess1_title') ?>">

    <div class="sess1__member-container" data-anima="scroll">
      <h1><?= the_field('sess1_headline') ?></h1>
      <a class="cta-btn sess1__member-cta" href="<?= the_field('sess1_cta_link') ?>"><?= the_field('sess1_cta_label') ?></a>
    </div>
  </section>
  <section id="sess2__member">
    <h2><?= the_field('sess2_headline') ?></h2>
    <div id="sess2__member-plans__slides" class="splide" data-anima="scroll">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach ($sess2_slides as $index => $slide) {?>
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
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </section>
  <section id="sess3__member">
    <img class="sess3__member-bg-desk" src="<?php the_field('sess3_image_bg_desk') ?>" alt="<?= the_field('sess3_headline') ?>" class="sess3__member-img">
    <img class="sess3__member-bg-mobile" src="<?php the_field('sess3_image_bg_mobile') ?>" alt="<?= the_field('sess3_headline') ?>" class="sess3__member-img">
    <div class="sess3__member-container" data-anima="scroll">
    <h2><?= the_field('sess3_headline') ?></h2>
    <p><?= the_field('sess3_subtitle') ?></p>
    <div id="sess3__member-laser__slides" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach($sess3_slides as $slide) { ?>
          <li class="laser__items splide__slide">
            <h3><?= $slide['area_name'] ?></h3>
            <div class="laser__content">
            <?php foreach($slide['area_items'] as $area) { ?>
              <p><?= $area['area_item_name'] ?></p>
            <?php }?>
            </div>
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
    </div>
  </section>
  <section id="sess4__member">
    <div class="sess4__member-container">
      <img src="<?= the_field('sess4_img') ?>" alt="<?= the_field('sess3_headline') ?>" class="sess4__member-img" data-anima="scroll">
      <div class="sess4__member-content" data-anima="scroll">
        <h2><?= the_field('sess4_headline') ?></h2>
        <p class="headline"><?= the_field('sess4_key_phrase') ?></p>
        <div class="sess4__member-content__text">
        <?= the_field('sess4_text') ?>
        </div>
      </div>
    </div>
  </section>
  <section id="sess5__member">
    <h2><?= the_field('sess5_headline') ?></h2>
    <div id="sess5__member-benefits__slides" class="splide">
      <div class="splide__track">
        <ul class="benefits__list splide__list">
          <?php foreach($sess5_slides as $index => $slide) {?>
          <li class="benefits__item splide__slide">
            <div class="<?= 'benefit-' . $index ?>">
              <h3><?= $slide['benefits_phrase'] ?></h3>
            </div>
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </section>
<section id="sess6__member">
  <img alt="<?= the_field('sess6_headline') ?>" src="<?php the_field('sess6_image_bg_desk') ?>"class="sess6__member-bg-desk">
  <img alt="<?= the_field('sess6_headline') ?>" src="<?php the_field('sess6_image_bg_mobile') ?>"class="sess6__member-bg-mobile">
  <div class="sess6__member-container" data-anima="scroll">
    <h2><?php the_field('sess6_headline') ?></h2>
    <div class="sess6__member-accordion">
    <?php foreach($sess6_accordion as $index => $question) { ?>
    <div id="accordion-open-<?= $index ?>" data-accordion="open" class="container mx-auto px-8 max-w-3xl">
      <h3 id="accordion-open-heading-<?= $index ?>">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="accordion-open-body-<?= $index ?>">
            <span><?= $question['question']?></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down w-6 h-6 <?= $index === 0 ? 'rotate-180' : '' ?> shrink-0" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
            </svg>
        </button>
      </h3>
      <div id="accordion-open-body-<?= $index ?>" class="<?= $index === 0 ? '' : 'hidden' ?>" aria-labelledby="accordion-open-heading-<?= $index ?>">
        <div class="accordion-body">
            <p class="mb-2"><?=$question['answer']?></p>
        </div>
      </div>
    </div>
<?php } ?>
</div>
  </div>
</section>
<section id="sess7__member">
  <div class="sess7__member-container">
    <div class="sess7__member-content" data-anima="scroll">
      <h2><?= the_field('sess7_headline') ?></h2>
      <div class="sess7__member-content__text">
      <?= the_field('sess7_text') ?>
      </div>
      <a href="<?= the_field('sess7_cta_link') ?>" class="cta-btn sess7__member-cta"><?= the_field('sess7_cta_label') ?></a>
    </div>
    <img src="<?= the_field('sess7_image') ?>" alt="<?= the_field('sess7_headline') ?>" class="sess7__member-img">
  </div>
</section>
</main>

<?php get_footer(); ?>