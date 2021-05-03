<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
  </head>
  <body class="body">
    <div class="site">
      <header class="site__header header">
        <div class="hamburger" id="hamburger">
          <div class="hamburger__item"></div>
          <div class="hamburger__item"></div>
          <div class="hamburger__item"></div>
        </div>
        <nav class="navigation" id="navigation">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'header',
              'container'=> 'ul',
              'menu_id'        => 'navigation__list',
              'menu_class'     => 'navigation__list navigation__hidden',
            ) );
          ?>
        </nav>
      </header>
      <div class="site__content content">