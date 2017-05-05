<a href="#menu" id="nav-toggle">Menu
	<div class="nav-icon">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
</div>
</a>

<a href="<?php echo home_url(); ?>" id="nav-logo">
	<?php if (!empty(get_theme_mod('fiveft_header_logo'))) : ?>
		<img src="<?php echo get_theme_mod('fiveft_header_logo'); ?>" alt="logo">
	<?php else: bloginfo('name'); endif; ?>
</a>

<div class="nav" id="nav-main" role="navigation">

	<?php joints_top_nav(); ?>

	<div class="nav-social-links">
		<ul>
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

</div>

<div id="dismiss-overlay"></div>
