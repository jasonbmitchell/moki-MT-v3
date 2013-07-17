<?php
/*
Template Name: MokiTouch Partner

*/
?>


        <!DOCTYPE html>
<html>
    <head>
          <meta
                  name="viewport"
                  content="width=100%;
             initial-scale=1;
             maximum-scale=1;
             minimum-scale=1;
             user-scalable=no;"
                  />
        <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
        <title>MokiTouch: MokiTouch - Remotely managed iPad and Android kiosk</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/style.css"  type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript" ></script>
        <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
                 <script type="text/javascript">
                     var _gaq = _gaq || [];
                     _gaq.push(['_setAccount', 'UA-28330141-1']);
                     _gaq.push(['_trackPageview']);

                     (function() {
                         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                     })();

                 </script>
<!--        <script src="/js/mobility.js"></script>-->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/style/images/favicon.png">
        
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/macklocks.css" type="text/css" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>
    <script src="<?php bloginfo('template_url'); ?>/js/touch.js"></script>

    </head>
    <body>
        <div class="lightbox"></div>
        <div class="lights">
            <div class="lights_content">
                <div class="signup_header topLeftRadiusLarge topRightRadiusLarge">
                    <div class="white inline topalign_fix">Sign Up</div>
                    <div class="inline topalign right x_fix">
                        <img src="<?php bloginfo('template_url'); ?>/style/images/close_x.png" width="20">
                    </div>
                </div>
                <div class="signup_content bottomLeftRadiusLarge bottomRightRadiusLarge">
                    <form id="form8" name="form8" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="http://mokimobility.wufoo.com/forms/partner-offer-signup/">
                        <input type="hidden" name="idstamp" id="idstamp" value="FNlNPTUWotC8+cJX5UgP/yoLxY19PkFhybNAqJ56Xxw=" />
                        <input class="light_font" type="text" name="Field1" placeholder="first name">
                        <input class="light_font" type="text" name="Field2" placeholder="last name">
                        <input class="light_font" type="text" name="Field3" placeholder="email">
                        <input class="light_font" type="text" name="Field7" placeholder="company">
                        <input class="light_font" type="text" name="Field5" placeholder="phone">
                        <select id="Field9" name="Field9" class="field select medium" tabindex="9" style="display:none" > 
                            <option value="MokiTouch" selected="selected"></option>
                        </select>
						<select id="Field11" name="Field11" class="field select medium" tabindex="9" style="display:none" > 
                            <option value="<?php $values = get_post_custom_values("form_field_label"); echo $values[0]; ?>" selected="selected"></option>
                        </select>
                        <input type="submit" class="create_account" value="">
                        <input type="hidden" id="idstamp" name="idstamp" value="FTq0QioGnvlw0v51x7nq6v0p/gCegrYcjxmetFr78ao=" />
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header">
                <div class="content">
                    <div class="login bottomLeftRadius bottomRightRadius right">
                        
                    </div>
                    <div class="clear"></div>
                    <div class="nav">
                        <a href="../.."><div class="logo left"></div></a>
						 
                        
                            <div class="partner right">
                                <a href="<?php $values = get_post_custom_values("call_to_action_link"); echo $values[0]; ?>" target="_blank"><?php the_post_thumbnail(); ?><a/>
                            </div>
