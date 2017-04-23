<?php get_template_part('header', 'home'); ?>

	<?php
	// checks for the hero layout and build an array of images
	if (get_theme_mod('hero_layout_toggle') === true):  
		$imgArray = array();

		if (get_theme_mod('hero_img')) 
			$imgArray[] = 'hero_img';
		
		if (get_theme_mod('hero_img_2')) 
			$imgArray[] = 'hero_img_2';
		
		if (get_theme_mod('hero_img_3')) 
			$imgArray[] = 'hero_img_3';
	?>

	<div id="home-hero" style="background-image: url('<?php echo get_theme_mod($imgArray[array_rand($imgArray)]);?>');">
		<div id="hero-menu">
			<h1><?php echo get_theme_mod('hero_link_text');?></h1> 
		</div>
	</div>

<?php endif; ?>

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


