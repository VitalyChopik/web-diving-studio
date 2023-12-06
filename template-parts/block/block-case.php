<?php if( have_rows('case') ): ?>
  <?php while( have_rows('case') ): the_row();
  $image = get_sub_field('image_thumbnail');
  ?>
  
  <div class="case">
    <div class="case__info">
      <div class="case__thumbnail">      <?php echo wp_get_attachment_image( $image, 'full' ); ?></div>
      <h2 class="case__title-subtitle"><?php the_sub_field('subtitle');?></h2>
      <h1 class="case__title"><?php the_title();?></h1>
      <p class="case__excerpt"><?php echo get_the_excerpt( );?></p>
    </div>

    <div class="case__content">
    <?php if( have_rows('content') ): ?>
      <?php while( have_rows('content') ): the_row();
      $imageCase = get_sub_field('case__image');
      ?>
      <div class="case__block">
        <h2 class="case__block-title"><?php the_sub_field('case__title');?></h2>
        <?php echo wp_get_attachment_image( $imageCase, 'full', '', ['class'=> 'case__block-image'] ); ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php 
      $link = get_sub_field('button_link');
      if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="case__button main__btn"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
  </div>
  <?php endwhile; ?>
<?php endif; ?>