<?php if( have_rows('portfolio') ): ?>
  <?php while( have_rows('portfolio') ): the_row(); ?>
  <div class="portfolio">
    <div class="spinner">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        style="margin: auto; background: rgba(0, 0, 0, 0); display: block; shape-rendering: auto;" width="200px"
        height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <g transform="rotate(0 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(30 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(60 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite">
            </animate>
          </rect>
        </g>
        <g transform="rotate(90 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(120 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(150 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite">
            </animate>
          </rect>
        </g>
        <g transform="rotate(180 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(210 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(240 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite">
            </animate>
          </rect>
        </g>
        <g transform="rotate(270 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(300 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s"
              repeatCount="indefinite"></animate>
          </rect>
        </g>
        <g transform="rotate(330 50 50)">
          <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite">
            </animate>
          </rect>
        </g>
      </svg>
    </div>
    <?php
      $posts_per_page = -1;
      // Custom query to retrieve the 15 latest posts
      $args = array(
          'post_type' => 'portfolio',          // Specify post type
          'posts_per_page' => $posts_per_page,         // Number of posts to display
          'order' => 'DESC',              // Display in descending order (newest first)
          'orderby' => 'date',            // Order by date
      );

      $latest_posts_query = new WP_Query($args);

      // Check if there are posts
      if ($latest_posts_query->have_posts()) :
          // Loop through the posts
          while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
          
              get_template_part('template-parts/portfolio-post');
          endwhile;
          // Restore global post data
          wp_reset_postdata();
      endif;
    ?>
  </div>
  <?php endwhile; ?>
<?php endif; ?>