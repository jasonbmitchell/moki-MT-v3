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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js" ></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/marketo.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app-MT.js"></script>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	
	<!-- Less CSS Integration -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style-e3rd.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js" ></script>
	
	<!-- Greensock Integration -->
	<script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/greensock/TweenMax.min.js"></script>
	<script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/greensock/TimelineMax.min.js"></script>
</head>

<body class="bkgd-white">	
	<?php get_template_part( 'modals', 'MT' ); ?>
	<div id="alert-navigation">
		<ul>
			<li id='btn-header-open'></li>
			<li id='btn-header-close'></li>
		</ul>
	</div>
	<div id="alert">
		<ul>
			<li>Get the complete guide to building tablet kiosks</li>
			<li><img src="<?php bloginfo('template_url'); ?>/images/MOKIMobility_NEWeb_prom-eBook.png" title="" class="inline"/></li>
			<li><a href="http://mokimobility.com/ebook-two/" class="callToAction" target="_blank">download now</a></li>
		</ul>
	</div>
		<div id="header-MT">
		<div class="content"> <!-- div.content open -->
			<div class="row">
				<div class="column3 span1">
					<ul id="navigation-top">
						<li><a href="https://mokimanage.appspot.com/" target="_blank">Login</a></li>
						<li><a class="btn-signup">Sign up</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="column1 padding-top-one">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/style/images/logo-web_MOKITouch.svg" height="22" alt="Moki Touch Logo" border="0"></a><br /><span class="type-size-small">iPad and Android Kiosk Solution</span>
				</div>
				<div class="column3">
					<ol id="navigation-MT">
						<li><a href="<?php echo home_url(); ?>/mokimanage/" class="topLeftRadius topRightRadius"><img src="<?php bloginfo('template_url'); ?>/images/mokimanage-logo.svg" alt="Moki Touch Logo" class="mokimanage-img" border="0"><br /><span class="type-size-small">iPad and Android tablet<br />management platform</span></a></li>
						<li><a href="<?php echo home_url(); ?>/customers/" class="topLeftRadius topRightRadius"><strong>Customers</strong></a></li>
						<li><a href="<?php echo home_url(); ?>/partners/" class="topLeftRadius topRightRadius"><strong>Partners</strong></a></li>
					</ol>
				</div>
			</div>
		</div> <!-- div.content close -->
	</div> <!-- div#header-lg close -->