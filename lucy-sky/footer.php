		<footer>
			<div class="footer-container">
				<div class="footer-brand">
					<div>
						<a href="<?php bloginfo('url'); ?>" class="footer-logo">
							<img src="<?php bloginfo('template_url'); ?>/images/logo-horizontal.png">
						</a>
						<a href="#js-hidden" data-type="inline" class="btn-double-border venobox">
							<span>SIGN UP FOR LUCY SKY MEMBERSHIP REWARDS</span>
						</a>
						<ul class="social-nav footer-social">
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
						</ul>
					</div>
				</div>
				<nav class="footer-nav">
					<?php
						$locations_menu = get_nav_menu('locations');
						$products_menu = get_nav_menu('products');
						$order_online_menu = get_nav_menu('order_online');
						$vip_club_menu = get_nav_menu('vip_club');
						$knowledge_menu = get_nav_menu('knowledge');
						$about_menu = get_nav_menu('about');
						$contact_menu = get_nav_menu('contact');
						$lucy_cares_menu = get_nav_menu('lucy_cares');
						$wholesale_menu = get_nav_menu('wholesale');
						$newsletter_menu = get_nav_menu('newsletter');
					?>
					<div>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/locations">Locations</a>
							<?php if( count( $locations_menu ) ) : ?>
								<?php foreach($locations_menu as $item) : ?>
									<li>
										<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
										<?php echo $item->title; ?>
										</a>
									</li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/products">Products</a>
							<?php if( count( $products_menu ) ) : ?>
								<?php foreach($products_menu as $item) : ?>
									<li>
										<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
										<?php echo $item->title; ?>
										</a>
									</li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
					<div>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/order-online">Order Online</a>
							<?php if( count( $order_online_menu ) ) : ?>
									<?php foreach($order_online_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/vip-club">VIP Club</a>
							<?php if( count( $vip_club_menu ) ) : ?>
									<?php foreach($vip_club_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
					<div>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/knowledge">Knowledge</a>
							<?php if( count( $knowledge_menu ) ) : ?>
									<?php foreach($knowledge_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/about-us">About Us</a>
							<?php if( count( $about_menu ) ) : ?>
									<?php foreach($about_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
					<div>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a>
							<?php if( count( $contact_menu ) ) : ?>
									<?php foreach($contact_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/lucy-cares">Lucy Cares</a>
							<?php if( count( $lucy_cares_menu ) ) : ?>
									<?php foreach($lucy_cares_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<ul class="footer-nav-list">
							<a href="<?php bloginfo('url'); ?>/wholesale">Wholesale</a>
							<?php if( count( $wholesale_menu ) ) : ?>
									<?php foreach($wholesale_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<ul class="footer-nav-list">
							<a href="#js-hidden" data-type="inline" class="venobox">Join Our Newsletter</a>
							<?php if( count( $newsletter_menu ) ) : ?>
								<ul class="sub-nav-list">
									<?php foreach($newsletter_menu as $item) : ?>
										<li>
											<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
											<?php echo $item->title; ?>
											</a>
										</li>
									<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
				</nav>
			</div>
			<div class="copyright">
				<p class="copyright-text">
					Copyright &copy; <?php echo date("Y"); ?> Lucy Sky Cannabis Boutique - All rights reserved.
				</p>
				<div class="copyright-links">
					<a href="<?php bloginfo('url'); ?>/terms-of-use">Terms Of Use</a>
					<span>•</span>
					<a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a>
				</div>
			</div>
		</footer>
		<div id="js-hidden">
			<div id="mc_embed_signup">
			<form action="https://lucyskycannabisboutique.us13.list-manage.com/subscribe/post?u=0b37f53fc9db20d81d07b15e3&amp;id=aabb5a8146" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				<h2>Subscribe to our mailing list</h2>
			<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
			</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group size1of2">
				<label for="mce-MMERGE3">Phone Number  <span class="asterisk">*</span>
			</label>
				<input type="text" name="MMERGE3" class="required" value="" id="mce-MMERGE3">
			</div>
			<div class="mc-field-group size1of2">
				<label for="mce-MMERGE4-month">Birthday  <span class="asterisk">*</span>
			</label>
				<div class="datefield">
					<span class="subfield monthfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE4[month]" id="mce-MMERGE4-month"></span> / 
					<span class="subfield dayfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE4[day]" id="mce-MMERGE4-day"></span> 
					<span class="small-meta nowrap">( mm / dd )</span>
				</div>
			</div>	<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0b37f53fc9db20d81d07b15e3_aabb5a8146" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
			</div>

			<!--End mc_embed_signup-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<?php global $asset_v; ?>
		<script src="<?php bloginfo('template_url'); ?>/js/main.min.js?v=<?php echo $asset_v; ?>"></script>
		<?php wp_footer(); ?>
	</body>
</html>


