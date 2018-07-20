<?php if( have_rows('sidebar_sections_sections') ): ?>
	<?php while( have_rows('sidebar_sections_sections') ): the_row(); 
	?>
		<?php get_template_part('content/content-sections'); ?>

	<?php endwhile; ?>
<?php endif; ?>