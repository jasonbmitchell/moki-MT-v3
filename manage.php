<?php
/*
Template Name: MokiManage Home
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/manage.css" type="text/css" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>
    <script src="<?php bloginfo('template_url'); ?>/js/manage.js"></script>

    
            <body>
       


            <div class="body">
                
<!--                Block 1-->
                
                <div class="block block_one shadow_both">
                    <div class="content">
                        <div class="left">
                            <div class="powered"></div>
                        </div>
                        <div class="right">
                            <div class="moki_description bold white" style="font-size: 24px;">
                                <p>Powered by</p>
                            </div>
                            <div class="moki_manage_logo"></div>
                            <div class="moki_description bold white">
                                <p>
                                    MokiManage is a platform for managing
                                    mobile devices and applications, unlocking
                                    the ability to use them in new ways.
                                </p>
                            </div>
                            <div class="moki_touch_get_started signup white">
                                <div class="text inline topalign topLeftRadius bottomLeftRadius">Get Started</div>
                                <div class="arrow inline topalign topRightRadius bottomRightRadius">></div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!--                Block 2-->

                <div class="block block_two">
                    <div class="content">
                        <div class="left">
                            <div class="enclosures"></div>
                        </div>
                        <div class="right">
                            <h2>It's about the apps + device</h2>
                            <p>
                                There are many vendors out there that manage the device.
                                But MokiManage is more than just deice management, it's
                                management for the complete experience. In order to create
                                a truly remarkable experience, you need to manage the
                                complete stack, including the apps and the device itself.
                            </p>
                        </div>
                    </div>
                </div>
   

<!--block 3-->
            <div class="block block_three">
                <div class="blue_band shadow_top">
                    <div class="small_content">
                        <div name="device_manage" class="button_block inline active">
                            <span class="big white">Device</span><br />
                            <span class="small">Management</span>
                        </div>
                        <div name="app_dist" class="button_block inline">
                            <span class="big white">App</span><br />
                            <span class="small">Distribution</span>
                        </div>
                        <div name="app_manage" class="button_block inline">
                            <span class="big white">App</span><br />
                            <span class="small">Management</span>
                        </div>
                    </div>
                </div>
                <div class="bottom_block_strip shadow_bot">
                    <div class="content">
                        <div class="pointer device_manage"></div>
                        <div class="container relative">
                            <div class="pane device_manage absolute">
                                <p>
                                    Device Management gives you control to remotely manage the device
                                    itself. Apply policies such as wifi, VPN, email, passcode and more.
                                    Create an inventory of all of your devices with vital information
                                    about each.
                                </p>
                            </div>
                            <div class="pane app_dist absolute opaque">
                                <p>
                                    App Distribution solves one of the biggest mobile
                                    challenges...gettings apps on the device. Whether the apps are
                                    publicly available on app stores (Apple App Store, Google Play, etc)
                                    or private apps you can quickly and easily distribute the app to your
                                    devices. Apps can be pushed to devices centrally from MokiManage or
                                    directly from the device itself using MokiStore.
                                </p>
                            </div>
                            <div class="pane app_manage absolute opaque">
                                <p>
                                    App Management gives you complete access and control to the app
                                    itself. Remotely update application specific settings, monitor app
                                    uptime and even limit when and how an app can run. App Management
                                    gives you more granular control over an app without building all the
                                    serverside complexity.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<!--Block 4-->

            <div class="block block_four">
                <div class="content">
                    
                    <div class="inline topalign block_text">
                        <h2>No servers required</h2>
                        <p>
                            MokiMobility is a cloud-based service, no need for servers of </br>
                            your own. This means better uptime, more frequent </br>
                            upgrades and instant scalability. No need to throw more </br>
                            servers online as you ramp up the number of devices under </br>
                            management.
                        </p>
                    </div>
                    <div class="cloud inline topalign"></div>
                    <div class="clear"></div>
                </div>
            </div>

<!--Block 5-->

            <div class="block block_five shadow_both">
                <div class="content">
                    <div class="webhooks inline topalign"></div>
                    <div class="inline topalign block_text">
                        <h2>Integrate it</h2>
                        <p>
                            Are you building solutions for smartphones and tablets? You </br>
                            can easily integrate MokiManage into your solution to provide </br>
                            a more secure, and remotely managed experience. </br>
                            Contact us for more details.
                        </p>
                    </div>
                </div>
            </div>





<?php get_footer(); ?>