<?php
/*
Template Name: Mobility: Mokimanage page by Everythird
*/
?>

<?php get_header('body-white-mobility'); ?>
<script src="<?php bloginfo('template_url'); ?>/js/buttons-e3rd.js"></script>
<div id="wp-content-wrapper-lg">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('body-white-mobility'); ?>