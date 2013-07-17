<?php
/*
Template Name: MM: Modals with Lead Generation
*/
?>

<div id="lightbox"></div>
<!-- Get Started Form -->
<div id="get-started-form-MM">
<div class="modal-header">
	<h3 class="text-shadow-no">Get Started</h3>
	<div id="btn-contact-close-MM">&nbsp;</div>
</div>
<div class="modal-content">
	<?php echo do_shortcode('[MM_get_started_form interest="Getting Started Modal" label="Submit" instance="btn-submit-form" width="18em" type="#fff" bkgd="#0089c9"]'); ?>
</div>
</div>
<!-- Lead Generation Form -->
<div id="lead-form-MM">
<div class="modal-header">
	<h3 class="text-shadow-no">Lead Generation</h3>
	<div id="btn-leadGen-close-MM">&nbsp;</div>
</div>
<div class="modal-content">
	<?php echo do_shortcode('[MM_lead_form title="Ray Elder" url="rayelder.com" instance="btn-leadGen-submit"]'); ?>
</div>
</div>