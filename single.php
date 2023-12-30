<?php
get_header();
echo '<div class="single__page">';
?>
<h1 class="single__title section__title"><?php the_title();?></h1>
<?php the_post_thumbnail( 'full', array('class' => 'single__image') ); ?>
<div class="single__wrapper">
  <div class="single__navigation"></div>
  <div class="single__content">
  <?php
  the_content();
  ?>
  </div>
</div>

<?php
echo '</div>';
get_footer();
?>