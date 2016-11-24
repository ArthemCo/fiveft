			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="row">
					<div class="">
						<nav role="navigation">
								<?php joints_footer_links(); ?>
						</nav>
					</div>

					<div class="">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					</div>
					<ul class="social-footer">
						<?php if (get_theme_mod('fiveft_nav_facebook') != ''): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_facebook'); ?>">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="facebook logo">
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_twitter')):?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_twitter');?>">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="twitter logo">
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_flickr')): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_flickr');?>">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/flickr.png" alt="flickr logo">
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_youtube')): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_youtube');?>">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" alt="youtube logo">
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_instagram')): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_instagram');?>">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.png" alt="instagram logo">
								</a>
							</li>
						<?php endif; ?>
					</ul>
					</div>
				</div> <!-- end #inner-footer -->
			</footer> <!-- end .footer -->

		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
