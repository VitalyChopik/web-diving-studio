<?php
function custom_breadcrumbs($firstTitle, $firstText, $sectondTitle, $secondText) {
  echo '<div class="max--width flex--between margin__top">';
  echo '<div class="breadcrumbs">';

  if ( !is_front_page() || is_paged()) {
      echo '<a href="' . home_url('/') . '" class="breadcrumbs__link breadcrumbs_unactive">Home</a>';
      echo '<span><i class="fa fa-greater-than"></i></span>';
  }
  $posts_page_id = get_option('page_for_posts');
  if(is_home()){
    echo '<a href="'. get_permalink($posts_page_id) .'" class="breadcrumbs__link">' . get_the_title($posts_page_id) . '</a>';
  }
  if (is_category()) {
      $categories = get_the_category();
      echo '<a href="'. get_permalink($posts_page_id) .'" class="breadcrumbs__link">' . get_the_title($posts_page_id) . '</a>';
      echo '<span><i class="fa fa-greater-than"></i></span>';
      if ($categories) {
        $current_category = get_queried_object();
        $category_id = $current_category->term_id;
          $category = get_term($category_id, 'category');

        if ($category && !is_wp_error($category)) {
            // Проверка наличия родительской категории
            
            if ($category->parent != 0) {
                $parent = $category->parent;
                echo '<a href="' . get_category_link($parent) . '" class="breadcrumbs__link">' . get_cat_name($parent) . '</a>';
                echo '<span><i class="fa fa-greater-than"></i></span>';
                echo '<a href="' . get_category_link($category->term_id) . '" class="breadcrumbs__link">' . $category->name . '</a>';
            } else {
                echo '<a href="' . get_category_link($category->term_id) . '" class="breadcrumbs__link">' . $category->name . '</a>';  
            }
        }
      }
  }

  if (is_single()) {
    echo '<a href="'. get_permalink($posts_page_id) .'" class="breadcrumbs__link">' . get_the_title($posts_page_id) . '</a>';
    echo '<span><i class="fa fa-greater-than"></i></span>';
    echo '<a href="'. get_permalink() .'" class="breadcrumbs__link">' . wp_trim_words(get_the_title(), 6, '...') . '</a>';
  } elseif (is_page()) {
      echo '<a href="'. get_permalink() .'" class="breadcrumbs__link">' . get_the_title() . '</a>';
  } elseif (is_search()) {
      echo '<span>Search results for "' . get_search_query() . '"</span>';
  } elseif (is_404()) {
      echo '<span>404 Not Found</span>';
  }

  echo '</div>';
  echo '
  <div class="homePage__disclosure hidden">
          <div class="home__topText">
          Disclosure:
          <span class="home__dropdowns">
              <a href="#">'.$firstTitle.'</a>
              <p class="home__dropdown">'.$firstText.'</p>
          </span>
          <span class="home__dropdowns">
              <a href="#"><i class="fa-solid fa-lock"></i>&nbsp; '.$sectondTitle.'</a>
              <p class="home__dropdown">'.$secondText.'</p>
          </span>
          </div>
      </div>
  ';
  echo '</div>';
}


function page_excerpt() {
    add_post_type_support('page', array('excerpt'));
  }
  add_action('init', 'page_excerpt');

  // Добавляем поля для социальных сетей в профиль пользователя
function add_social_media_fields($user) {
    ?>
    <h3>Social Media</h3>
    <table class="form-table">
        <tr>
            <th><label for="facebook">Facebook</label></th>
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="twitter">Twitter</label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="expertise">Expertise</label></th>
            <td>
                <input type="text" name="expertise" id="expertise" value="<?php echo esc_attr(get_the_author_meta('expertise', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="education">Education</label></th>
            <td>
                <input type="text" name="education" id="education" value="<?php echo esc_attr(get_the_author_meta('education', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'add_social_media_fields');
add_action('edit_user_profile', 'add_social_media_fields');


function save_social_media_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    update_user_meta($user_id, 'facebook', sanitize_text_field($_POST['facebook']));
    update_user_meta($user_id, 'twitter', sanitize_text_field($_POST['twitter']));
    update_user_meta($user_id, 'expertise', sanitize_text_field($_POST['expertise']));
    update_user_meta($user_id, 'education', sanitize_text_field($_POST['education']));
}
add_action('personal_options_update', 'save_social_media_fields');
add_action('edit_user_profile_update', 'save_social_media_fields');
