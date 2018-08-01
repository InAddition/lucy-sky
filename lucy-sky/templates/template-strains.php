<?php /* Template Name: Strains Template */ ?>
<?php get_header(); ?>
<div class="wrapper wrapper-full-width">
	<?php get_template_part('content/content-header') ?>
	<div class="page-content">
		<div class="content no-background">
			<section class="site-module category">
				<?php echo do_shortcode('[searchandfilter headings="Strain Type" fields="straintype" submit_label="Filter" hide_empty="1"]'); ?>
			</section>
			<section>
				<?php
						global $paged;
						if(empty($paged)) $paged = 1;
						$query = new WP_Query(array(
							'post_type' => 'cannabisstrains',
							'orderby'=> 'title',
							'order' => 'ASC',
							'posts_per_page' => -1,
							'paged' => $paged
						));
					?>
					<?php if ( $query->have_posts() ) { ?>
					<div class="cta-grid">
						<?php while ( $query->have_posts() ) { $query->the_post(); ?>
							<?php setup_postdata($post); ?>
							<?php
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
							?>
							<a href="<?php the_permalink(); ?>" class="article-cta strain">
								<img src="<?php echo $featured_image[0] ?>" alt="<?php the_title(); ?>" />
								<h2 class="small-title"><span><?php the_title(); ?></span></h2>
								<h3 class="thin-title">
									<span><?php 
							  		$term = get_field('strain_type');
							  		if( $term ): ?>
							  		<?php echo $term->name; ?>
							  		<?php endif; ?></span>
  								</h3>
							</a>

						<?php } ?>
						<?php wp_reset_postdata(); ?>
					</div>
				
				<?php } else { ?>
				
				<?php } ?>
			</section>
		</div>
	</div>
	<?php get_template_part('content/content-footer') ?>
</div>
<?php get_footer(); ?>