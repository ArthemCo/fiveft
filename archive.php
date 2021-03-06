<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">

			<main id="main" class="archive-grid" role="main">
				<header><h1 class="page-title"><?php the_archive_title();?></h1></header>

				<div class="grid">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 		
						<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
					
				<?php endwhile; ?>	
				</div>	
					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->
			
	</div> <!-- end #content -->

<?php get_footer(); ?>