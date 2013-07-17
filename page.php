<?php
	$site = get_bloginfo('name');
	
	if ($site == 'MokiTouch') {
		include(TEMPLATEPATH . '/page-MT.php');
	} else {
		include(TEMPLATEPATH . '/page-MM.php');
	}
?>