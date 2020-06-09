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

	$("#about-slider-for,#about-slider,about-slider-for2").on("init", function(event, slick) {
		for (var i=0 ; i < slick.$slides.length ; i++) {
			var currSlide = $(slick.$slides[i]);
			currSlide.addClass(currSlide.children().children().first().data("key"));
		}
	    
	})
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


	$('.js-filter').on('click', function(){
		var key = $(this).data("key")
		$('.about-filters li').removeClass('active');
		$('.about-sliders .filtering').slick('slickUnfilter');
		$(this).addClass('active');
		if (key !== 'All')
			$('.about-sliders .filtering').slick('slickFilter','.'+key);
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
		responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
              }
            },
        ]
  });
  
  // About us
  $('#about-us-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '#about-us-slider'
	});
	$('#about-us-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '#about-us-slider-for',
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
  });
  
  // About what u need for (DESIGN)
  //TODO: Add event actions on images top of slider
	var slickWhatUNeed = $('#about-what-u-need-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
  });
  $('#about-what-u-need-for .col-md-4:nth-child(1) a').click(function() {
    slickWhatUNeed.slick('slickGoTo', 1);
  });
  $('#about-what-u-need-for .col-md-4:nth-child(2) a').click(function() {
    slickWhatUNeed.slick('slickGoTo', 2);
  });
  $('#about-what-u-need-for .col-md-4:nth-child(3) a').click(function() {
    slickWhatUNeed.slick('slickGoTo', 3);
  });

  $('#success-history-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
  });
  $('#success-history-slider2').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
  });
  
  $('#moodle-success-history-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		autoplay:true,
	});

	$('#team-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		arrows: true,
		centerMode: true,
		autoplay:false,
  });
  
  $('#form #form_send').click(function(e) {
    e.preventDefault();

    var form = $( "#form form" );
    form.validate();

    var url = 'php/form.php';

    if (form.valid())
    $.ajax({
      type: "POST",
      url: url,
      data: {
        email: $('#form_email').val(),
        topic: $('#form_topic').val(),
        needs: $('#form_needs').val()
      }, // serializes the form's elements.
      success: function(data)
      {
        if (data.success){
          alert('Thank you! we will contact you soon');
          $('#form_email').val('');
          $('#form_topic').val('');
          $('#form_needs').val('')
        }
        else
          alert('Sorry, there was a problem, please try again later');
      }
    });
    else
      alert('Please check the data entered');
  });

})(jQuery);
