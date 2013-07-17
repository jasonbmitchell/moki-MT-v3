<?php
/*
Template Name: Touch - Blank page by Everythird
*/
?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header('MT'); ?>
<script src="<?php bloginfo('template_url'); ?>/js/buttons-e3rd.js"></script>
<div id="wp-content-wrapper-lg">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('MT'); ?>