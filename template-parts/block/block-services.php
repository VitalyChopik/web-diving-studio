<?php if( have_rows('services') ): ?>
  <?php while( have_rows('services') ): the_row(); ?>
  <div class="services">
    <div class="services__info">
      <div class="services__info-close"></div>
      <div class="services__info-content">
        <h4 class="services__info-price"></h4>
        <h1 class="services__info-title"></h1>
        <p class="services__info-excerpt"></p>
        <ul class="services__info-list">
        </ul>
      </div>
      <?php 
      $link = get_sub_field('link');
      if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="services__info-btn main__btn"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
    <div class="services__block">
      <?php
        $args = array(
            'post_type' => 'services',          // Specify post type
            'posts_per_page' => -1,         // Number of posts to display
            'order' => 'ASC',              // Display in descending order (newest first)
            'orderby' => 'date',            // Order by date
        );

        $latest_posts_query = new WP_Query($args);

        if ($latest_posts_query->have_posts()) :
            while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                get_template_part('template-parts/services-box');
            endwhile;
            wp_reset_postdata();
        endif;
      ?>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>