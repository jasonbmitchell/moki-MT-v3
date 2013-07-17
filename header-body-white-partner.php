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
	<!-- <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script> -->
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/marketo.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
	<!-- <script src="<?php bloginfo('template_url'); ?>/js/touch.js"></script> -->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	
	<!-- Less CSS Integration -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style-e3rd.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js" ></script>
	
	<!-- Greensock Integration -->
	<script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/greensock/TweenMax.min.js"></script>
	<script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/greensock/TimelineMax.min.js"></script>
	
</head>

<body class="bkgd-white">	

<div class="lightbox"></div>

	<div id="signup_form" class="lights">
            <div class="lights_content">
                <div class="signup_header topLeftRadiusLarge topRightRadiusLarge">
                    <div class="white inline topalign_fix">Sign Up</div>
                    <div class="inline topalign right x_fix">
                        <img src="<?php bloginfo('template_url'); ?>/style/images/close_x.png" width="20">
                    </div>
                </div>
                <div class="signup_content bottomLeftRadiusLarge bottomRightRadiusLarge">
                    <form id="form8" name="form8" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="http://mokimobility.wufoo.com/forms/mokitouchcom-signups/">
                        <input type="hidden" name="idstamp" id="idstamp" value="Q29PlyoDdtGctidzGtybak4DxEzyKEcP+G4eaI7zzM4=">
                        <input class="light_font" type="text" name="Field1" placeholder="first name">
                        <input class="light_font" type="text" name="Field2" placeholder="last name">
                        <input class="light_font" type="text" name="Field3" placeholder="email">
                        <input class="light_font" type="text" name="Field7" placeholder="company">
                        <input class="light_font" type="text" name="Field5" placeholder="phone">
                        <select id="Field13" name="Field13" class="field select medium" tabindex="9" style="display:none"> 
                            <option value="MokiTouch" selected="selected"></option>
                        </select>
                        <input type="submit" class="create_account" value="">
                        <input type="hidden" id="idstamp" name="idstamp" value="Q29PlyoDdtGctidzGtybak4DxEzyKEcP+G4eaI7zzM4=">
                    </form>
                </div>
            </div>
        </div>

<div id="contact_form" class="lights_nofade">
  <div class="lights_content">
      <div class="signup_header topLeftRadiusLarge topRightRadiusLarge">
          <div id="form_identifier" class="white inline topalign">MokiManage Custom Pricing</div>
          <div class="inline topalign right x_fix">
              <img src="<?php bloginfo('template_url'); ?>/style/images/close_x.png" width="20">
          </div>
      </div>
      <div class="signup_content bottomLeftRadiusLarge bottomRightRadiusLarge">
          <form id="form9" name="form9" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="http://mokimobility.wufoo.com/forms/mokitouchcom-signups/">
              <input type="hidden" name="idstamp" id="idstamp" value="1mgsUj57v3emSBrbN8yv/Iu8HX3NQJsp5NcwINeQl6g=">
              <input class="light_font" type="text" name="Field1" placeholder="first name">
              <input class="light_font" type="text" name="Field2" placeholder="last name">
              <input class="light_font" type="text" name="Field3" placeholder="email">
              <input class="light_font" type="text" name="Field7" placeholder="company">
              <input class="light_font" type="text" name="Field5" placeholder="phone"><br>
              <textarea class="light_font" type="text" name="Field5" placeholder="Describe your plan needs here..."></textarea>
              <select id="Field9" name="Field9" class="field select medium" tabindex="9" style="display:none"> 
                  <option id="contact_option" value="MokiManage Custom Pricing" selected="selected"></option>
              </select>
              <div id="btn-buy-plan-submit" class="get_started_container signup white inline submit_contact">
                  <div class="get_started_button inline topalign topLeftRadius bottomLeftRadius submit_contact">Submit</div>
                  <div class="get_started_arrow inline topalign topRightRadius bottomRightRadius submit_contact"><div id="arrow_container"> </div></div>
              </div>
              <input type="hidden" id="idstamp" name="idstamp" value="1mgsUj57v3emSBrbN8yv/Iu8HX3NQJsp5NcwINeQl6g=">
          </form>
      </div>
  </div>
</div>

	<div id="header-lg"> <!-- div#header-lg open -->
		<div class="content"> <!-- div.content open -->
			<div class="row padding-top-three">
				<div class="column1 padding-top-one">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/style/images/logo-web_MOKITouch.svg" height="22" alt="Moki Touch Logo" border="0"></a><br /><span class="type-size-small">iPad and Android Kiosk Solution</span>
				</div>
				<div class="column1-eof span2 padding-top-one text-align-right">
					<a href="<?php echo get_post_meta($post->ID, 'partner-url', true); ?>" target="_blank"><?php the_post_thumbnail('full'); ?></a>
				</div>
			</div>
		</div> <!-- div.content close -->
	</div> <!-- div#header-lg close -->