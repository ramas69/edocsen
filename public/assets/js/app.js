/* Template Name: Lezir - Responsive Bootstrap 4 Landing Page Template
   Author: Themesbrand
   Version: 1.0.0
   File Description: Main js file
*/

(function ($) {

    'use strict';

	// STICKY
	$(window).scroll(function() {
	    var scroll = $(window).scrollTop();
		console.log('test');
	    if (scroll >= 50) {
			$(".sticky").addClass("nav-sticky");
			$("img.logo-dark").css("height", "48").fadeIn("slow");
	    } else {
			$(".sticky").removeClass("nav-sticky");
			$("img.logo-dark").css("height", "96").fadeIn("slow");
		
	    }
	});


	// SmoothLink
	$('.nav-item a, .mouse-down a, .mouseD').on('click', function(event) {
	    var $anchor = $(this);
	    $('html, body').stop().animate({
	        scrollTop: $($anchor.attr('href')).offset().top - 0
	    }, 2000, 'easeInOutExpo');
	    event.preventDefault();
	});


	// scrollspy
	$("#mySidenav").scrollspy({
	    offset: 70
	});


	// loader
	$(window).on('load', function() {
	    $('#status').fadeOut();
	    $('#preloader').delay(350).fadeOut('slow');
	    $('body').delay(350).css({
	        'overflow': 'visible'
	    });
	});

	// contact

	$('#contact-form').submit(function() {

	    var action = $(this).attr('action');

	    $("#message").slideUp(750, function() {
	        $('#message').hide();

	        $('#submit')
	            .before('')
	            .attr('disabled', 'disabled');

	        $.post(action, {
	                name: $('#name').val(),
	                email: $('#email').val(),
	                comments: $('#comments').val(),
	            },
	            function(data) {
	                document.getElementById('message').innerHTML = data;
	                $('#message').slideDown('slow');
	                $('#cform img.contact-loader').fadeOut('slow', function() {
	                    $(this).remove()
	                });
	                $('#submit').removeAttr('disabled');
	                if (data.match('success') != null) $('#cform').slideUp('slow');
	            }
	        );

	    });

	    return false;

	});

	// feather icon
	feather.replace()

})(jQuery)
