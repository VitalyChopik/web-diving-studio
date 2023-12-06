<?php if( have_rows('home_hero') ): ?>
  <?php while( have_rows('home_hero') ): the_row(); 
  $background = get_sub_field('background');
  ?>
  <div class="hero home-hero section" data-fullscreen>
    <div class="hero__background"><?php echo wp_get_attachment_image( $background, 'full' ); ?></div>
    <div class="hero__heading">
      <h1 class="hero__title"><?php the_sub_field('title');?></h1>
      <p class="hero__text"><?php the_sub_field('text');?></p>
      <?php 
      $link = get_sub_field('link');
      if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="hero__button main__btn"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
    <div class="hero__blocks">
    <?php if( have_rows('blocks') ): ?>
      <?php while( have_rows('blocks') ): the_row(); ?>
      <div class="hero__box">
        <div class="hero__box-value" data-value="<?php the_sub_field('value');?>"><?php the_sub_field('value');?></div>
        <p class="hero__box-info"><?php the_sub_field('info');?></p>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>