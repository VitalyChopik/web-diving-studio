<div class="cards">
  <h1 class="cards__title section__subtitle"><?php the_title();?></h1>
  <div class="cards__block">
      <?php
        $args = array(
            'post_type' => 'location',          // Specify post type
            'posts_per_page' => -1,         // Number of posts to display
            'order' => 'ASC',              // Display in descending order (newest first)
            'orderby' => 'date',            // Order by date
        );

        $latest_posts_query = new WP_Query($args);

        if ($latest_posts_query->have_posts()) :
            while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                ?>
                <a href="<?php the_permalink();?>" class="cards__box">
                  <div class="cards__box-img"><?php the_post_thumbnail( 'full');?></div>
                  <h3 class="cards__box-title"><?php the_field('title', get_the_ID());?></h3>
                </a>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
      ?>


  </div>
</div>