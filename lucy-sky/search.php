<?php get_header(); ?>
<div class="wrapper">
	<div class="content white-wrapper">
		
			<div class="container">
				
					<?php $num = $wp_query->found_posts; ?>
						<?php if (have_posts()) { ?>
							<p>
							<?php echo $num; ?> Results found for "<?php echo esc_html( get_search_query( false ) ); ?>"
							</p>
						<?php } ?>
						<?php if (!have_posts()) { ?><p>No Results Found</p><?php } ?> 
			</div>
		
	</div>
	<div class="content">
			<?php if ( have_posts() ) : ?>
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); ?>

					<?php
					/*
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
				// End the loop.
				endwhile;
			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content', 'none' );
			endif;
			?>
	</div>
</div>
<?php get_footer(); ?>