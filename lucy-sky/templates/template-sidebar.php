<?php /* Template Name: 1 Column and Sidebar */ ?>
<?php get_header(); ?>
<div class="wrapper wrapper-two-column">
	<?php get_template_part('content/content-header') ?>
	<div class="content">
		<div class="container flex-no-wrap">
			<div class="main-column">
				<?php get_template_part('content/content-page') ?>
			</div>
			<aside>
				<?php get_template_part('content/content-sidebar') ?>
			</aside>
		</div>
	</div>
	<?php get_template_part('content/content-footer') ?>
</div>
<?php get_footer(); ?>