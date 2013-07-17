<?php
/*
Template Name: Event Landing Page
*/
?>

<?php get_header('event'); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/touch_page.css" type="text/css" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>
<script src="<?php bloginfo('template_url'); ?>/js/touch.js"></script>

<div class="body" style="overflow-x:hidden; padding-top:80px; background-color:white;">
<div class="outer" style="height:580px;">
    <div class="you_did_what">
        <div class="content_container">
            <div class="event_content">
                <div class="left_text_box inline">
                    We've seen some wacky ways<br />
                    to lock the home button and<br />
                    create a tablet kiosk.<br /><br />
                    Seriously wacky.
                </div>
                <div class="right_text_box inline">
                    Only with MokiTouch can you<br />
                    create a reliable, secure, and<br />
                    remotely managed tablet kiosk.<br /><br />
                    So please - keep the gum.
                </div>
                <div class="get_started_container signup white event_button" style="margin-top:25px;">
                    <div class="get_started_button inline topalign topLeftRadius bottomLeftRadius">Get Started</div>
                    <div class="get_started_arrow inline topalign topRightRadius bottomRightRadius"><div id='arrow_container'> </div></div>
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
                <div class="grid_1 one active grid_section" number="one">
                    <div class="grid_number">1</div>
                    <div class="grid_paragraph">
                        <div class="grid_header">Remotely Managed</div>
                        Manage all of your kiosks from your desktop. Whether you have 1 or 10,000, you can easily change the settings without touching the tablet
                    </div>
                </div>
                <div class="grid_2 two grid_section" number="two">
                    <div class="grid_number">2</div>
                    <div class="grid_paragraph">
                        <div class="grid_header">Safe & Secure</div>
                        Keep your customers focused on your content & experience</br>
                        - not browsing freely on the internet.
                    </div>
                </div>
                <div class="grid_1 three grid_section" number="three">
                    <div class="grid_number">3</div>
                    <div class="grid_paragraph">
                        <div class="grid_header">Rich & Engaging Content</div>
                        Use any web-based or video content in your kiosk.
                    </div>
                </div>
                <div class="grid_2 four grid_section" number="four">
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
            <div class="sub_header">MOKI Touch makes managing tablets easy. See it for yourself below.</div>
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
                        <li number="2">Navigation buttons</li>
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
                        <p>Back, forward and home give your users the functions to navigate between all of your content. You can also hide the buttons if your content doesn’t need them.</p>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/navigation_buttons.png" />
                    </div>
                    <div class="pane 3">
                        <p>Create up to 6 custom buttons along the bottom of the browser window to give users quick and easy access anywhere you decide</p>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/custom_buttons.png" />
                    </div>
                    <div class="pane 4">
                        <p>Users wipe out all cookies and other private data with the tap of this button along the bottom of the kiosk. You can rename the button or hide it if it doesn’t apply to your kiosk.</p>
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
                    Only with MokiTouch can you create a true kiosk experience by disabling navigation and the home button and removing default appli-<br />cations, keeping MokiTouch front and center.
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