<?php
function get_more_posts_ajax_handler() {
  $category_id = isset($_GET['category']) ? intval($_GET['category']) : 0;
  $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
  $author = isset($_GET['author']) ? intval($_GET['author']) : 0;
  
  $posts_per_page = 3;

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'offset' => $offset,
      'cat' => $category_id,
      'order' => 'DESC',
      'orderby' => 'date',
      'author' =>$author,
  );

  $query = new WP_Query($args);

  $output = array();

  if ($query->have_posts()) {
      ob_start();
      while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-parts/post');
      }
      $html = ob_get_clean(); // Получаем содержимое буфера вывода и очищаем его

      $output['success'] = true;
      $output['data'] = $html;
      $output['offset'] = $offset;
  } else {
      $output['success'] = false;
      $output['message'] = 'No more posts found';
      
  }

  header('Content-Type: application/json');
  echo json_encode($output);
  wp_die();
}

add_action('wp_ajax_get_more_posts', 'get_more_posts_ajax_handler');
add_action('wp_ajax_nopriv_get_more_posts', 'get_more_posts_ajax_handler');

