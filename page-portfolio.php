<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="grid" role="main">
					<?php
					$the_query = new WP_Query( array( 'cat' => get_cat_id('portfolio')) ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<a href="<?php the_permalink() ?>" class="grid-item">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="image" itemscope itemtype="http://schema.org/image">
									<h3 class="grid-image-title"><?php the_title(); ?></h1>
									<?php the_post_thumbnail('large');?>
								</div>
							</a>
						<?php endwhile; ?>

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php __( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

			</main>

		</div>

	</div>
	<footer class="footer" role="contentinfo">
		<div id="inner-footer" class="row">
			<div class="large-12 medium-12 columns">
				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
			</div>
		</div> <!-- end #inner-footer -->
	</footer> <!-- end .footer -->

<?php wp_footer(); ?>
</body>
</html> <!-- end page -->
