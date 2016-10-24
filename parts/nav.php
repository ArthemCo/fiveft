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

</div>

<div id="dismiss-overlay"></div>