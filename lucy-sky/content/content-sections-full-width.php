<?php
	// vars
	$header = get_row_layout() == 'header';
	$feature_slider = get_row_layout() == 'feature_slider';
	$page_title = get_row_layout() == 'page_title';
	$page_slider = get_row_layout() == 'page_slider';
	$text_block = get_row_layout() == 'text_block';
?>

<!--Header-->
<?php if($header) { ?>
	<?php 
		$s_image = get_sub_field('header_image');
		$s_image = $s_image['sizes']['feature'];
		$s_text = get_sub_field('text');
	?>
	<div class="header" style="background-image:url(<?php echo $s_image ?>);">
			<h1>
				<?php echo $s_text ?>
			</h1>
	</div>
<?php } ?>
<!--Header-->



<!--Page Title-->
<?php if($page_title) { ?>
	<?php 
		$s_bg_style = get_sub_field('background_style_section_background');
		$no_bg = $s_bg_style == 'none';
		$wood_bg = $s_bg_style == 'wood';
		$blue_bg = $s_bg_style == 'blue';
		$red_bg = $s_bg_style == 'red';
		$gold_bg = $s_bg_style == 'gold';
		$white_bg = $s_bg_style == 'white';
		$s_custom_text = get_sub_field('use_custom_text');
		$s_text = get_sub_field('text');
	?>
	<h2 class="page-title
		<?php if($no_bg): ?>
			no-background
		<?php endif; ?>
		<?php if($wood_bg): ?>
			wood-wrapper
		<?php endif; ?>
		<?php if($blue_bg): ?>
			blue-wrapper
		<?php endif; ?>
		<?php if($red_bg): ?>
			red-wrapper
		<?php endif; ?>
		<?php if($gold_bg): ?>
			gold-wrapper
		<?php endif; ?>
		<?php if($white_bg): ?>
			white-wrapper
		<?php endif; ?>
	">
		<span>
			<?php if(!$s_custom_text) { ?>
				<?php the_title(); ?>
			<?php } ?>
			<?php if($s_custom_text && $s_text) { ?>
				<?php echo $s_text ?>
			<?php } ?>
		</span>
	</h2>
<?php } ?>
<!--Page Title-->

<!--Slider-->
<?php if($feature_slider) { ?>
	<?php if( have_rows('feature_slides_slides') ): ?>
			<div class="hero js-slider">
				<?php while( have_rows('feature_slides_slides') ): the_row(); 
					$s_image = get_sub_field('image');
					$s_image = $s_image['sizes']['sml_feature'];
					$s_button = get_sub_field('button');
					$s_btn_text = $s_button['title'];
					$s_btn_url = $s_button['url'];
					$s_btn_target = $s_button['target'];
					$s_text_1 = get_sub_field('text_line_1');
					$s_text_2 = get_sub_field('text_line_2');
					$s_text_3 = get_sub_field('text_line_3');
				?>
					<div class="hero-slide" 
						style="background-image: url(<?php echo $s_image ?>);"
						<?php if(!$s_text_1 || !$s_text_2 || !$s_text_2 || !$s_btn_url) { ?>
							class="no-hero-copy"
						<?php } ?>
						>
						<div class="hero-brand">
							<?php if($s_text_1 || $s_text_2 || $s_text_3) { ?>
							<h1>
								<?php if($s_text_1) { ?>
									<span class="hero-expanded">		<?php echo $s_text_1 ?>
									</span>
								<?php } ?>
								<?php if($s_text_2) { ?>
								<span class="hero-large">
									<?php echo $s_text_2 ?>
								</span>
								<?php } ?>
								<?php if($s_text_3) { ?>
								<span class="hero-small">
									<?php echo $s_text_3 ?>
								</span>
								<?php } ?>
							</h1>
							<?php } ?>
							<?php if($s_btn_url) { ?>
								<a href="<?php echo $s_btn_url ?> " class="btn-double-border" target="<?php echo $s_btn_target ?>">
									<span>
										<?php echo $s_btn_text ?>
									</span>
								</a>
							<?php } ?>
						</div>
					</div>
				<?php endwhile; ?> 
			</div>
	<?php endif; ?>	
<?php } ?>
<!--Slider-->

