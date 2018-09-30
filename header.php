<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header id="header">
      <!--NAVIGATION  -------------->
        <nav class="uk-navbar uk-clearfix" style="z-index:99;" data-uk-sticky="{top:-800, animation: 'uk-animation-slide-top'}">

          <?php if ( is_front_page() ) {
            if ( function_exists( clean_custom_menus() ) ) clean_custom_menus();
          } else {
            if ( function_exists( clean_custom_menus_blog() ) ) clean_custom_menus_blog();
          }?>

          <a class="uk-navbar-brand uk-active" href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
          <a href="#offcanvas" class="uk-navbar-toggle uk-hidden-large uk-float-right" data-uk-offcanvas></a>
        </nav>
    </header>
