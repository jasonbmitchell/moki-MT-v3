<?php
/*
Template Name: Mobility: Modals

*/
?>

<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.maskedinput.min.js" ></script>


<div id="lightbox"></div>
<!-- Get Started Form -->
<div id="get-started-form-MM">
<div class="modal-header">
	<h3 class="text-shadow-no">Get Started</h3>
	<div id="btn-close-form-MM">&nbsp;</div>
</div>
<div class="modal-content">
	<?php echo do_shortcode('[display_form]'); ?>
</div>
</div>
<?php
/*
<div id="signup_form" class="lights">
<div class="lights_content">
<div class="signup_header topLeftRadiusLarge topRightRadiusLarge">
<div class="white inline topalign_fix">Sign Up</div>
<div class="inline topalign right x_fix">
<img src="<?php bloginfo('template_url'); ?>/style/images/close_x.png" width="20">
</div>
</div>
<div class="signup_content bottomLeftRadiusLarge bottomRightRadiusLarge">
<form id="form8" name="form8" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://mokimobility.wufoo.com/forms/x7x1q9/#public">
<input class="light_font" type="text" name="Field1" placeholder="first name">
<input class="light_font" type="text" name="Field2" placeholder="last name">
<input class="light_font" type="text" name="Field3" placeholder="email">
<input class="light_font" type="text" name="Field7" placeholder="company">
<input class="light_font" type="text" name="Field5" placeholder="phone"> 
<select id="Field9" name="Field9" class="field select medium" tabindex="9" style="display:none">                       
<?php 
$product_interest = get_post_meta($post->ID, 'wufoo-product-interest', true);
if ($product_interest != "") {
?>
<option value="<?php echo $product_interest; ?>" selected="selected"></option>
</select>
<?php } else { ?>
<option value="MokiMobility" selected="selected"></option>
<?php } ?>  
</select>             
<input type="hidden" name="Field13" value="<?php echo(get_permalink()); ?>">
<input type="submit" class="hack-btn-get-started" value="">
<input type="hidden" id="idstamp" name="idstamp" value="1mgsUj57v3emSBrbN8yv/Iu8HX3NQJsp5NcwINeQl6g=" />
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

*/
?>
