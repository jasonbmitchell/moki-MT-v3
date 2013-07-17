<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header('MT'); ?>
<div id="content-MT">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
</div>
<?php get_footer('MT'); ?>