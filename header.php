<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="content-language" content="en"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <?php 
  $logo = get_field('image', 'option');
  $contact = get_field('contact', 'option');
  $number = get_field('number', 'option');
  if( $number ):
    $number_url = $number['url'];
    $number_title = $number['title'];
    $number_target = $number['target'] ? $number['target'] : '_self';
  endif;
  $button = get_field('button', 'option');
  if( $button ):
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
  endif;
  ?>
    <header id="mainHeader">
      <div class="top-menu d-none d-lg-block">
        <div class="container">
        <?php
          wp_nav_menu(array(
            'theme_location'	=> 'main-menu'
          ));
        ?>
        </div>
      </div>
      <div class="main-menu">
        <div class="container d-flex justify-content-between align-items-center">
          <a class="logo" href="/">
            <img src="<?php echo $logo;?>" alt="">
          </a>
          
          <div class="d-none d-xl-block main-menu_block">
          <?php
            wp_nav_menu(array(
              'theme_location'	=> 'main-categories'
            ));
          ?>
          </div>
          
          <div class="d-none d-xl-flex contact contact">
            <div class="d-flex flex-column">
              <p><?php echo $contact;?></p>
              <a href="<?php echo esc_html( $number_url );?>">
                <i class="fa-solid fa-phone"></i>
                <?php echo esc_html( $number_title ); ?>
              </a>
            </div>
            <div class="contact-button d-flex align-items-center">
              <a href="<?php echo esc_html( $button_url );?>"><?php echo esc_html( $button_title ); ?></a>
            </div>
          </div>
          <div class="burger d-xl-none" id="burger">
            <div class="burger_item"></div>
            <div class="burger_item"></div>
            <div class="burger_item"></div>
          </div>
        </div>
      </div>
    </header>
    <div class="mobile-nav" id="myNav">
      <div class="mobile-nav_inner">
        <div class="burger" id="myNavClose">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <?php
          wp_nav_menu(array(
            'theme_location'	=> 'main-menu'
          ));
          wp_nav_menu(array(
            'theme_location'	=> 'main-categories'
          ));
        ?>
      </div>
    </div>

    <main id="main" class="main">
