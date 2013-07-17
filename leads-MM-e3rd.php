<?php
/*
Template Name: MM - Lead Generation
*/
?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header('MM-leads'); ?>
<div id="wp-content-wrapper-lg">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('body-white-mobility'); ?>