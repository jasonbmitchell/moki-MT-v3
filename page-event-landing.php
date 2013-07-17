<?php
/*
Template Name: Event landing page by Everythird
*/
?>

<?php get_header('event-landing'); ?>
<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //the_title(); ?>
			<?php the_content(); ?>
			
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('event-landing'); ?>