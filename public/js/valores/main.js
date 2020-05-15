$(function() {
  "use strict";
  $('.info').first().show().animate({
    width: '45%'
  });
  $('.info1').first().show().animate({
    width: '45%'
  });
  $('.info2').first().show().animate({
    width: '45%'
  });
  $('.info3').first().show().animate({
    width: '45%'
  });
  $('.acordeonclass').click(function() {
    $(this)
    .next().show().animate({
      width: '45%'
    })
    .siblings(".info").animate({
      width: 0
    });
  });
  $('.acordeonclass1').click(function() {
    $(this)
    .next().show().animate({
      width: '45%'
    })
    .siblings(".info1").animate({
      width: 0
    });
  });
  $('.acordeonclass2').click(function() {
    $(this)
    .next().show().animate({
      width: '50%'
    })
    .siblings(".info2").animate({
      width: 0
    });
  });
  $('.acordeonclass3').click(function() {
    $(this)
    .next().show().animate({
      width: '45%'
    })
    .siblings(".info3").animate({
      width: 0
    });
  });
});