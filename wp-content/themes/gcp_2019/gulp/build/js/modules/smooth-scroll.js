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

});