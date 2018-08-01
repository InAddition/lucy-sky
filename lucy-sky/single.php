<?php get_header(); ?>
<div class="wrapper wrapper-full-width">
	<?php
		if ( !get_the_content() ) { ?>
	   <?php get_template_part('content/content-header') ?>
	   <div class="page-content">
	   	<?php get_template_part('content/content-page') ?>
	   </div>
	   <?php get_template_part('content/content-footer') ?>
	<?php } ?>
	<?php
		if ( get_the_content() ) { ?>
		<div class="page-content">
			<div class="content">
				<section class="site-module">
					<h1 class="small-title">
						<span>
							<?php the_title(); ?>
						</span>
					</h1>
					<p>Posted: <?php the_date(); ?></p>
				</section>
				<section class="site-module">
					<div class="wysiwyg">
						<?php the_content(); ?>	
					</div>
				</section>
			</div>
		</div>
	<?php } ?>
</div>
<?php get_footer(); ?>