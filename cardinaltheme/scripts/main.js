/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;
var question = $(".section--faqs .question");
var questionv2 = $(".section--faqs-v2 .question");
var questionv3 = $(".section--faqs-v3 .question");
var questionv4 = $(".section--faqs-v4 .question");
var statistics = $('.stat .number');

$(function () {
  
  $(".anchor_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".banners_slider").slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
  $(".bottom_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".bottom_slider_2",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          dots: true,
        },
      },
    ],
  });
  $(".bottom_slider_2").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".bottom_slider",
    arrows: false,
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });
  $(".cards_slider").slick({
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".featured_slider").slick({
    infinite: true,
    arrows: false,
    dots: true,
    centerMode: true,
    centerPadding: "40px",
    slidesToShow: 5,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          infinite: true,
          arrows: false,
          dots: true,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3,
          cssEase: "linear",
        },
      },
      {
        breakpoint: 768,
        settings: {
          infinite: true,
          arrows: true,
          dots: true,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
          cssEase: "linear",
        },
      },
    ],
  });
  $(".featured-slider_v2").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    arrows: false,
    dots: true,
  });
  $(".four_panels_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".hero_slider").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".icon_title_slider").slick({
    dots: true,
    slidesPerRow: 4,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesPerRow: 2,
          rows: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesPerRow: 1,
          rows: 1,
        },
      },
    ],
  });
  $(".image_slider").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 3000,
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 3000,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".locations_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".logo_slider").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".memberships_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".package-slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".services_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".services_slider_v2").slick({
    arrows: true,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".service_boxes_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".team_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".team_slider_2",
  });
  $(".team_slider_2").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".team_slider",
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
  });
  $(".team_slider_3").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".team_slider_4",
  });
  $(".team_slider_4").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".team_slider_3",
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    mobileFirst: true,
  });
  $(".team_slider_5").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".team_slider_6"
  });
  $(".team_slider_6").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".team_slider_5",
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    mobileFirst: true,
  });
  $(".testimonials_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
  });
  $(".testimonials_slider_v2").slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".testimonials_slider_v3").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
  });
  $(".testimonials_slider_v4").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
  });
  $(".testimonials_slider_v5").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
  });
  $(".testimonials_slider_v6").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $('.tiles_slider').slick({
    dots: true,
    slidesPerRow: 5,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesPerRow: 2,
          rows: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesPerRow: 1,
          rows: 1,
        }
      }
    ]
  });

  question.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find(".arrow-down").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find(".arrow-down").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });
  questionv2.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find("#button").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find("#button").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });
  questionv3.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find("#button").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find("#button").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });
  questionv4.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });
  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });
  $(document).scroll(function () {
    if (win.innerWidth < 767) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    }
    var topval = $(document).scrollTop();
    if (topval >= mainNavOffset) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    } else {
      stickyWrap.removeClass("sticky");
      mainNav.removeClass("sticky-margin");
    }
  });
  // statistics.rCounter({
  //   duration: 40
  // });
});
function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}
function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}

$( document ).ready( function() {
    
  $(function ($) {
      "use strict";
    
      var counterUp = window.counterUp["default"]; // import counterUp from "counterup2"
    
      var $counters = $(".section--statistics .number");
    
      /* Start counting, do this on DOM ready or with Waypoints. */
    $counters.each(function (ignore, counter) {
      var waypoint = new Waypoint( {
        element: $(this),
        handler: function() { 
          counterUp(counter, {
            duration: 1000,
            delay: 16
          }); 
          this.destroy();
        },
        offset: 'bottom-in-view',
      } );
    });

  });
});
  