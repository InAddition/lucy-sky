<?php get_header(); ?>
<div class="wrapper wrapper-full-width">
	<?php if( have_rows('header_content_full_width_content', 273) ): ?>
		<?php while( have_rows('header_content_full_width_content', 273) ): the_row(); ?>
				<?php
					// vars
					$header = get_row_layout() == 'header';
					$feature_slider = get_row_layout() == 'feature_slider';
					$page_title = get_row_layout() == 'page_title';
					$page_slider = get_row_layout() == 'page_slider';
					$text_block = get_row_layout() == 'text_block';
					$locations = get_row_layout() == 'location_block';
					$site_features = get_row_layout() == 'site_features';
					$contact_form = get_row_layout() == 'contact_form';
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
												<span class="hero-xl">
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


				<!--Locations-->
				<?php if($locations) { ?>
					<div class="locations-container">
						<h1 class="gold-thin-title">
							Our Locations
						</h1>
						<div class="locations">
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/broadway">Broadway</a></h2>
									<a href="https://goo.gl/maps/zNBw8YDFx6v" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											2394 S. Broadway<br/>
											Denver, CO 80210
										</address>
									</a>
									<a href="tel:720-379-7295" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											720-379-7295
										</div>
									</a>
								</div>
							</div>
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/wash-park">Wash Park</a></h2>
									<a href="https://goo.gl/maps/faAcSg7xoXC2" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											2215 East Mississippi <br/>
											Denver, Colorado 80210
										</address>
									</a>
									<a href="tel:303-733-5500" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											303-733-5500
										</div>
									</a>
								</div>
							</div>
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/galena">Galena</a></h2>
									<a href="https://goo.gl/maps/JvGobrWA79C2" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											3480 S Galena St. <br/>
											Denver, CO 80231
										</address>
									</a>
									<a href="tel:720-350-4071" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											720-350-4071
										</div>
									</a>
								</div>
							</div>
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/federal">Federal</a></h2>
									<a href="https://goo.gl/maps/s6kxwc54Fh42" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											4444 S. Federal Blvd. <br/>
											englewood, CO 80110
										</address>
									</a>
									<a href="tel:720-350-4071" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											720-350-4071
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<!--Locations-->

				<!--Site Features-->
				<?php if($site_features) { ?>
					<div class="page-wrapper wood-wrapper">
						<div class="container">
							<div class="home-ctas">
								<a href="https://www.lucycarescolorado.com/"  target="_blank" class="home-cta">
									<div class="home-cta-icon home-cta-lucy"></div>
									<h2>Lucy Cares</h2>
									<p>Honored to lend a hand<br/>to the people of our community.</p>
									<div class="btn-small">
										<span>Learn More</span>
									</div>
								</a>
								<a href="<?php bloginfo('url'); ?>/products" class="home-cta">
									<div class="home-cta-icon home-cta-products"></div>
									<h2>Products</h2>
									<p>From flower to edibles to concentrates<br/>to pipes and everything between.</p>
									<div class="btn-small">
										<span>View Products</span>
									</div>
								</a>
								<a href="<?php bloginfo('url'); ?>/vip-club" class="home-cta">
									<div class="home-cta-icon home-cta-vip"></div>
									<h2>VIP Club</h2>
									<p>Enroll in our VIP Club<br/>for exclusive percs!</p>
									<div class="btn-small">
										<span>Join Now</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
				<!--Site Features -->

				<!--Contact Form-->
				<?php if($contact_form) { ?>
					<?php 
						$s_contact = get_sub_field('contact_form_shortcode_contact_form_shortcode');
					?>
					<div class="content	">
						<section class="site-module">
							<?php echo $s_contact ?>
						</section>
					</div>
				<?php } ?>
				<!--Text Block-->
		<?php endwhile; ?> 
	<?php endif; ?>
	<div class="page-content">
		<div class="content">
			<section class="site-module category">
				<?php echo do_shortcode('[searchandfilter headings="Category" fields="category" submit_label="Filter" hide_empty="1"]'); ?>
			</section>
			<section>
					<?php 
					// Check if there are any posts to display
					if ( have_posts() ) { ?>
					<div class="cta-grid">
						<?php while ( have_posts() ) { the_post(); ?>
							<?php setup_postdata($post); ?>
							<?php 
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' );
							?>
							<div class="cta-grid-item cta-block"
								style="background-image: url(<?php echo $featured_image[0] ?>);">
								<div class="cta-row-container">
									<a href="<?php the_permalink(); ?>" target="<?php echo $s_btn_target ?>"></a>
									<div class="cta-row-content">
										<h2>
											<?php the_title(); ?>
										</h2>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<?php tfg_pagination($pages = $query->max_num_pages); ?>
				<?php } else { ?>
					<p>There are no blog posts at this time. Please check back soon.</p>
				<?php } ?>
			</section>
		</div>
	</div>
	<?php if( have_rows('footer_content_full_width_content', 273) ): ?>
		<?php while( have_rows('footer_content_full_width_content', 273) ): the_row(); ?>
				<?php
					// vars
					$header = get_row_layout() == 'header';
					$feature_slider = get_row_layout() == 'feature_slider';
					$page_title = get_row_layout() == 'page_title';
					$page_slider = get_row_layout() == 'page_slider';
					$text_block = get_row_layout() == 'text_block';
					$locations = get_row_layout() == 'location_block';
					$site_features = get_row_layout() == 'site_features';
					$contact_form = get_row_layout() == 'contact_form';
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
												<span class="hero-xl">
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


				<!--Locations-->
				<?php if($locations) { ?>
					<div class="locations-container">
						<h1 class="gold-thin-title">
							Our Locations
						</h1>
						<div class="locations">
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/broadway">Broadway</a></h2>
									<a href="https://goo.gl/maps/zNBw8YDFx6v" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											2394 S. Broadway<br/>
											Denver, CO 80210
										</address>
									</a>
									<a href="tel:720-379-7295" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											720-379-7295
										</div>
									</a>
								</div>
							</div>
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/wash-park">Wash Park</a></h2>
									<a href="https://goo.gl/maps/faAcSg7xoXC2" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											2215 East Mississippi <br/>
											Denver, Colorado 80210
										</address>
									</a>
									<a href="tel:303-733-5500" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											303-733-5500
										</div>
									</a>
								</div>
							</div>
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/galena">Galena</a></h2>
									<a href="https://goo.gl/maps/JvGobrWA79C2" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											3480 S Galena St. <br/>
											Denver, CO 80231
										</address>
									</a>
									<a href="tel:720-350-4071" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											720-350-4071
										</div>
									</a>
								</div>
							</div>
							<div class="location-block">
								<div>
									<h2><a href="<?php bloginfo('url'); ?>/locations/federal">Federal</a></h2>
									<a href="https://goo.gl/maps/s6kxwc54Fh42" target="_blank" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-pin.svg' ?>
										</div>
										<address class="location-block-text">
											4444 S. Federal Blvd. <br/>
											englewood, CO 80110
										</address>
									</a>
									<a href="tel:720-350-4071" class="location-block-info">
										<div class="location-block-icon">
											<?php include 'wp-content/themes/lucy-sky/images/icon-phone.svg' ?>
										</div>
										<div class="location-block-text">
											720-350-4071
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<!--Locations-->

				<!--Site Features-->
				<?php if($site_features) { ?>
					<div class="page-wrapper wood-wrapper">
						<div class="container">
							<div class="home-ctas">
								<a href="https://www.lucycarescolorado.com/"  target="_blank" class="home-cta">
									<div class="home-cta-icon home-cta-lucy"></div>
									<h2>Lucy Cares</h2>
									<p>Honored to lend a hand<br/>to the people of our community.</p>
									<div class="btn-small">
										<span>Learn More</span>
									</div>
								</a>
								<a href="<?php bloginfo('url'); ?>/products" class="home-cta">
									<div class="home-cta-icon home-cta-products"></div>
									<h2>Products</h2>
									<p>From flower to edibles to concentrates<br/>to pipes and everything between.</p>
									<div class="btn-small">
										<span>View Products</span>
									</div>
								</a>
								<a href="<?php bloginfo('url'); ?>/vip-club" class="home-cta">
									<div class="home-cta-icon home-cta-vip"></div>
									<h2>VIP Club</h2>
									<p>Enroll in our VIP Club<br/>for exclusive percs!</p>
									<div class="btn-small">
										<span>Join Now</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
				<!--Site Features -->

				<!--Contact Form-->
				<?php if($contact_form) { ?>
					<?php 
						$s_contact = get_sub_field('contact_form_shortcode_contact_form_shortcode');
					?>
					<div class="content	">
						<section class="site-module">
							<?php echo $s_contact ?>
						</section>
					</div>
				<?php } ?>
				<!--Text Block-->
		<?php endwhile; ?> 
	<?php endif; ?>
</div>
<?php get_footer(); ?>