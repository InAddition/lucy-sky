<?php /* Template Name: Location */ ?>
<?php get_header(); ?>
<div class="wrapper wrapper-two-column">
	<?php get_template_part('content/content-header') ?>
	<div class="content">
		<div class="container flex-no-wrap">
			<div class="main-column">
				<?php get_template_part('content/content-page') ?>
			</div>
			<aside>
				<?php
					$phone = get_field('phone_number');
					$hours = get_field('hours');
				?>
				<?php if( have_rows('address') ): 
					while( have_rows('address') ): the_row(); 
						// vars
						$address = get_sub_field('address');
						$map_link = get_sub_field('link_to_map');
						$map_embed = get_sub_field('map_embed_code');
					?>
						
						<div class="page-location-info">
						<?php if($address) { ?>
						<a href="<?php echo $map_link ?>" class="location-block-info" target="_blank">
							<div class="location-block-icon">
								<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
							</div>
							<address class="location-block-text">
								<?php echo $address ?>
							</address>
						</a>
						<?php } ?>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if($hours) { ?>
				<div class="location-block-info">
					<div class="location-block-icon">
						<?php include 'wp-content/themes/lucy-sky/images/icon-clock.svg' ?>
					</div>
					<div class="location-block-text">
						<?php echo $hours ?>
					</div>
				</div>
				<?php } ?>
				<?php if($phone) { ?>
				<a href="tel:<?php echo $phone ?>" class="location-block-info">
					<div class="location-block-icon">
						<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
					</div>
					<div class="location-block-text">
						<?php echo $phone ?>
					</div>
				</a>
				<?php } ?>
				</div>
				<?php if($map_embed) { ?>
				<section class="site-module">
					<div class="site-embed map-embed">
						<?php echo $map_embed ?>
					</div>
				</section>
				<?php } ?>
				<?php get_template_part('content/content-sidebar') ?>
			</aside>
		</div>
	</div>
	<?php get_template_part('content/content-footer') ?>
</div>
<?php get_footer(); ?>