$(document).ready(function(){
  $(document).ready(function(){

      var $window = $(window);

      $('section[data-type="background"]').each(function(){
          var $bgobj = $(this);
              $(window).scroll(function() {
              var yPos = -($window.scrollTop() / $bgobj.data('speed'));
              var coords = '50% '+ yPos + 'px';
              $bgobj.css({ backgroundPosition: coords });
              });
      });
  });

//script to time the interval between bounces for arrow

window.setInterval(bounceArrow, 1000);

function bounceArrow() {
 $('#arrow').removeClass('animated bounce').delay(2000).queue(function(next) {
   $(this).addClass('animated bounce');
   next();
 });
};

//script to make the menu appear after scrolling past home

var viewportHeight = $(window).height(); // == 100vh
(function($) {
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > viewportHeight) {
                $('#navbar').fadeIn(200);
            } else {
                $('#navbar').fadeOut(200);
            }
        });
    });
})(jQuery);
$(document).ready(function () {
$(document).on("scroll", onScroll);

//script to make the menu items active at each section

$('a[href^="#"]').on('click', function (e) {
  e.preventDefault();
  $(document).off("scroll");

  $('a').each(function () {
      $(this).removeClass('menuitems:hover:after');
  })
  $(this).addClass('menuitems:hover:after');

  var target = this.hash,
      menu = target;
  $target = $(target);
  $('html, body').stop().animate({
      'scrollTop': $target.offset().top+2
  }, 500, 'swing', function () {
      window.location.hash = target;
      $(document).on("scroll", onScroll);
  });
});
});

function onScroll(event){
var scrollPos = $(document).scrollTop();
$('#menu a').each(function () {
  var currLink = $(this);
  var refElement = $(currLink.attr("href"));
  if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
      $('.menuitems ul li span a').removeClass("menuitems:after");
      currLink.addClass("menuitems:after");
  }
  else{
      currLink.removeClass("menuitems:after");
  }
});
}

});
