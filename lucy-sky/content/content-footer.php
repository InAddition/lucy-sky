<?php if( have_rows('footer_content') ): ?>
	<?php while( have_rows('footer_content') ): the_row(); ?>
			<?php get_template_part('content-sections-full-width'); ?>
	<?php endwhile; ?> 
<?php endif; ?>