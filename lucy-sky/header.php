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
				<?php include 'images/icon-logo.svg' ?>
			</a>
			<nav class="nav-flex">
				<?php
					//$c_menu = get_nav_menu('celebrity');
					//$p_menu = get_nav_menu('photograhy');
					//$co_menu = get_nav_menu('collectibles');
				?>
				<?php get_search_form(); ?>
				<ul class="main-nav">
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="main-nav-item">Locations</a>
						<!-- <?php if( count( $c_menu ) ) : ?>
							<ul class="sub-nav-list">
								<?php foreach($c_menu as $item) : ?>
									<li class="sub-nav-list-item">
										<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
										<?php echo $item->title; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?> -->
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="main-nav-item">Products</a>
						<!-- <?php if( count( $p_menu ) ) : ?>
							<ul class="sub-nav-list">
								<?php foreach($p_menu as $item) : ?>
									<li class="sub-nav-list-item">
										<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
										<?php echo $item->title; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?> -->
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/collectibles" class="main-nav-item">Order Online</a>
						<!-- <?php if( count( $co_menu ) ) : ?>
							<ul class="sub-nav-list">
								<?php foreach($co_menu as $item) : ?>
									<li class="sub-nav-list-item">
										<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"">
										<?php echo $item->title; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?> -->
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
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
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item with-sub-nav">VIP Club</a>
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item with-sub-nav">Knowledge</a>
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item with-sub-nav">About Us</a>
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item with-sub-nav">Contact Us</a>
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item with-sub-nav">Lucy Cares</a>
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li class="js-with-sub-nav">
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item with-sub-nav">Wholesale</a>
						<ul class="sub-nav-list">
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
							<li class="sub-nav-list-item">
								<a href="#">
									Navigation Link
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/" class="secondary-nav-item">Join Our Newsletter</a>
					</li>
				</ul>
				<ul class="social-nav">
					<li>
						<a href="" class="social-icon">
							<?php include 'images/icon-socialMedia--facebook.svg' ?>
						</a>
					</li>
					<li>
						<a href="" class="social-icon">
							<?php include 'images/icon-socialMedia--twitter.svg' ?>
						</a>
					</li>
					<li>
						<a href="" class="social-icon">
							<?php include 'images/icon-socialMedia--instagram.svg' ?>
						</a>
					</li>
					<li>
						<a href="" class="social-icon">
							<?php include 'images/icon-socialMedia--youtube.svg' ?>
						</a>
					</li>
				</ul>
			</nav>
		</header>

	