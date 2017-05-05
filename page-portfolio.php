<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">
		<h1 class="article-header">hello</h1>

		    <main id="main" class="grid" role="main">
					<?php $cat = get_category_by_slug('portfolio')->id;
								$query_string = 'cat='.$cat;

					query_posts($query_string) ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'grid' ); ?>
						
					<?php endwhile; ?>

						<!-- pagination here -->

						<?php wp_reset_query(); ?>

					<?php else : ?>
						<p><?php __( "Sorry, there's nothing here. "); ?></p>
					<?php endif; ?>

			</main>
			<?php joints_page_navi(); ?>

		</div>

	</div>
<?php get_footer(); ?>
