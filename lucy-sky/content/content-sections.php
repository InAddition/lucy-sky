	<?php 
	// vars
	$bg = get_sub_field('section_background');
	$no_bg = $bg == 'none';
	$wood_bg = $bg == 'wood';
	$blue_bg = $bg == 'blue';
	$red_bg = $bg == 'red';
	$gold_bg = $bg == 'gold';
	$white_bg = $bg == 'white';
	$content = get_sub_field('section_content');
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
	<!--Content-->
		<?php if( have_rows('section_content') ): ?>
			<?php while( have_rows('section_content') ): the_row(); 
				// vars
				$section_title = get_row_layout() == 'section_title';
				$text_block = get_row_layout() == 'text_block';
				$button = get_row_layout() == 'button';
				$feature_slider = get_row_layout() == 'feature_slider';
				$cta_grid = get_row_layout() == 'cta_grid';
				$article_grid = get_row_layout() == 'article_grid';
				$cta_row = get_row_layout() == 'cta_row';
				$image = get_row_layout() == 'image';
				$video = get_row_layout() == 'video';
				$image_gallery = get_row_layout() == 'image_gallery';
				$embed = get_row_layout() == 'embed';
				$contact_form = get_row_layout() == 'contact_form';
				$accordions = get_row_layout() == 'accordions';
			?>

			<!--Section Title-->
			<?php if($section_title) { ?>
				<?php 
					$s_title = get_sub_field('title');
					$s_icon = get_sub_field('icon');
					$s_icon = $s_icon['sizes']['full'];
					$s_position = get_sub_field('position');
						$s_p_center = $s_position == 'center';
					$s_size = get_sub_field('size');
						$s_s_small = $s_size == 'small';
						$s_s_med = $s_size == 'medium';
						$s_s_lrg = $s_size == 'large';
				?>
				<section class="site-module">
					<h1 class="
						<?php if($s_s_small) { ?>
							thin-title
						<?php } ?>
						<?php if($s_s_med) { ?>
							small-title
						<?php } ?>
						<?php if($s_s_lrg) { ?>
							large-title
						<?php } ?>
						<?php if($s_p_center) { ?>
							centered-title
						<?php } ?>
						<?php if($s_icon) { ?>
							with-icon
						<?php } ?>
					">
						<span
							<?php if($s_icon) { ?>
								style="background-image: url(<?php echo $s_icon ?>);"
							<?php } ?>
						>
							<?php echo $s_title ?>
						</span>
					</h1>
				</section>
			<?php } ?>
			<!--Section Title-->

			<!--Text Block-->
			<?php if($text_block) { ?>
				<?php 
					$s_text_type = get_sub_field('text_block_type');
						$s_t_default = $s_text_type == 'default';
						$s_t_small = $s_text_type == 'small';
					$s_text = get_sub_field('text');
					$s_sml_text = get_sub_field('small_text');
				?>
				<?php if($s_t_default) { ?>
				<section class="site-module">
					<div class="wysiwyg">
						<?php echo $s_text ?>
					</div>
				</section>
				<?php } ?>
				<?php if($s_t_small) { ?>
				<section class="site-module">
					<div class="small-copy">
						<?php echo $s_sml_text ?>
					</div>
				</section>
				<?php } ?>
			<?php } ?>
			<!--Text Block-->

			<!--Button-->
			<?php if($button) { ?>
				<?php 
					$s_button = get_sub_field('button');
					$s_btn_text = $s_button['title'];
					$s_btn_url = $s_button['url'];
					$s_btn_target = $s_button['target'];
					$s_button_type = get_sub_field('button_size');
						$s_btn_sml = $s_button_type == 'small';
						$s_btn_med = $s_button_type == 'medium';
						$s_btn_lrg = $s_button_type == 'large';
						$s_btn_link = $s_button_type == 'link';
					$s_button_position = get_sub_field('position');
						$s_btn_center = $s_button_position == 'center';
				?>
				<section class="site-module <?php if($s_btn_center) { ?>
							centered
						<?php } ?>">
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
							btn-margin-auto
						<?php } ?>
					" target="<?php echo $s_btn_target ?>">
						<span>
							<?php echo $s_btn_text ?>
						</span>
					</a>
				</section>
			<?php } ?>
			<!--Button-->

			<!--Slider-->
			<?php if($feature_slider) { ?>
				<?php if( have_rows('slides') ): ?>
					<section class="site-module">
						<div class="hero js-slider">
							<?php while( have_rows('slides') ): the_row(); 
								$s_bg_type = get_sub_field('background_type');
								$s_bg_image = $s_bg_type == 'image_bg';
								$s_bg_video = $s_bg_type == 'video_bg';
								$s_image = get_sub_field('image');
								$s_video = get_sub_field('video');
								$s_image_alt = $s_image['alt'];
								$s_image = $s_image['sizes']['sml_feature'];
								$s_button = get_sub_field('button');
								$s_btn_text = $s_button['title'];
								$s_btn_url = $s_button['url'];
								$s_btn_target = $s_button['target'];
								$s_text_1 = get_sub_field('text_line_1');
								$s_text_2 = get_sub_field('text_line_2');
								$s_text_3 = get_sub_field('text_line_3');
							?>
								<div class="hero-slide <?php if(!$s_text_1 || !$s_text_2 || !$s_text_2 || !$s_btn_url) { ?>
										no-hero-copy
									<?php } ?>" 
									
									style="<?php if($s_bg_image) { ?>background-image: url(<?php echo $s_image ?>)<?php } ?>;"
									
									>
									<div class="hero-brand">
										<?php if($s_bg_image) { ?>
											Test
										<?php } ?>
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
									<?php if($s_bg_video) { ?>
										<div class="hero-video-container">
											<video playsinline autoplay muted loop class="hero-video">
								    		    <source src="<?php echo $s_video ?>" type="video/mp4">
								    		</video>
								    	</div>
									<?php } ?>
								</div>
							<?php endwhile; ?> 
						</div>
					</section>
				<?php endif; ?>	
			<?php } ?>
			<!--Slider-->

			<!--CTA Grid-->
			<?php if($cta_grid) { ?>
				<?php 
					$s_cta_type = get_sub_field('cta_type');
						$s_cta_cstm = $s_cta_type == 'custom';
						$s_cta_page = $s_cta_type == 'page';
					$s_cta_grid = get_sub_field('cta_grid_items');
					$s_type_page = get_sub_field('pages');
				?>
				<section class="site-module">
					<div class="cta-grid">
						<?php if($s_cta_cstm) { ?>
							<?php if( have_rows('cta_grid_items') ): ?>
								<?php while( have_rows('cta_grid_items') ): the_row(); 
									$s_image = get_sub_field('image');
									$s_image_alt = $s_image['alt'];
									$s_image = $s_image['sizes']['sml_feature'];
									$s_button = get_sub_field('link');
									$s_btn_url = $s_button['url'];
									$s_btn_target = $s_button['target'];
									$s_text = get_sub_field('text');
								?>
								<div class="cta-grid-item cta-block"
									style="background-image: url(<?php echo $s_image ?>);">
									<div class="cta-row-container">
										<a href="<?php echo $s_btn_url ?>" target="<?php echo $s_btn_target ?>"></a>
										<div class="cta-row-content">
											<h2>
												<?php echo $s_text ?>
											</h2>
										</div>
									</div>
								</div>
								<?php endwhile; ?> 
							<?php endif; ?>	
						<?php } ?>
						<?php if($s_cta_page) { ?>
							<?php if( $s_type_page ): ?>
							    <?php foreach( $s_type_page as $post): ?>
							        <?php setup_postdata($post); ?>
							        <?php 
							        	$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' );
							        ?>
							        <div class="cta-grid-item cta-block"
							        	style="background-image: url(<?php echo $featured_image[0] ?>);">
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
							<?php endif; ?>
						<?php } ?>
					</div>
				</section>
			<?php } ?>
			<!--CTA Grid-->

			<!--Article Grid-->
			<?php if($article_grid) { ?>
				<section class=" site-module">
					<div class="cta-grid">
						<?php if( have_rows('articles') ): ?>
							<?php while( have_rows('articles') ): the_row(); 
								$s_image = get_sub_field('image');
								$s_image_alt = $s_image['alt'];
								$s_image = $s_image['sizes']['thumb'];
								$s_button = get_sub_field('button');
								$s_btn_url = $s_button['url'];
								$s_btn_target = $s_button['target'];
								$s_btn_title = $s_button['title'];
								$s_title = get_sub_field('title');
								$s_text = get_sub_field('text');
							?>
							<a href="<?php echo $s_btn_url ?>" class="article-cta" target="<?php echo $s_btn_target ?>">
								<img src="<?php echo $s_image; ?>" alt="<?php echo  $s_image_alt; ?>" />
								<?php if($s_title) { ?>
									<h2><?php echo $s_title ?></h2>
								<?php } ?>
								<?php if($s_text) { ?>
									<p><?php echo $s_text ?></p>
								<?php } ?>
								<?php if($s_btn_url) { ?>
								<div class="btn-small">
									<span>
										<?php echo $s_btn_title ?>
									</span>
								</div>
								<?php } ?>
							</a>
							<?php endwhile; ?> 
						<?php endif; ?>	
					</div>
				</section>
			<?php } ?>
			<!--Article Grid-->

			<!--Accorion Grid-->
				<?php if($accordions) { ?>
					<section class=" site-module">
						<?php if( have_rows('accordion') ): ?>
							<?php while( have_rows('accordion') ): the_row(); 
								$s_title = get_sub_field('accordion_title');
								$s_text = get_sub_field('accordion_content');
							?>
							<div class="accordion-container">
							<button class="accordion"><?php echo $s_title ?></button>
							<div class="panel">
							  <?php echo $s_text ?>
							</div>
						</div>
							<?php endwhile; ?> 
						<?php endif; ?>	
					</section>
				<?php } ?>
			<!--Accordion Grid-->

			<!--CTA Row -->
			<?php if($cta_row) { ?>
				<?php 
					$s_image = get_sub_field('image');
					$s_image_alt = $s_image['alt'];
					$s_image = $s_image['sizes']['feature'];
					$s_button = get_sub_field('button');
					$s_btn_url = $s_button['url'];
					$s_btn_target = $s_button['target'];
					$s_btn_title = $s_button['title'];
					$s_text = get_sub_field('text');
				?>
				<section class="site-module">
					<div class="cta-row" style="background-image: url(<?php echo $s_image ?>);">
						<div class="cta-row-container">
							<a href="<?php echo $s_btn_url ?>"></a>
							<div class="cta-row-content">
								<?php if($s_text) { ?>
									<h2><?php echo $s_text ?></h2>
								<?php } ?>
								<?php if($s_btn_url) { ?>
								<div class="btn-double-border">
									<span><?php echo $s_btn_title ?></span>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>
			<!--CTA Row-->

			<!--Image-->
			<?php if($image) { ?>
				<?php 
					$s_image = get_sub_field('image');
					$s_image_alt = $s_image['alt'];
					$s_image = $s_image['sizes']['full'];
					$s_button = get_sub_field('image_link');
					$s_btn_url = $s_button['url'];
					$s_btn_target = $s_button['target'];
				?>
				<section class="site-module">
					<?php if($s_btn_url) { ?>
					<a href="<?php echo $s_btn_url ?>" class="site-image" target="<?php echo $s_btn_target ?>">	
					<?php } ?>
					<?php if(!$s_btn_url) { ?>
					<div class="site-image">
					<?php } ?>
						<img src="<?php echo $s_image ?>" alt="<?php echo  $s_image_alt; ?>">
					<?php if(!$s_btn_url) { ?>
					</div>
					<?php } ?>
					<?php if($s_btn_url) { ?>
					</a>
					<?php } ?>
				</section>
			<?php } ?>
			<!--Image-->

			<!--Video-->
			<?php if($video) { ?>
				<?php 
					$s_video = get_sub_field('video');
				?>
				<section class="site-module">
					<div class="site-video">
						<?php echo $s_video ?>
					</div>
				</section>
			<?php } ?>
			<!--Video-->

			<!--Gallery-->
			<?php if($image_gallery) { ?>
				<?php 
					$s_image_gallery = get_sub_field('gallery_images');
					$_gallery_type = get_sub_field('gallery_type');
					$s_g_gal = $_gallery_type == 'gallery';
					$s_g_slides = $_gallery_type == 'slides';
				?>
				<section class="site-module">
					<?php if($s_g_gal) { ?>
					<div class="image-gallery">
						<?php if( $s_image_gallery ): ?>
					        <?php foreach( $s_image_gallery as $image ): ?>
				                <a href="<?php echo $image['url']; ?>" class="venobox" data-gall="gallery">
				                     <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
					        <?php endforeach; ?>
						<?php endif; ?>
					</div>
					<?php } ?>
					<?php if($s_g_slides) { ?>
						<div class="hero js-slider image-hero">
							<?php if( $s_image_gallery ): ?>
						        <?php foreach( $s_image_gallery as $image ): ?>
						        	<div class="hero-slide no-hero-copy">
						        		<img src="<?php echo $image['sizes']['sml_feature']; ?>" alt="<?php echo $image['alt']; ?>" />
						        	</div>
					            <?php endforeach; ?>
					    	<?php endif; ?>
						</div>
					<?php } ?>
				</section>
			<?php } ?>
			<!--Gallery-->

			<!--Embed-->
			<?php if($embed) { ?>
				<?php 
					$s_embed = get_sub_field('embed_code');
				?>
				<section class="site-module">
					<div class="site-embed">
						<?php echo $s_embed ?>
					</div>
				</section>
			<?php } ?>
			<!--Embed-->

			<!--Contact Form-->
			<?php if($contact_form) { ?>
				<?php 
					$s_contact = get_sub_field('contact_form_shortcode');
				?>
				<section class="site-module wysiwyg">
					<?php echo $s_contact ?>
				</section>
			<?php } ?>
			<!--Contact Form-->

			<?php endwhile; ?> 
		<?php endif; ?>
	<!--Content-->
	</div>
