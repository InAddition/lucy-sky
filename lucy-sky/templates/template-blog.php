<?php /* Template Name: Blog Template */ ?>
<?php get_header(); ?>
<div class="wrapper wrapper-full-width">
	<?php get_template_part('content/content-header') ?>
	<div class="page-content">
		<div class="content">
			<section class="site-module category">
				<?php echo do_shortcode('[searchandfilter headings="Category" fields="category" submit_label="Filter" hide_empty="1"]'); ?>
			</section>
			<section>
				<?php
						global $paged;
						if(empty($paged)) $paged = 1;
						$query = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => 12,
							'paged' => $paged
						));
					?>
					<?php if ( $query->have_posts() ) { ?>
					<div class="cta-grid">
						<?php while ( $query->have_posts() ) { $query->the_post(); ?>
							<?php setup_postdata($post); ?>
							<?php 
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' );
							?>
							<div class="cta-grid-item cta-block"
								style="background-image: url(<?php echo $featured_image[0] ?>);">
								<div class="cta-row-container">
									<a href="<?php the_permalink(); ?>" target="<?php echo $s_btn_target ?>"></a>
									<div class="cta-row-content">
										<h2>
											<?php the_title(); ?>
										</h2>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<?php tfg_pagination($pages = $query->max_num_pages); ?>
				<?php } else { ?>
					<p>There are no blog posts at this time. Please check back soon.</p>
				<?php } ?>
			</section>
		</div>
	</div>
	<?php get_template_part('content/content-footer') ?>
</div>
<?php get_footer(); ?>