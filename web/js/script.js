/* Bar progression competences */

;(function($) {
  "use strict";

  $(".bar").each(function() {

    var $bar = $(this),
        $pct = $bar.find(".pct"),
        data = $bar.data("bar");

    setTimeout(function() {

      $bar
        .css("background-color", data.color)
        .animate({
          "width": $pct.html()
      }, data.speed || 2000, function() {

        $pct.css({
          "color": data.color,
          "opacity": 1
        });

      });

    }, data.delay || 0);

  });

})(jQuery);

  /*  Own Caroussel */

$('.owl-carousel').owlCarousel({
  loop:true,
  lazyLoad: true,
  nav:true,
  items:2,
  center:true,
  stagePadding: 20,
  margin:10,

})
