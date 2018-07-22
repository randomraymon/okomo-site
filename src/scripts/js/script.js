
var controller = new ScrollMagic.Controller();
var screenCount = $(".content").children().length;

var href = location.href.match(/([^\/]*)\/*$/)[1];
var hrefDE = location.href;

$("." + href).css("color", "#128d92");


$(function () { // wait for document ready
  // build scene

  if(href == "okomo.ch") {
    href = "okomo"
  };

  if (href == "okomo" || hrefDE == "http://okomo.ch/de/" || href == "okomo" || hrefDE == "http://localhost/okomo/de/" || href == "solutions") {

    for(var i = 1; i < screenCount; i++) {

      if(href == "okomo.ch" || hrefDE == "http://okomo.ch/de/") {
        var currentScreen = $(".content--okomo").children()[i];
      } else {
        var currentScreen = $(".content--" + href).children()[i];
      }

      $(currentScreen).addClass("screen--" + href + "--" + i);
      var triggerElementScreen = ".screen--" + href + "--" + i;
      var triggerElementText = $(".screen--key-image__text--" + i);
      var triggerElementTextClass = $(".screen--key-image__text--" + i).attr('class');

      var screenNumber = i+1;

      console.log($(currentScreen));


      // var scene = new ScrollMagic.Scene({triggerElement: triggerElementScreen , duration: 300})
      //         .setPin(triggerElementScreen )
      //         .setTween(triggerElementScreen, 0.5, {scale: 1.02})
      //         .triggerHook("onLeave");
      //         // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
      //         // .addTo(controller);
      //
      // var scene = new ScrollMagic.Scene({triggerElement: triggerElementScreen , duration: 500})
      //         .setTween("screen--key-image__text--" + i, 0.5, {color: "red"})
      //         .triggerHook("onLeave");
      //         // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
      //         // .addTo(controller);
    }

    // hide okomo hint

    var scene2 = new ScrollMagic.Scene({triggerElement: ".screen--okomo", duration: 300})
            .triggerHook("onLeave")
            .setTween(".okomo-button__hint", 0.3, {opacity: 0})
            // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
            .addTo(controller);


    // sticky screens

    // var scene = new ScrollMagic.Scene({triggerElement: ".screen--1", duration: 300})
    //         .triggerHook("onEnter")
    //         .setTween(".screen--landing__scroll-arrow", 0.3, {opacity: 0})
    //         // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
    //         .addTo(controller);
    //
    // var scene = new ScrollMagic.Scene({triggerElement: ".screen--okomo", duration: 300})
    //         .triggerHook("onLeave")
    //         .setTween(".okomo-button__animation__container", 0.3, {opacity: 0});
    //         // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
    //         // .addTo(controller);
  }


  if (hrefDE != "https://okomo.com/" && hrefDE != "https://okomo.com/de/") {
    $('.menu').css("top", "0");
    $('.content').css("margin-top", "50px");
    console.log(hrefDE);
  }


  // var scene = new ScrollMagic.Scene({triggerElement: ".screen--1" , duration: 500})
  //           .triggerHook("onEnter")
  //           .setTween(".menu", 0.5, {scale: 2.5})
  //           // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
  //           .addTo(controller);


  // sticky screens

  var scene3 = new ScrollMagic.Scene({triggerElement: ".screen--okomo", duration: 300})
          .triggerHook("onLeave")
          // .setTween(".menu", 0.3, {top: 0})
          .setTween(".menu", 0.3, {top: 0})
          // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
          .addTo(controller);

  // var scene = new ScrollMagic.Scene({triggerElement: ".screen--1"}, duration: 300)
  //         .triggerHook("onEnter")
  //         .setTween(".okomo-button__hint", 0.3, {opacity: 0})
  //         // .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
  //         .addTo(controller);




//

  $('.icon--hamburger').click( function() {
    $('.menu__bar__links').toggleClass('open');

  });


  // Image Preloader

  $('.high-res').load( function() {
    $('.low-res').css('opacity', '0');
    alert("hey");
  });

  // select
  $("input[type=text]").click(function() {
     $(this).select();
  });

});
