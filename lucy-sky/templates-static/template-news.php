<?php /* Template Name: News Template */ ?>
<?php get_header(); ?>
		<?php
			global $paged;
			if(empty($paged)) $paged = 1;
			$query = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 12,
				'offset' => 1,
				'paged' => $paged
			));
			?>
			<?php if ( $query->have_posts() ) { ?>
				<div class="news-grid">
					<?php while ( $query->have_posts() ) { $query->the_post(); ?>
					
					<?php } ?>
				</div>
				<?php tfg_pagination($pages = $query->max_num_pages); ?>
			<?php } else { ?>
				<p>There are no blog posts at this time. Please check back soon.</p>
			<?php } ?>	
<?php get_footer(); ?>