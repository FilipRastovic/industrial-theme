$(document).ready(function(){(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link 
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });


  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  $('.services-dropdown').on('click', function() {
    if( window.screen.width > 768 ) {
      window.location = '/services-overview';
    }
  });


  /** Hide navbar button on landing page when viewing on mobile screens */
  if ( $(".page-template-page-landing")[0] ) {

      if ( $(window).width() < 768 ) {

        $('button.navbar-toggler').hide();

      }

  } 
 
})(jQuery); // End of use strict

	// Growth Phases Tabs
	var phase = 0;
	var phase2 = 0;
	$('.phaseLeft .phaseNav').each(function(){
		phase++;
		$(this).attr('index', 'item-'+phase);
	});
	$('.phaseRight .phaseContent').each(function(){
		phase2++;
		$(this).attr('index', 'item-'+phase2);
	});
	$('.phaseLeft .phaseNav').click(function(){
		var item = $(this).attr('index');
		$('.phaseLeft .phaseNav').removeClass('activeTab');
		$('.phaseRight .phaseContent').removeClass('activeTab');
		$(this).addClass('activeTab');
    $('.phaseRight .phaseContent').filter('[index='+item+']').addClass('activeTab');
    
  });
  $('.phaseLeft .phaseNav,.phaseRight .phaseContent').filter('[index="item-1"]').addClass('activeTab');
	if ($(window).width() > 600) {
    
	}
  

$('.mlw_qmn_question > br').remove();

$( 'body' ).on( 'click', '#self-assessment-modal' ).click( function() {

  $('qmn_question_answer.qmn_question_answer_correct >br').remove();

  $('#self-assessment-results > br').remove();
  
} );

$("#cta-portfolio").click(function() {
  $([document.documentElement, document.body]).animate({
      scrollTop: $("#portfolio").offset().top
  }, 400);
});


$("#scroll-top").click(function() {
  $([document.documentElement, document.body]).animate({
      scrollTop: $("#page-top").offset().top
  }, 700);
});

$("#services-bot-form-cta").click(function() {

  $([document.documentElement, document.body]).animate({

      scrollTop: $("#services-bot-form").offset().top

  }, 300);

});});