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
	<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.maskedinput.min.js" ></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/marketo.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app-MM.js"></script>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	
	<!-- Less CSS Integration -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style-e3rd.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js" ></script>
	
	<!-- Greensock Integration -->
	<script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/greensock/TweenMax.min.js"></script>
	<script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/greensock/TimelineMax.min.js"></script>
	
</head>

<body class="bkgd-white">	
	<?php get_template_part( 'modalsLeadGen', 'MM' ); ?>
	<div id="header-lg"> <!-- div#header-lg open -->
		<div class="content"> <!-- div.content open -->
			<div class="row">
				<div class="column3 span1">
				<div id="navigation-top">
					<div class="login-left bottomLeftRadius"><a href="https://www.mokimanage.com/start" target="_blank">Enroll a Device</a></div>
					<div class="login-middle"><a href="https://mokimanage.appspot.com/" target="_blank">Login</a></div>
					<div class="login-right bottomRightRadius"><a id="signup">Sign up</a></div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="column1">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/nav_logo_MokiMobility.svg" alt="MokiMobility Logo" border="0"></a>
				</div>
				<div class="column3">
					<ol id="navigation-mokimobility">
						<li><a href="/mokimanage/" class="topLeftRadius topRightRadius"><img src="<?php bloginfo('template_url'); ?>/images/nav_logo_MokiManage.svg" alt="MokiManage Logo" border="0"><br /><span class="type-size-small">Mobile Solutions<br />Management &amp; Monitoring</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>mpos/" class="topLeftRadius topRightRadius"><strong>Mobile POS</strong><br /><span class="type-size-small">Secure mPOS<br />management</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>fleet/" class="topLeftRadius topRightRadius"><strong>Fleet<br />Management</strong></a></li>
						<li><a href="<?php echo home_url('/'); ?>developers/" class="topLeftRadius topRightRadius"><strong>Developers</strong></a></li>
						<li><a href="<?php echo home_url('/'); ?>solution-center/" class="topLeftRadius topRightRadius"><strong>Solution<br />Center</strong></a></li>
					</ol>
				</div>
			</div>
		</div> <!-- div.content close -->
	</div> <!-- div#header-lg close -->