<!--                        </a>
                        <a href="/mokispace">
                            <div class="link topLeftRadius topRightRadius right">
                                <div class="space_link"></div>
                                <p>Custom Android <br /> tablet experience</p>
                            </div>
                        </a>-->
                        
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        



            <div class="body" style="overflow-x:hidden">
              
                <div class="outer">
                    <div class="block block_one shadow_bot">
                        <div id="taylor_player">
                            <span class="taylor_close">X</span>
                        </div>
                        <div class="taylor_dark"></div>
                        <div class="content" style="padding-top: 0 !important;">
                        <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail('page', 'secondary-image'); endif; ?>
                            <div class="touch_hero left inline topalign"></div>
                            <div class="hero_text inline topalign" style="margin-top: 50px;">
                                <div class="touch_logo light_font slider-ctas" style="padding-top: 69px; font-size: 20px; line-height: 30px; color:grey;">
                                    Engage your customers with focused </br>
                                    content in iPad and Android tablet kiosks
                                </div>
                                

				<div class="get_started_container signup white slider-ctas">
                                    <div class="get_started_button inline topalign topLeftRadius bottomLeftRadius">Get Started</div>
                                    <div class="get_started_arrow inline topalign topRightRadius bottomRightRadius"><div id='arrow_container'> </div></div>
                                </div>
								

                            </div>
							<div class="right">
								
								<div class="moki_touch_get_offer signup white slider-ctas" style="margin-top: 243px;">
                                    
					<a href="<?php $values = get_post_custom_values("call_to_action_link"); echo $values[0]; ?>">
					<div class="get_started_container signup white goto_sponsor_container">
                                    	    <div class="get_started_button inline topalign topLeftRadius bottomLeftRadius goto_sponsor"><?php $values = get_post_custom_values("call_to_action"); echo $values[0]; ?></div>
                                    	    <div class="get_started_arrow inline topalign topRightRadius bottomRightRadius goto_sponsor_arrow"><div id='arrow_container'> </div></div>
                                	</div>
					</a>

                                </div>
							</div>
                        </div>
                    </div>
                    <div class="block block_hidden shadow_bot">
                        <div id="player">
                            <span class="close">X</span>
                        </div>
                        <div class="dark"></div>
                        <div class="content">
                            <div class="touch_hero left inline topalign"></div>
                            <div class="hero_text inline topalign" style="padding-top: 95px;">
                                <div class="touch_logo light_font" style="padding-top: 62px; font-size: 20px; line-height: 30px; color:lightgrey">
                                    Engage your customers with focused </br>
                                    content in iPad and Android tablet kiosks
                                </div>
                                <div class="fanz_video inline">
                                    <div class="play_wrapper borderRadiusSmall inline topalign play_wrapper2">
                                        <div class="triangle-right">
                                        </div>
                                    </div>
                                    <div class="inline topalign midalign">
                                        <span class="hero_color bold" style="font-size: 9px;"'>WATCH VIDEO:</span><br/>
                                        <span class="hero_color light_font" style="font-size: 17px;">Fanzz Sports Apparel</span>
                                    </div>
                                </div>

                                <div class="moki_touch_get_started signup white">
                                    <div class="text inline topalign topLeftRadius bottomLeftRadius">Get Started</div>
                                    <div class="arrow inline topalign topRightRadius bottomRightRadius">></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  
                <div class="block block_two">
                    <div class="content">
                        <div class="benefits bottomLeftRadius bottomRightRadius">Benefits</div>
                        <div class="left_column">
                            <div class="large_text" style="line-height: 38px;">
                                Everything you need to safely <br />
                                and securely use tablet kiosks for <br />
                                engaging web content.
                            </div>
                            <div class="grid">
                                <div class="grid_1 one active" number="one">
                                    <div class="grid_number">1</div>
                                    <div class="grid_paragraph">
                                        <div class="grid_header">Remotely Managed</div>
                                        Manage all of your kiosks from your desktop. Whether you have 1 or 10,000, you can easily change the settings without touching the tablet
                                    </div>
                                </div>
                                <div class="grid_2 two" number="two">
                                    <div class="grid_number">2</div>
                                    <div class="grid_paragraph">
                                        <div class="grid_header">Safe & Secure</div>
                                        Keep your customers focused on your content & experience</br>
                                        - not browsing anywhere on the internet.
                                    </div>
                                </div>
                                <div class="grid_1 three" number="three">
                                    <div class="grid_number">3</div>
                                    <div class="grid_paragraph">
                                        <div class="grid_header">Rich & Engaging Content</div>
                                        Use any web-based or video content in your kiosk.
                                    </div>
                                </div>
                                <div class="grid_2 four" number="four">
                                    <div class="grid_number">4</div>

                                    <div class="grid_paragraph">
                                        <div class="grid_header">Highly-Customizable</div> 
                                    Display only the browser elements that fit your experience.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="storyboard inline topalign">
                            <div class="relative">
                                <div class="picture_pane one active absolute"></div>
                                <div class="picture_pane two  absolute"></div>
                                <div class="picture_pane three absolute"></div>
                                <div class="picture_pane four absolute"></div>
                            </div>
                            <div class="markers">
                                <div class="marker one active" number ="one"></div>
                                <div class="marker two" number ="two"></div>
                                <div class="marker three" number ="three"></div>
                                <div class="marker four" number ="four"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block_three shadow_both">
                    <div class="content">
                        <div class="test_drive bottomLeftRadiusLarge bottomRightRadiusLarge shadow_top">
                            <div class="block_header bold">Test Drive</div>
                            <div class="sub_header">MOKI Touch makes managing tablets easy. See if for yourself below.</div>
                        </div>
                        <div class="storyboard">
                            <div class="test_drive_hero"></div>
                        </div>
                        <div class="bottom_bar">
                            <div class="grid_1" style="position: absolute;font-size: 26pt;width: 320px;">
                                     Click features on the</br>
                                     right to see them in</br>
                                     action above:</br>
                            </div>
                            <div class="controls inline topalign" style="position: absolute; margin-left: 271px; width: 800px;">
                                <div class="buttons inline topalign">
                                    <ul>
                                        <li class="active" number="1">Address bar</li>
                                        <li number="2">Naigation buttons</li>
                                        <li number="3">Custom buttons</li>
                                        <li number="4">Clear Private Data</li>
                                        <li number="5">Print</li>
                                    </ul>
                                </div>
                                <div class="indicator inline topalign">
                                    <div id="slider"></div>
                                </div>
                                <div class="information inline topalign">
                                    <div class="pane 1">
                                        <p>Show the address bar for a traditional web browsing experience or hide it to keep your users focused only on your content</p>
                                        <img src="<?php bloginfo('template_url'); ?>/style/images/address_bar.png" />
                                    </div>
                                    <div class="pane 2">
                                        <p>Back, forward and home give your users the functions to navigate between all of your content. You can also hide the buttons if your content doesn?t need them.</p>
                                        <img src="<?php bloginfo('template_url'); ?>/style/images/navigation_buttons.png" />
                                    </div>
                                    <div class="pane 3">
                                        <p>Create up to 6 custom buttons along the bottom of the browser window to give users quick and easy access anywhere you decide</p>
                                        <img src="<?php bloginfo('template_url'); ?>/style/images/custom_buttons.png" />
                                    </div>
                                    <div class="pane 4">
                                        <p>Users wipe out all cookies and other private data with the tap of this button along the bottom of the kiosk. You can rename the button or hide it if it doesn?t apply to your kiosk.</p>
                                        <img src="<?php bloginfo('template_url'); ?>/style/images/private_data.png" />
                                    </div>
                                    <div class="pane 5">
                                        <p>Print any page to an AirPrint enabled printer. </p>
                                        <img src="<?php bloginfo('template_url'); ?>/style/images/print.png" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block_four">
                    <div class="content">
                        <div class="left_column inline topalign">
                            <div class="safe_header bold">
                                Safe. Secure.
                            </div>
                            <div class="safe"></div>
                        </div>
                        <div class="right_column inline topalign">
                            <div class="safe_subheader">
                                MokiTouch creates the most safe & secure way to use a tablet as a kiosk by giving you complete control over the browser, personal data and even the device.
                            </div>
                            <div class="grid_1 inline topalign">
                                <div class="grid_header">
                                    Only your content front-and-center
                                </div>
                                <div class="grid_paragraph">
                                    Completely disable Internet brows-<br />ing or limit it to just a handful of sites you want your customers to visit.
                                </div>
                            </div>
                            <div class="grid_2 inline topalign">
                                <div class="grid_header">
                                    Protect customers by clearing private data
                                </div>
                                <div class="grid_paragraph">
                                    MokiTouch will automatically wipe private login information between customers. As an added layer of protection, customers can also tap the "Clear Private Data" button.
                                </div>
                            </div>
                            <div class="grid_2 inline topalign">
                                <div class="grid_header">
                                    Lock the device
                                </div>
                                <div class="grid_paragraph">
                                    Only with MokiTouch can you create a true kiosk experience by disabling navigation and the home button and remoing default appli-<br />cations, keeping MokiTouch front and center.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block_five shadow_top">
                    <div class="content">
                        <div class="left">
                            <div class="powered"></div>
                        </div>
                        <div class="right">
                            <div class="moki_powered white">Powered by</div>
                            <img src="<?php bloginfo('template_url'); ?>/style/images/mokimanage_touchpage.png" />
                            <div class="moki_description bold white">The real strength of MokiTouch comes from the MokiManage platform, giving you complete control over the device, apps and even app settings.</div>
                            <a href="https:/.com/mokimanage" target="_blank"><div class="learn_more bold white"> LEARN MORE > </div></a>
                            <div class="moki_shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            
<?php get_footer(); ?>            