<?php get_header(); ?>



	<?php
	// make into somthing better => real toggle
	if (get_theme_mod('hero_img') != ''):  ?>
		<div id="home-hero" style="background-image: url('<?php echo get_theme_mod('hero_img');?>');"></div>

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

	<?php endif; ?>

<?php get_footer(); ?>
