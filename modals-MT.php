<?php
/*
Template Name: MT - Modals
*/
?>

<div id="lightbox"></div>
<!-- Get Started Form -->
<div id="get-started-form-MT">
	<div class="modal-header">
		<h3 class="text-shadow-no">Get Started</h3>
		<div class="btn-close">&nbsp;</div>
	</div>
	<div class="modal-content">
		<?php 
			echo do_shortcode('[MT_marketo_form label="Submit" instance="btn-getting-started" campaign="1014" download="/thank-you/"]');
		?>
	</div>
</div>