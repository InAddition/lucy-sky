	<?php if( have_rows('sections') ): ?>
		<?php while( have_rows('sections') ): the_row(); 
		?>
		
		<?php get_template_part('content/content-sections'); ?>

		<?php endwhile; ?>
	<?php endif; ?>