<!--Page Slider-->
<?php if($page_slider) { ?>
	<?php 
		$s_title = get_sub_field('section_title');
		$s_pages = get_sub_field('slider_items');
	?>
	<div class="carousel-container">
		<?php if($s_title) { ?>
			<h1><?php echo $s_title ?></h1>
		<?php } ?>
		<?php if( $s_pages ): ?>
			<div class="carousel js-slider-2">
		    <?php foreach( $s_pages as $post): ?>
		        <?php setup_postdata($post); ?>
		        <?php 
		        	$s_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
		        ?>
		        <div class="carousel-cell cta-block"
		        style="background-image: url(<?php echo $s_image[0] ?>);"
		        >


		        	<div class="cta-row-container">
		        		<a href="<?php the_permalink(); ?>"></a>
		        		<div class="cta-row-content">
		        			<h2>
		        				<?php the_title(); ?>
		        			</h2>
		        		</div>
		        	</div>
		        </div>
		    <?php endforeach; ?>
		    <?php wp_reset_postdata();  ?>
			</div>
		<?php endif; ?>
	</div>
<?php } ?>
<!--Page Slider-->

<!--Text Block-->
<?php if($text_block) { ?>
	<?php 
		$s_bg_style = get_sub_field('background_style_section_background');
		$no_bg = $s_bg_style == 'none';
		$wood_bg = $s_bg_style == 'wood';
		$blue_bg = $s_bg_style == 'blue';
		$red_bg = $s_bg_style == 'red';
		$gold_bg = $s_bg_style == 'gold';
		$white_bg = $s_bg_style == 'white';
		$s_text = get_sub_field('text');
		$s_button = get_sub_field('button_button');
		$s_btn_text = $s_button['title'];
		$s_btn_url = $s_button['url'];
		$s_btn_target = $s_button['target'];
		$s_button_type = get_sub_field('button_type_button_size');
			$s_btn_sml = $s_button_type == 'small';
			$s_btn_med = $s_button_type == 'medium';
			$s_btn_lrg = $s_button_type == 'large';
			$s_btn_link = $s_button_type == 'link';
		$s_button_position = get_sub_field('button_position_position');
			$s_btn_center = $s_button_position == 'center';
	?>
	<div class="content
			<?php if($no_bg): ?>
				no-background
			<?php endif; ?>
			<?php if($wood_bg): ?>
				wood-wrapper
			<?php endif; ?>
			<?php if($blue_bg): ?>
				blue-wrapper
			<?php endif; ?>
			<?php if($red_bg): ?>
				red-wrapper
			<?php endif; ?>
			<?php if($gold_bg): ?>
				gold-wrapper
			<?php endif; ?>
			<?php if($white_bg): ?>
				white-wrapper
			<?php endif; ?>
		">
		<section class="site-module">
			<div class="wysiwyg">
				<?php echo $s_text ?>
			</div>
		</section>
		<?php if($s_btn_url) { ?>
			<section class="site-module">
				<a href="<?php echo $s_btn_url ?> " class="
					<?php if($s_btn_sml) { ?>
						btn-small
					<?php } ?>
					<?php if($s_btn_med) { ?>
						btn-double-border
					<?php } ?>
					<?php if($s_btn_lrg) { ?>
						btn-lrg
					<?php } ?>
					<?php if($s_btn_link) { ?>
						btn-link
					<?php } ?>
					<?php if($s_btn_center) { ?>
						&nbsp;btn-margin-auto
					<?php } ?>
				" target="<?php echo $s_btn_target ?>">
					<span>
						<?php echo $s_btn_text ?>
					</span>
				</a>
			</section>
		<?php } ?>
	</div>
<?php } ?>
<!--Text Block-->