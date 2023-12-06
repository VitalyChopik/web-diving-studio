

<article class="portfolio__box" data-fullscreen>
  <?php the_post_thumbnail( 'full', ['class'=>'portfolio__box-img'] )?>
  <div class="portfolio__box-text">
    <?php
      $terms = get_the_terms(get_the_ID(), 'type-website');
      if ($terms) {
          echo '<h3 class="portfolio__box-caterory"><a href="' . esc_url(get_term_link($terms[0]->term_id)) . '">' . esc_html($terms[0]->name) . '</a></h3>';
      }
    ?>
    <h2 class="portfolio__box-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  </div>
</article>