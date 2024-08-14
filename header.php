<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('name');?> <?php wp_title('|'); ?></title>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header>
<?php 
    $img_url = get_stylesheet_directory_uri() . '/dist/imgs';
    ?>
<nav id="header__nav" class=" border-gray-200 dark:bg-gray-900">
  <div class="nav__container ">
    <a href="/" class="nav__logo">
        <img src="<?= $img_url . "/header_logo.png" ?>" alt="BareLaser Logo" />
    </a>
    <button type="button" class="nav__menu-btn" data-collapse-toggle="navbar-default"
    aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
      <?php
        wp_nav_menu([
            'menu'=> 'header-menu-zion',
            'container' => 'ul',
            'container_class' => 'sidebar__nav',
        ]);
        ?>
    </div>
  </div>
</nav>
</header>

