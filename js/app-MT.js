$("document").ready(function() {

	//alert("HI");

// Footer News
function getTheNews() {

	$.ajax({
		url: 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent('http://blog.mokimobility.com/feed'),
		dataType: 'json',
		success: function(data) {
		
			// Append posts to DOM
			if(data) {
			
				var posts = data.responseData.feed.entries;
	
	$(posts).each(function(index, post){
		var div = $('<div class="post"></div>')
		var title = $('<span class="title mokiBlue"></span>')
		var snippet = $('<p></p>')
		var link = $('<a class="mokiBlue" target="_blank">Read More</a>')
		link.clone().attr('href', post.link).html(post.title).appendTo(title);
		snippet.html(post.contentSnippet);
		link.attr('href', post.link);
		title.appendTo(div);
		snippet.appendTo(div);
		link.appendTo(div);
		div.appendTo('.posts');
	});
	feedTheNews();
	var interval = setInterval(feedTheNews, 10000);
			}
		}   
	});
}

function feedTheNews(){
    if($('.activeStory').length == 0){
        var post = $('.post')[0]
        $(post).fadeIn();
        $(post).addClass('activeStory')
    }else if($('.activeStory').next().length == 0){
        //We're at the last story, time to goto the first
        $('.activeStory').fadeOut().removeClass('activeStory');
        $($('.post')[0]).fadeIn().addClass('activeStory');
    } else {
        $('.activeStory').fadeOut().removeClass('activeStory').next().addClass('activeStory').fadeIn();       
    }
}

getTheNews();


/* Marketo Forms - START */

// getting started form
$('.btn-getting-started').click(function() {
	$('#marketo-MT').validate({
		submitHandler: function(form) {
			$('#marketo-MT').attr("action", "http://pages.mokimobility.com/index.php/leadCapture/save");
			form.submit();
		},
		
		rules: {
			FirstName: "required",
			LastName: "required",	
			Company: "required",
			Email: {
				required: true,
				email: true
			},
			Phone: {
				required: true,
				digits: true
			}		
		}
	});
});

// getting started form
$('.btn-inline-form').click(function() {
	$('#marketo-inline-MT').validate({
		submitHandler: function(form) {
			$('#marketo-inline-MT').attr("action", "http://pages.mokimobility.com/index.php/leadCapture/save");
			form.submit();
		},
		
		rules: {
			FirstName: "required",
			LastName: "required",	
			Company: "required",
			Email: {
				required: true,
				email: true
			},
			Phone: {
				required: true,
				digits: true
			}		
		}
	});
});

// contact form
$('.btn-contact').click(function() {
	$('#marketo-contact-MT').validate({
		submitHandler: function(form) {
			$('#marketo-contact-MT').attr("action", "http://pages.mokimobility.com/index.php/leadCapture/save");
			form.submit();
		},
		
		rules: {
			FirstName: "required",
			LastName: "required",	
			Company: "required",
			Email: {
				required: true,
				email: true
			},
			Phone: {
				required: true,
				digits: true
			}		
		}
	});
});

/* Marketo Forms - END */

	
/*
function hideAllSlides() {
	TweenMax.to($("#slide0"), 0, {autoAlpha:0});
	TweenMax.to($("#slide1"), 0, {autoAlpha:0});
	TweenMax.to($("#slide2"), 0, {autoAlpha:0});
	TweenMax.to($("#slide3"), 0, {autoAlpha:0});
	TweenMax.to($("#slide4"), 0, {autoAlpha:0}); 
}

function displayTooltip(tAlpha, tSpeed) {
  var tooltip = $("#sc-header-tooltip");
  var arrow = $("#sc-header-downArrow");
  TweenMax.to(tooltip, tSpeed, {autoAlpha: tAlpha});
	TweenMax.to(arrow, tSpeed, {autoAlpha: tAlpha});
}

function setTooltip(lbl, pos) {
  var tooltipSpan = $("#sc-header-tooltip-span");
	var arrow = $("#sc-header-downArrow");
	arrow.removeClass().addClass(pos);
	tooltipSpan.text(lbl);
}

	// getting started form
	$(".btn-submit-form").click(function() {
		//$("#Field5").mask("(999) 999-9999");
		var pathname = window.location.pathname;
		$("#getting-started-MM #Field13").val(pathname);
		$('#getting-started-MM').validate({
			submitHandler: function(form) {
				$('#getting-started-MM').attr("action", "https://mokimobility.wufoo.com/forms/x7x1q9/#public");
				form.submit();
			},
			
			rules: {
				Field1: "required",
				Field2: "required",
				Field3: {
					required: true,
					email: true
				},
				Field5: {
					required: true,
					digits: true
				},
				Field7: "required"			
			}
		});
	});
	
	// 
	
	$(".btn-submit-form-MT").click(function() {
		//$("#Field5").mask("(999) 999-9999");
		var pathname = window.location.pathname;
		$("#getting-started-MT #Field13").val(pathname);
		$('#getting-started-MT').validate({
			submitHandler: function(form) {
				$('#getting-started-MT').attr("action", "https://mokimobility.wufoo.com/forms/m7p5m7/#public");
				form.submit();
			},
			
			rules: {
				Field1: "required",
				Field2: "required",
				Field3: {
					required: true,
					email: true
				},
				Field5: {
					required: true,
					digits: true
				},
				Field7: "required"			
			}
		});
	});
	
	// contact form validation
	$(".btn-contact-form").click(function() {
		$('#contact-MT').validate({
			submitHandler: function(form) {
				$('#contact-MT').attr("action", "https://mokimobility.wufoo.com/forms/m7p4k1/#public");
				form.submit();
			},
			
			rules: {
				Field1: "required",
				Field2: "required",
				Field3: {
					required: true,
					email: true
				},
				Field5: {
					required: true,
					digits: true
				},
				Field7: "required"			
			}
		});
	});
	
	// lead form validation
	$(".btn-leadGen-submit").click(function() {
		//$("#Field5").mask("(999) 999-9999");
		var pathname = window.location.pathname;
		$("#lead-MM #Field13").val(pathname);

		$('#lead-MM').validate({
			submitHandler: function(form) {
				$.cookie('MM_asset_download', true, { expires: 1, path: '/' });
				$('#lead-MM').attr("action", "https://mokimobility.wufoo.com/forms/m7p5w3/#public");
				form.submit();
			},
			
			rules: {
				Field1: "required",
				Field2: "required",
				Field3: {
					required: true,
					email: true
				},
				Field5: {
					required: true,
					digits: true
				},
				Field7: "required"			
			}
		});
	});
	
	var s0 = $("#slide0");
  var s1 = $("#slide1");
  var s2 = $("#slide2");
  var s3 = $("#slide3");
  var s4 = $("#slide4");
  
  var tooltip = $("#sc-header-tooltip");
  var arrow = $("#sc-header-downArrow");
  
  var slideTransition = 1;
  var slideDelay = 3;
	
	var cycleTimeline = new TimelineMax({repeat: -1});	
	cycleTimeline.to([s0, tooltip, arrow], slideTransition, {autoAlpha:1});
	cycleTimeline.to([s0, tooltip, arrow], slideTransition, {delay: slideDelay, autoAlpha:0, onComplete: setTooltip, onCompleteParams:["MokiTouch","sc-header-downArrow-p2"]});
	cycleTimeline.to([s1, tooltip, arrow], slideTransition, {autoAlpha:1});
	cycleTimeline.to([s1, tooltip, arrow], slideTransition, {delay: slideDelay, autoAlpha:0, onComplete: setTooltip, onCompleteParams:["Noshist","sc-header-downArrow-p3"]});
	cycleTimeline.to([s2, tooltip, arrow], slideTransition, {autoAlpha:1});
	cycleTimeline.to([s2, tooltip, arrow], slideTransition, {delay: slideDelay, autoAlpha:0, onComplete: setTooltip, onCompleteParams:["Archelon","sc-header-downArrow-p4"]});
	cycleTimeline.to([s3, tooltip, arrow], slideTransition, {autoAlpha:1});
	cycleTimeline.to([s3, tooltip, arrow], slideTransition, {delay: slideDelay, autoAlpha:0, onComplete: setTooltip, onCompleteParams:["Square","sc-header-downArrow-p5"]});
	cycleTimeline.to([s4, tooltip, arrow], slideTransition, {autoAlpha:1});
	cycleTimeline.to([s4, tooltip, arrow], slideTransition, {delay: slideDelay, autoAlpha:0, onComplete: setTooltip, onCompleteParams:["Revel Systems","sc-header-downArrow-p1"]});
	
	$('#btn-revel').mouseover(function (evt) {
		cycleTimeline.pause();
		setTooltip("Revel Systems","sc-header-downArrow-p1");
		displayTooltip(1, 1);
	});
	
	$('#btn-revel').click(function (evt) {
		hideAllSlides();
		TweenMax.to($("#slide0"), 0, {autoAlpha:1});
	});
	
	$('#btn-revel').mouseout(function (evt) {
		displayTooltip(0, 0.5);
	});
	
	$('#btn-mokitouch').mouseover(function (evt) {
		cycleTimeline.pause();
		setTooltip("MokiTouch","sc-header-downArrow-p2");
		displayTooltip(1, 1);
	});
	
	$('#btn-mokitouch').click(function (evt) {
		hideAllSlides();
		TweenMax.to($("#slide1"), 0, {autoAlpha:1});
	});
	
	$('#btn-mokitouch').mouseout(function (evt) {
		displayTooltip(0, 0.5);
	});
	
	$('#btn-noshlist').mouseover(function (evt) {
	cycleTimeline.pause();
		setTooltip("Noshist","sc-header-downArrow-p3");
		displayTooltip(1, 1);
	});
	
	$('#btn-noshlist').click(function (evt) {
		hideAllSlides();
		TweenMax.to($("#slide2"), 0, {autoAlpha:1});
	});
	
	$('#btn-noshlist').mouseout(function (evt) {
		displayTooltip(0, 0.5);
	});
	
	$('#btn-archelon').mouseover(function (evt) {
		cycleTimeline.pause();
		setTooltip("Archelon","sc-header-downArrow-p4");
		displayTooltip(1, 1);
	});
	
	$('#btn-archelon').click(function (evt) {
		hideAllSlides();
		TweenMax.to($("#slide3"), 0, {autoAlpha:1});
	});
	
	$('#btn-archelon').mouseout(function (evt) {
		displayTooltip(0, 0.5);
	});
	
	$('#btn-square').mouseover(function (evt) {
		cycleTimeline.pause();
		setTooltip("Square","sc-header-downArrow-p5");
		displayTooltip(1, 1);
	});
	
	$('#btn-square').click(function (evt) {
		hideAllSlides();
		TweenMax.to($("#slide4"), 0, {autoAlpha:1});
	});
	
	$('#btn-square').mouseout(function (evt) {
		displayTooltip(0, 0.5);
	});
	
	
	
	$('.btn-arrow-gs').click(function () {
		$('.lightbox').fadeIn();
		$('#signup_form').fadeIn();
	});
	
	$('.btn-gs').click(function () {
		$('.lightbox').fadeIn();
		$('#signup_form').fadeIn();
	});
	
	$('.btn-arrow-gray-gs').click(function () {
		$('.lightbox').fadeIn();
		$('#signup_form').fadeIn();
	});	
	
	$('.btn-gray-gs').click(function () {
		$('.lightbox').fadeIn();
		$('#signup_form').fadeIn();
	});
	
	$('.btn-contact').click(function () {
		$('.lightbox').fadeIn();
		$('#contact_form').fadeIn();
	});	
	
	$('.btn-buy').click(function () {
		$('.lightbox').fadeIn();
		$('#signup_form').fadeIn();
	});
	
	$('.btn-specialist').click(function (evt) {
		$('.lightbox').fadeIn();
		$('#signup_form').fadeIn();
	});	
	
	*/
	
	// click to open contact form modal
	$('.btn-get-started, .btn-buy, .btn-blue, #signup').click(function () {
		$('#lightbox').fadeIn();
		$('#get-started-form-MT').fadeIn();
	});
	
	// click to close contact form modal
	$('#lightbox, .btn-close').click(function () {
		$('#lightbox').fadeOut();
		$('#get-started-form-MT').fadeOut();
	});
	
	/*

	// Lead Generation Form 
	
	// click to open modal
	$('#btn-leadGen').click(function () {
		
		var cValue = $.cookie("MM_asset_download");
		
		if (cValue == undefined)  {
			$('#lightbox').fadeIn();
			$('#lead-form-MM').fadeIn();
		} else {
			window.location.href = "http://rayelder.com";
		}
	});
	
	// click to close modal
	$('#lightbox, #btn-leadGen-close-MM').click(function () {
		$('#lightbox').fadeOut();
		$('#lead-form-MM').fadeOut();
	});
	
	*/
	
	$('.btn-mokitouch').click(function () {
		//alert("Buy Plan");
		window.location = "http://mokitouch.com";
	});	
	
	$('.btn-sdk').click(function () {
		//alert("Buy Plan");
		window.location = "/developers/";
	});	
	
	$('.btn-turnkey').click(function () {
		//alert("Buy Plan");
		window.location = "http://mokitouch.com/turnkey-services/";
	});
	
	$('.btn-mokimanage').click(function () {
		//alert("Buy Plan");
		window.location = "/mokimanage/";
	});	
	
	$('.button_block').click(function (evt) {
      switchPane(evt);
      //alert("CLICK");
  });
	
	// Pricing Page
	
	var container = $("#wp-content-wrapper-lg");
	var btnAnnually = $("#btn-annually");
	var btnMonthly = $("#btn-monthly");
	
	btnAnnually.click(function() {
			
		btnAnnually.addClass("selected");
		btnMonthly.removeClass("selected");
	
		var priceTagsAnnually = $(".price-annually");
		var priceTagsMonthly = $(".price-monthly");
		
		$(priceTagsAnnually).each(function(index, element) {
        $(element).removeClass("price-hidden");
    });
    
    $(priceTagsMonthly).each(function(index, element) {
        $(element).addClass("price-hidden");
    });
    
	});
	
	btnMonthly.click(function() {
		
		btnAnnually.removeClass("selected");
		btnMonthly.addClass("selected");
	
		var priceTagsAnnually = $(".price-annually");
		var priceTagsMonthly = $(".price-monthly");
		
		$(priceTagsAnnually).each(function(index, element) {
        $(element).addClass("price-hidden");
    });
    
    $(priceTagsMonthly).each(function(index, element) {
        $(element).removeClass("price-hidden");
    });
		
	});
	
	/*
	// client logo animation for homepage
	
	var logo0 = $("#logo-united");
  var logo1 = $("#logo-uniquest");
  var logo2 = $("#logo-nycHealth");
  var logo3 = $("#logo-choiceHotels");
  var logo4 = $("#logo-choiceHotels2");
  
  var logoTransition = 0.75;
  var logoDelay = 0.5;
  
  TweenMax.staggerTo([logo0, logo1, logo2, logo3, logo4], logoTransition, {delay: 1, autoAlpha:1, x: "-8px", ease:Cubic.easeOut}, 0.5);
  
  */

// header animation and interactivity
	//var alertHeight = $("#alert").height();
	//var targetOpen = 0;
	//var targetClosed = alertHeight * -1;
	var cookieAlert = $.cookie("MT_alert");

	TweenMax.to($("#btn-header-open"), 0, {autoAlpha: 0, css:{top: "-56px"}, ease:Bounce.easeOut});
	TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 1, css:{top: "0px"}, ease:Bounce.easeOut});

	if (cookieAlert == undefined)  {
		TweenMax.to($("#alert"), 0, {css:{top: "-56px"}, ease:Bounce.easeOut});
		TweenMax.to($("#header-MT"), 0, {css:{top: "0px"}, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 0, css:{top: "-56px"}, ease:Bounce.easeOut});
		TweenMax.to($("#alert"), 0.25, {delay: 2, css:{top: "0px"}, ease:Bounce.easeOut});
		TweenMax.to($("#header-MT, #content-MT, #footer-MT"), 0.25, {delay: 2, css:{top: "56px"}, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0.25, {delay: 2, autoAlpha: 1, css:{top: "0px"}, ease:Bounce.easeOut});
		$.cookie("MT_alert", "show", { expires: 7, path: '/'});
	} else {
		if (cookieAlert == "hide")  {
			TweenMax.to($("#alert"), 0, {css:{top: "-56px"}, ease:Bounce.easeOut});
			TweenMax.to($("#header-MT"), 0, {css:{top: "0px"}, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-open"), 0, {autoAlpha: 1, css:{top: "0px"}, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 0, css:{top: "-56px"}, ease:Bounce.easeOut});
		} else {
			TweenMax.to($("#alert"), 0, {css:{top: "0px"}, ease:Bounce.easeOut});
			TweenMax.to($("#header-MT, #content-MT, #footer-MT"), 0, {css:{top: "56px"}, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-open"), 0, {autoAlpha: 0, css:{top: "-56px"}, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 0, css:{top: "0px"}, ease:Bounce.easeOut});
		}
	}

	$('#btn-header-open').click(function() {
		TweenMax.to($("#alert"), 0.25, {css:{top: "0px"}, ease:Bounce.easeOut});
		TweenMax.to($("#header-MT, #content-MT, #footer-MT"), 0.25, {css:{top: "56px"}, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-open"), 0.25, {autoAlpha: 0, css:{top: "-56px"}, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0.25, {autoAlpha: 1, css:{top: "0px"}, ease:Bounce.easeOut});
		$.cookie("MT_alert", "show", { expires: 7, path: '/'});
	});

	$('#btn-header-close').click(function() {
		TweenMax.to($("#alert"), 0.25, {css:{top: "-56px"}, ease:Bounce.easeOut});
		TweenMax.to($("#header-MT, #content-MT, #footer-MT"), 0.25, {css:{top: "0px"}, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-open"), 0.25, {autoAlpha: 1, css:{top: "0px"}, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0.25, {autoAlpha: 0, css:{top: "-56px"}, ease:Bounce.easeOut});
		$.cookie("MT_alert", "hide", { expires: 7, path: '/'});
	});

	
});