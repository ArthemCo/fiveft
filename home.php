<?php get_template_part('header', 'home'); ?>



	<?php
	// make into somthing better => real toggle also add light toggle
	if (get_theme_mod('hero_layout_toggle') === true):  ?>
		<div id="home-hero" style="background-image: url('<?php echo get_theme_mod('hero_img');?>');">
			<div id="hero-menu">
			<?php //if (!empty(get_theme_mod('fiveft_header_logo'))) : ?>
				<!-- <img src="<?php //echo get_theme_mod('fiveft_header_logo'); ?>" alt="logo"> -->
			<?php //else: ?><h1><?php bloginfo('name'); ?></h1> <?php //endif; ?>
				<hr />
			<?php if (!empty(get_theme_mod('hero_link'))): ?>
				<a href="<?php echo esc_url(get_permalink(get_theme_mod('hero_link'))); ?>" class="button home-link">
				<?php echo get_theme_mod('hero_link_text');?>
				</a>
			<?php endif; ?>
			<?php if (!empty(get_theme_mod('fiveft_nav_facebook'))): ?>
				<a href="<?php echo esc_url(get_permalink(get_theme_mod('fiveft_nav_facebook'))); ?>" class="button home-link">
				facebook
				</a>
			<?php endif; ?>
			<?php if (!empty(get_theme_mod('fiveft_nav_flickr'))): ?>
				<a href="<?php echo esc_url(get_permalink(get_theme_mod('fiveft_nav_twitter'))); ?>" class="button home-link">
				twitter
				</a>
			<?php endif; ?>

		</div>

		<footer class="footer hero-home" role="contentinfo">
			<div id="inner-footer" class="row">
				<div class="large-12 medium-12 columns">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				</div>
			</div> <!-- end #inner-footer -->
		</footer> <!-- end .footer -->

	<?php wp_footer(); ?>
	</body>
	</html> <!-- end page -->

<?php else: ?>
	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="grid" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'grid' ); ?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

					<?php else : ?>

						<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	<?php get_footer(); ?>

<?php endif; ?>
