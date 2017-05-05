<a id="post-<?php the_ID(); ?>" href="<?php the_permalink() ?>" <?php post_class('grid-item'); ?>>

		<div class="grid-item-interior">
			<h3 class="grid-image-title"><?php the_title(); ?></h3>
		</div>
		
		<?php the_post_thumbnail('medium');?>

</a>
