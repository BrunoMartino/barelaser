<?php
//Template Name: About-zion
get_header();
$img_url = get_stylesheet_directory_uri() . '/dist/imgs';
$sess1_ctas = get_field('sess1_cta_button_list');
$sess2_slides = get_field('sess3_mission_slides');
$sess3_slides = get_field('sess4_team_slide');
$sess6_tabs = get_field('faq_themes')
?>
<main>
  <section id="sess1__about">
    <img src="<?php the_field('sess1_img_bg_desk') ?>" alt="<?php the_field('sess1_headline') ?>" class="sess1__about-bg-desk">
    <img src="<?php the_field('sess1_img_bg_mobile') ?>" alt="<?php the_field('sess1_headline') ?>" class="sess1__about-bg-mobile">
    <div class="sess1__about-container" data-anima="scroll">
      <h1><?php the_field('sess1_headline') ?></h1>
      <div class="sess1__about-cta">
      <?php foreach($sess1_ctas as $cta) {?>
      <a href="<?= $cta["cta_link"] ?>" class="cta-btn"><?= $cta["cta_label"] ?></a>
      <?php }?>
      </div>
    </div>
  </section>
  <section id="sess2__about">
    <div class="sess2__about-container">
      <img src="<?php the_field('sess2_img') ?>" alt="" data-anima="scroll">
      <div class="sess2__about-content" data-anima="scroll">
        <?php the_field('sess2_text') ?>
      </div>
    </div>
  </section>
  <section id="sess3__about">
    <div class="sess3__about-container" data-anima="scroll">
        <?php foreach($sess2_slides as $index => $slide) {?>
          <div class="mission__item" >
            <div class='<?= "mission__item-title-" . $index ?>'>
              <h2><?= $slide['mission_title'] ?></h2>
            </div>
            <div class="mission__item-content">
              <?= $slide['mission_content'] ?>
            </div>
        </div>
          <?php }?>
    </div>
  </section>
  <section id="sess4__about">
    <h2><?php the_field('sess4_headline') ?></h2>
    <div id="sess4__about-team__slides" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
        <?php foreach($sess3_slides as $slide) {?>
          <li class="team__item splide__slide">
            <img src="<?= $slide['image'] ?>" alt="team member of Bare Laser spa">
            <div class="team__item-content">
                <h3><?= $slide['name'] ?></h3>
                <p><?= $slide['role'] ?></p>
            </div>
          </li>
        <?php }?>
        </ul>
      </div>
    </div>
  </section>
  <?php 
   $shorcode_content = get_field('google_shortcode');
   if($shorcode_content) {
  ?> 
  <section id="sess5__about">
    <div class="sess5__about-container">
      <h2><?php the_field('sess5_headline') ?></h2>
      <?php 
      echo do_shortcode( $shorcode_content )
      ?>

    </div>
  </section>
  <?php }?>

  <section id="sess6__about">
<div class="sess6__about-container" data-anima="scroll">
  <h2><?php the_field('sess6_headline') ?></h2>
  <ul class="sess6_about-tabs__nav">
  <?php foreach($sess6_tabs as $index => $tab) {?>
  <li class="sess6__about-tab__item">
    <a class="cta-btn" href="<?= "#accordion__" . $index ?>" aria-current="page"><?= $tab['theme_title'] ?></a>
  </li>
  <?php }?>
  </ul>
  <div class="sess6__about-accordion" >
  <?php foreach($sess6_tabs as $index_tab => $tab) {?>
    <div id=<?= "accordion__" . $index_tab ?>>
    <?php foreach($tab['theme_questions'] as $index => $question) {?>
      <div id="accordion-open-<?= $index_tab . '-' . $index ?>" data-accordion="open" class="container mx-auto px-8 max-w-3xl">
  <h3 id="accordion-open-heading-<?= $index_tab . '-' . $index ?>">
    <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-<?= $index_tab . '-' . $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="accordion-open-body-<?= $index_tab . '-' . $index ?>">
        <span><?= $question['question']?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down w-6 h-6 <?= $index === 0 ? 'rotate-180' : '' ?> shrink-0" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
        </svg>
    </button>
  </h3>
  <div id="accordion-open-body-<?= $index_tab . '-' . $index ?>" class="<?= $index === 0 ? '' : 'hidden' ?>" aria-labelledby="accordion-open-heading-<?= $index_tab . '-' . $index ?>">
    <div class="accordion-body">
        <p class="mb-2"><?=$question['answer']?></p>
    </div>
  </div>
</div>
    <?php }?>
    </div>
  <?php }?>
  </div>
</div>
</section> 

</main>
<?php get_footer(); ?>
