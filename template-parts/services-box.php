<?php $postID = get_the_ID();?>
<a class="services__box">
  <div class="services__box-image"><?php the_post_thumbnail();?></div>
  <h3 class="services__box-title"><?php the_title();?></h3>
  <div class="services__box-info">
    <h4 class="services__box-price"><?php the_field('price', $postID);?></h4>
    <h3 class="services__box-second-title"><?php the_title();?></h3>
    <p class="services__box-exerpt"><?php echo get_the_excerpt();?></p>
    <?php if( have_rows('service_list', $postID) ): ?>
      <ul class="services__box-list">
      <?php while( have_rows('service_list', $postID) ): the_row(); ?>
        <li class="services__box-item services__info-item"><?php the_sub_field('text');?></li>
      <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</a>