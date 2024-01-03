<a href="<?php the_permalink();?>" class="blog-page__post">
  <div class="blog-page__image">
  <?php the_post_thumbnail( 'full', array('class' => '') ); ?>
  </div>
  <h2 class="blog-page__title"><?php the_title();?></h2>
</a>