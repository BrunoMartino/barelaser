<?php 
    $img_url = get_stylesheet_directory_uri() . '/dist/imgs';
?>
<footer>
<article id="social__media">
  <div class="social__media-container">
    <h2>Follow us on Instagram!</h2>
    <?php echo do_shortcode('[instagram-feed feed=1]') ?>
  </div>
</article>
  <div class="footer__wrapper">
    <div class="footer__cta-logo">
      <img src="<?= $img_url . '/logo-footer.png' ?>" alt="logo image on footer">
      <a href="tel:+18455045661" class="cta-btn cta-footer">
        <p>call us</p>
        <img src="<?= $img_url . '/phone-black.svg' ?>" alt="phone icon">
      </a>
    </div>
    <div class="footer__menus-container">
      <div class="footer__menu">
        <h2>Company</h2>
        <?php
        wp_nav_menu([
            'menu'=> 'footer-company',
            'container' => 'ul',
            'container_class' => 'footer-company',
        ]);
        ?>
      </div>
      <div class="footer__menu">
        <h2>Services</h2>
        <?php
        wp_nav_menu([
            'menu'=> 'products-footer',
            'container' => 'ul',
            'container_class' => 'products-footer',
        ]);
        ?>
      </div>
      <div class="footer__menu menu-contact">
        <h2>Contact</h2>
         <a href="">Book Now</a>
         <a href="tel:+18455045661">845 504 5661</a>
         <a href="https://www.google.com/maps/dir//76+Lafayette+Ave,+Suffern,+NY+10901/@41.115699,-74.1538239,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c2e094f0220dff:0xfb435064eaeb8fe7!2m2!1d-74.151249!2d41.115699?entry=ttu">76 Lafayette Ave <br>
         Suffern, NY 10901</a>
      </div>
    </div>
  </div>
  <div class="footer__end">
    <div class="footer__end-container">
    <p>2024 Bare Laser Med Spa - All right reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer();?>
<script src="<?= get_stylesheet_directory_uri(); ?>/dist/js/main.js"></script>
</body>
</html>