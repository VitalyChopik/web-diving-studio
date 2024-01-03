<?php
get_header();
?>
<div class="single__page">
  <?php get_sidebar();?>
  <div class="single__wrapper">
    <h1 class="single__title section__title"><?php the_title();?></h1>
    <div class="single__content">
      <?php
      the_content();
      ?>
    </div>
    <div class="single__page-other-post other-post">
      <h2 class="single__title other-post__title"><?php _e('Смотрите так же:');?></h2>
      <div class="other-post__block">
      <?php
      global $post;
      $current_post_id = get_the_ID();
      $query = new WP_Query( [
        'posts_per_page' => 2,
        'post__not_in'   => [ $current_post_id ],
      ] );

      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          echo get_template_part('template-parts/post' );
        }
      } 
      wp_reset_postdata(); 
      ?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>