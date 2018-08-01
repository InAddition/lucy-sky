<?php /* Template Name: Two Columns */ ?>
<?php get_header(); ?>
<div class="wrapper wrapper-two-column">
	<?php get_template_part('content/content-header') ?>
	<div class="content ">
		<div class="flex-container-alt content-two-column">
			<?php get_template_part('content/content-page') ?>
		</div>
	</div>
	<?php get_template_part('content/content-footer') ?>
</div>
<?php get_footer(); ?>