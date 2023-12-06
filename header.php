<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <style>.loaded { opacity: 1 }</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head();?>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8CNF932S6V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8CNF932S6V');
</script>
<meta name="yandex-verification" content="fbece906592fa661" />
  <meta name="google-site-verification" content="yU7kQS4FQRayJkvOrdFMVOp1QvyoBYQ6-WH5w-KASRI" />
</head>


<body>
  <div class="wrapper">
    <header class="header" data-fullscreen>
  <a href="<?php echo get_home_url(); ?>" class="header__logo logo">
  <?php
    $logo_img = '';
      if ( $custom_logo_id = get_theme_mod( 'custom_logo' ) ) {
        $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
          'itemprop' => 'logo',  'loading'=>"lazy"
        ) );
      }
      echo $logo_img;
  ?>  
  WebDivingStudio</a>
  <nav class="header__menu menu">
    <div class="empty"></div>
      <?php
        wp_nav_menu( [
          'theme_location' => 'main_menu',
          'container'      => false,
          'menu'            => 'main_menu',
          'menu_class'      => 'menu__list',
          'echo'            => true,
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => new MainMenu(),
        ] );
      ?>
    <div class="header__contacts menu__contacts">
      <div class="header__contacts-socials">
      <?php if( have_rows('socials', 'option') ): ?>
        <?php while( have_rows('socials', 'option') ): the_row(); 
        $icon = get_sub_field('icon');
        ?>
        <a href="<?php the_sub_field('link');?>" class="header__contact-social"><?php echo wp_get_attachment_image( $icon, 'full' ); ?></a>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <a href="tel:<?php the_field('phone', 'option');?>" class="header__contacts-phone"><?php the_field('phone', 'option');?></a>
    </div>
  </nav>
  <button class="header__burger icon-menu">
  <span></span>
</button>
  <div class="header__contacts">
    <div class="header__contacts-socials">
      <?php if( have_rows('socials', 'option') ): ?>
        <?php while( have_rows('socials', 'option') ): the_row(); 
        $icon = get_sub_field('icon');
        ?>
        <a href="<?php the_sub_field('link');?>" class="header__contact-social"><?php echo wp_get_attachment_image( $icon, 'full' ); ?></a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <a href="tel:<?php the_field('phone', 'option');?>" class="header__contacts-phone"><?php the_field('phone', 'option');?></a>
  </div>
</header>

    <main class="page">
      <div data-observ></div>