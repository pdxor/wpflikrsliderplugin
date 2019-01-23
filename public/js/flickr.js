;
'use strict';
(function($, window, document, undefined){
  var domain = location.host;


$('#flickSlide72157670399610698').lightSlider({
  item:5,
  loop:false,
  slideMove:2,
  easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
  speed:600,
  responsive : [
      {
          breakpoint:800,
          settings: {
              item:3,
              slideMove:1,
              slideMargin:6,
            }
      },
      {
          breakpoint:480,
          settings: {
              item:2,
              slideMove:1
            }
      }
  ]
});
$('#flickSlide72157670400051678').lightSlider({
  item:5,
  loop:false,
  slideMove:2,
  easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
  speed:600,
  responsive : [
      {
          breakpoint:800,
          settings: {
              item:3,
              slideMove:1,
              slideMargin:6,
            }
      },
      {
          breakpoint:480,
          settings: {
              item:2,
              slideMove:1
            }
      }
  ]
});

$('#flickSlide72157696329481241').lightSlider({
  item:5,
  loop:false,
  slideMove:2,
  easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
  speed:600,
  responsive : [
      {
          breakpoint:800,
          settings: {
              item:3,
              slideMove:1,
              slideMargin:6,
            }
      },
      {
          breakpoint:480,
          settings: {
              item:2,
              slideMove:1
            }
      }
  ]
});
})(jQuery, window, document)
