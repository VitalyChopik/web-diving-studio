<?php
get_header();
?>
<div class="blog-page">
<?php
global $post;

$query = new WP_Query( [
	'posts_per_page' => -1,
] );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		echo get_template_part('template-parts/post' );
	}
} 

wp_reset_postdata(); // Сбрасываем $post
?>
</div>
<?php
get_footer();
?>