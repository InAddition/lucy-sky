<?php global $asset_v; ?>
<!doctype html>
<!--[if lt IE 7]><html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en-US"><![endif]-->
<!--[if IE 7]><html class=" lt-ie10 lt-ie9 lt-ie8 ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="lt-ie10 lt-ie9 ie8" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/fb.png?v=2">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta property="og:type" content="website">
		<meta name="format-detection" content="date=no">
		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/site.webmanifest">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/icon.png">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.min.css?v=<?php echo $asset_v; ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'page-' . $post->post_name ); ?>>
		<header>
			<a href="<?php bloginfo('url'); ?>" class="site-logo">

				<img src="<?php bloginfo('template_url'); ?>/images/logo-horizontal-white.png">
			</a>
			<nav class="nav-flex">
				<?php
					$locations_menu = get_nav_menu('locations');
					$products_menu = get_nav_menu('products');
					$order_online_menu = get_nav_menu('order_online');
					$vip = get_nav_menu('vip');
					$knowledge_menu = get_nav_menu('knowledge');
					$about = get_nav_menu('about');
					$contact = get_nav_menu('contact');
					$lucy_cares_menu = get_nav_menu('lucy_cares');
					$wholesale_menu = get_nav_menu('wholesale');
					$newsletter_menu = get_nav_menu('newsletter');
				?>
				<?php get_search_form(); ?>
				<ul class="main-nav">
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/locations" class="main-nav-item with-sub-nav
						 <?php if(is_tree(get_page_id('locations'))){ echo ' current-menu'; } ?>
						 ">Locations</a>

						<ul class="sub-nav-list">
						<?php foreach($locations_menu as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>" class="<?php if($item->object_id == $post->ID){ echo ' current-menu'; } ?>">
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/products" class="main-nav-item with-sub-nav
							<?php if(is_tree(get_page_id('products'))){ echo ' current-menu'; } ?>
							">Products</a>
						<ul class="sub-nav-list">
						<?php foreach($products_menu as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>" class="<?php if($item->object_id == $post->ID){ echo ' current-menu'; } ?>">
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/order-online" class="main-nav-item
							<?php if(is_tree(get_page_id('order-online'))){ echo ' current-menu'; } ?>
							">Order Online</a>
						
					</li>
				</ul>
			</nav>
			<div class="hamburger">
				<a href="#" class="hamburger-icon">
					<span></span>
				</a>
			</div>
			<nav class="secondary-nav">
				<ul class="secondary-nav-list">
					<li class="<?php if( count( $vip ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="<?php bloginfo('url'); ?>/v-i-p-club" class="secondary-nav-item <?php if( count( $vip ) ) : ?>with-sub-nav<?php endif; ?> 
						<?php if(is_tree(get_page_id('v-i-p-club'))){ echo ' current-menu'; } ?>
						">V.I.P. Club</a>
						<ul class="sub-nav-list">
						
						<?php foreach($vip as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>"<?php if($item->object_id == $post->ID){ echo ' class="current-menu"'; } ?>>
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="<?php if( count( $knowledge_menu ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="<?php bloginfo('url'); ?>/knowledge" class="secondary-nav-item <?php if( count( $knowledge_menu ) ) : ?>with-sub-nav<?php endif; ?>
						<?php if(is_tree(get_page_id('knowledge'))){ echo ' current-menu'; } ?>
						">Knowledge</a>
						<ul class="sub-nav-list">
						<?php foreach($knowledge_menu as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>"<?php if($item->object_id == $post->ID){ echo ' class="current-menu"'; } ?>>
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="<?php if( count( $about ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="<?php bloginfo('url'); ?>/about-us" class="secondary-nav-item <?php if( count( $about ) ) : ?>with-sub-nav<?php endif; ?> 
						<?php if(is_tree(get_page_id('about-us'))){ echo ' current-menu'; } ?>
						">About Us</a>
						<ul class="sub-nav-list">
						
						<?php foreach($about as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>"<?php if($item->object_id == $post->ID){ echo ' class="current-menu"'; } ?>>
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="<?php if( count( $contact ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="<?php bloginfo('url'); ?>/contact-us" class="secondary-nav-item <?php if( count( $contact ) ) : ?>with-sub-nav<?php endif; ?> 
						<?php if(is_tree(get_page_id('contact-us'))){ echo ' current-menu'; } ?>
						">Contact Us</a>
						<ul class="sub-nav-list">
						
						<?php foreach($contact as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>"<?php if($item->object_id == $post->ID){ echo ' class="current-menu"'; } ?>>
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="<?php if( count( $lucy_cares_menu ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="https://www.lucycarescolorado.com/" target="_blank" class="secondary-nav-item <?php if( count( $lucy_cares_menu ) ) : ?>with-sub-nav<?php endif; ?>
						<?php if(is_tree(get_page_id('lucy-cares'))){ echo ' current-menu'; } ?>
						">Lucy Cares</a>
						<ul class="sub-nav-list">
						<?php foreach($lucy_cares_menu as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>" class="<?php if($item->object_id == $post->ID){ echo ' current-menu'; } ?>">
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="<?php if( count( $wholesale_menu ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="<?php bloginfo('url'); ?>/wholesale" class="secondary-nav-item <?php if( count( $wholesale_menu ) ) : ?>with-sub-nav<?php endif; ?>
						<?php if(is_tree(get_page_id('wholesale'))){ echo ' current-menu'; } ?>
						">Wholesale</a>
						<ul class="sub-nav-list">
						<?php foreach($wholesale_menu as $item) : ?>
							<li class="sub-nav-list-item">
								<a href="<?php echo $item->url; ?>" class="<?php if($item->object_id == $post->ID){ echo ' current-menu'; } ?>">
									<?php echo $item->title; ?>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li class="<?php if( count( $newsletter_menu ) ) : ?>js-with-sub-nav<?php endif; ?>">
						<a href="#js-hidden" data-type="inline" class="secondary-nav-item venobox">Join Our Newsletter</a>
					
					</li>
				</ul>
				<ul class="social-nav">
					<li>
						<a href="https://www.facebook.com/LucySkyCannaTique/" class="social-icon" target="_blank">
							<?php include 'images/icon-socialMedia--facebook.svg' ?>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/lucyskycannabis?" class="social-icon" target="_blank">
							<?php include 'images/icon-socialMedia--twitter.svg' ?>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/lucyskycannabisboutique/" class="social-icon" target="_blank">
							<?php include 'images/icon-socialMedia--instagram.svg' ?>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/lucyskycannabisboutique/" class="social-icon" target="_blank">
							<?php include 'images/icon-socialMedia--pinterest.svg' ?>
						</a>
					</li>
					<!-- <li>
						<a href="" class="social-icon">
							<?php include 'images/icon-socialMedia--youtube.svg' ?>
						</a>
					</li> -->
				</ul>
			</nav>
		</header>

	