<?php if( have_rows('footer_content_full_width_content') ): ?>
	<?php while( have_rows('footer_content_full_width_content') ): the_row(); ?>
			<?php get_template_part('content/content-sections-full-width'); ?>
	<?php endwhile; ?> 
<?php endif; ?>