<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="grid" role="main">

				<?php
					$wp_query = new WP_Query(array(
						'category_name' => 'portfolio',
						'showposts' => 20,
						'paged' => true
					));

					while ($wp_query->have_posts()) : $wp_query->the_post();
						get_template_part( 'parts/loop', 'grid' );
					endwhile;
					wp_reset_postdata();
				?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
