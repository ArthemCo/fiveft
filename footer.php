			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="row">
					<div class="">
						<nav role="navigation">
								<?php joints_footer_links(); ?>
						</nav>
					</div>
					<ul class="social-footer">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						<?php if (get_theme_mod('fiveft_nav_facebook') != ''): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_facebook'); ?>">
									Facebook 
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_twitter')):?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_twitter');?>">
									Twitter
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_flickr')): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_flickr');?>">
									Flickr
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_youtube')): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_youtube');?>">
									YouTube
								</a>
							</li>
						<?php endif; if (get_theme_mod('fiveft_nav_instagram')): ?>
							<li>
								<a href="<?php echo get_theme_mod('fiveft_nav_instagram');?>">
									Instagram
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
