<a href="<?php the_permalink() ?>" class="archive-item grid-item">

	<div id="post-<?php the_ID(); ?>" <?php post_class('archive-img'); ?> role="image" itemscope itemtype="http://schema.org/image">

		<h3 class="grid-image-title"><?php the_title(); ?></h1>

		<?php the_post_thumbnail('small');?>

	</div>
</a>

