<?php
	$site = get_bloginfo('name');
	$post = $wp_query->post;
	if ($site == 'MokiTouch') {
		include(TEMPLATEPATH . '/404-t-e3rd.php');
	} else {
		include(TEMPLATEPATH . '/404-m-e3rd.php');
	}
?>