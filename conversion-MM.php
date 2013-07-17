<?php
/*
Template Name: MM - Conversion
*/
?>

<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header('MM'); ?>
<div id="wp-content-wrapper-lg">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>

<!-- Google Code for MokiMobility Web Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1005437555;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "M6OtCK2p4wgQ84S33wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1005437555/?value=0&amp;label=M6OtCK2p4wgQ84S33wM&…"/>
</div>
</noscript>

<?php get_footer('MM'); ?>