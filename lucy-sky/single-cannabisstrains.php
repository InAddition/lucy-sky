<?php get_header(); ?>
<div class="wrapper wrapper-full-width">

		<div class="strain-header">
		  <?php the_post_thumbnail( 'feature' ); ?>
		</div>
	  <div class="content
	  <?php 
	  	$term = get_field('strain_type');
	  	if( $term ): ?>
	  	<?php echo $term->name; ?>-wrapper
	  	<?php endif; ?>
	  ">
	  	<section class="site-module">
	  		<h1 class="large-title centered-title">
	  			<span>
	  				<?php the_title(); ?>
	  			</span>
	  		</h1>
	  	
	  		<div class="wysiwyg centered">
	  			<?php the_field('strain_description') ?>
	  		</div>
	  	</section>
	  </div>
	   <div class="page-content">
	   		<div class="content">
	   		<div class="cta-grid">
	   			<div class="strain-info-container">
	   				<div class="strain-info-block <?php 
	  	$term = get_field('strain_type');
	  	if( $term ): ?>
	  	<?php echo $term->name; ?>-block
	  	<?php endif; ?>">
	   					<div class="centered">
	   						<h1 class="strain-info-title"><span>Strain Type</span></h1>
	   						<h2 class="strain-info-content" /><span><?php echo $term->name; ?></span></h2>
		   				</div>
	   				</div>
	   			</div>
	   			<div class="strain-info-container">
	   				<div class="strain-info-block strain-info-secondary strain-info-thc<?php 
	  	$term = get_field('strain_type');
	  	if( $term ): ?>
	  	<?php echo $term->name; ?>-chart
	  	<?php endif; ?>">
	   					<div class="centered">
	   						<h1 class="strain-info-title"><span>THC</span></h1>
	   						<h2 class="strain-info-content" /><span><?php the_field('thc') ?>%</span></h2>
		   				</div>
		   				<div style="height:<?php the_field('thc') ?>%;"></div>
	   				</div>
	   			</div>
	   			<div class="strain-info-container">
	   				<div class="strain-info-block strain-info-secondary">
	   					<div class="centered">
	   						<h1 class="strain-info-title"><span>Strain Origins</span></h1>
	   						<h2 class="strain-info-content" /><span><?php the_field('strain_o') ?></span></h2>
		   				</div>
	   				</div>
	   			</div>
	   		</div>
	   </div>
	</div>


	<div class="carousel-container">
	
			<h1>Other <?php 
	  	$term = get_field('strain_type');
	  	if( $term ): ?>
	  	<?php echo $term->name; ?>
	  	<?php endif; ?> Strains</h1>
	

		


		        				<?php
		        						
		        						$query = new WP_Query(array(
		        							'post_type' => 'cannabisstrains',
		        							'orderby'=> 'title',
		        							'order' => 'ASC',
		        							'tax_query' => array(
		        							    array(
		        							        'taxonomy' => 'straintype',
		        							        'field' => 'name',
		        							        'terms' => $term->name
		        							        )
		        							    )
		        							
		        						));
		        					?>
		        					<?php if ( $query->have_posts() ) { ?>
		        					<div class="carousel js-slider-2">
		        						<?php while ( $query->have_posts() ) { $query->the_post(); ?>
		        							<?php setup_postdata($post); ?>
		        							<?php
		        								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
		        							?>
		        					

		        							<div class="carousel-cell cta-block"
		        							style="background-image: url(<?php echo $featured_image[0] ?>);"
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

		        						<?php } ?>
		        						<?php wp_reset_postdata(); ?>
		        					</div>
		        				
		        				<?php } else { ?>
		        				
		        				<?php } ?>
		       
			
		
	</div>






	<!--Locations-->
	
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
	
	<!--Locations-->
</div>
<?php get_footer(); ?>