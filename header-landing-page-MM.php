<!DOCTYPE html>
<head>
	<?php wp_head(); ?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=1175">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	
	<title><?php wp_title(); ?></title>
	
	<!-- Typekit Integration -->
	<script type="text/javascript" src="http://use.typekit.net/hqj2vgo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript" ></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.maskedinput.min.js" ></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/marketo.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app-MM-landing-page.js"></script>

	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	
	<!-- Less CSS Integration -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style-e3rd.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js" ></script>

	
	
</head>

<body class="bkgd-white">	
	<div id="header-landing-page"> <!-- div#header-sm open -->
		<div class="content"> <!-- div.content open -->
			<div class="row padding-top-one padding-bottom-one">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/nav_logo_MokiMobility.svg" alt="MokiMobility Logo" border="0"></a>
			</div>
		</div> <!-- div.content close -->
	</div> <!-- div#header-sm close -->