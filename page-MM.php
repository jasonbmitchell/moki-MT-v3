<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header('MM'); ?>
<div id="wp-content-wrapper-lg">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('MM'); ?>