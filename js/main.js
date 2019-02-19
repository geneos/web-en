(function($) {
	"use strict"

	///////////////////////////
	// Preloader
	$(window).on('load', function() {
		$("#preloader").delay(600).fadeOut();
	});

	///////////////////////////
	// Scrollspy
	$('body').scrollspy({
		target: '#nav',
		offset: $(window).height() / 2
	});

	///////////////////////////
	// Smooth scroll
	$("#nav .main-nav a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(this.hash).offset().top-70
		}, 600);
	});

	$('#back-to-top').on('click', function(){
		$('body,html').animate({
			scrollTop: 0
		}, 600);
	});

	///////////////////////////
	// Btn nav collapse
	$('#nav .nav-collapse').on('click', function() {
		$('#nav').toggleClass('open');
	});

	///////////////////////////
	// Mobile dropdown
	$('.has-dropdown a').on('click', function() {
		$(this).parent().toggleClass('open-drop');
	});

	///////////////////////////
	// On Scroll
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();

		// Fixed nav
		wScroll > 1 ? $('#nav').addClass('fixed-nav') : $('#nav').removeClass('fixed-nav');

		// Back To Top Appear
		wScroll > 700 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();

		// Section on color
		wScroll > 1914 ? $('#back-to-top').addClass('green') : $('#back-to-top').removeClass('green');
	});

	///////////////////////////
	// magnificPopup
	$('.work').magnificPopup({
		delegate: '.lightbox',
		type: 'image'
	});

	$('.member-card').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'inline',
	  closeBtnInside:true
	  // other options
	});

	///////////////////////////
	// Owl Carousel
	/*$('#about-slider').owlCarousel({
		items:1,
		loop:true,
		margin:15,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		dots : true,
		autoplay : true,
		animateOut: 'fadeOut'
	});*/

	$('#testimonial-slider').owlCarousel({
		loop:true,
		margin:15,
		dots : false,
		nav: false,
		autoplay : true,
		singleItem:true,
		items:3,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		dots : true,
		// responsive:{
		// 	0: {
		// 		items:1
		// 	},
		// 	992:{
		// 		items:2
		// 	}
		// }
	});

	$('#about-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '#about-slider'
	});
	$('#about-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		asNavFor: '#about-slider-for',
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
	});

	var platformFiltered = false;

	$('.js-filter').on('click', function(e){
		console.log(e.target)
	  if (platformFiltered === false) {
	    $('.filtering').slick('slickFilter',':even');
	    $(this).text('Unfilter Slides');
	    platformFiltered = true;
	  } else {
	    $('.filtering').slick('slickUnfilter');
	    $(this).text('Filter Slides');
	    platformFiltered = false;
	  }
	});

	/* Platforms */
	$('#platform-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '#platform-slider'
	});
	$('#platform-slider').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		asNavFor: '#platform-slider-for',
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
	});

})(jQuery);
