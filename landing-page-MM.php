<?php
/*
Template Name: MM - Landing page
*/
?>

<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header('landing-page-MM'); ?>
<div id="wp-content-wrapper-lg">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mktFormSupport.js"></script>
<?php get_footer('landing-page-MM'); ?>