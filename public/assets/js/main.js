$(function ($) {
  "use strict";

  jQuery(document).ready(function () {

    // preloader
    $(".preloader").delay(300).animate({
      "opacity": "0"
    }, 500, function () {
      $(".preloader").css("display", "none");
    });
    
    // Sticky Header
    var fixed_top = $(".header-section");
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 50) {
        fixed_top.addClass("animated fadeInDown header-fixed");
      }
      else {
        fixed_top.removeClass("animated fadeInDown header-fixed");
      }
    });

    // Scroll Top
    var ScrollTop = $(".scrollToTop");
    var homeMenu = $(".navbar-nav.feed .home");
    var newsFeed = $(".navbar-nav.feed .feed");
    var navIcon = $(".navbar-nav.feed .nav-icon");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        ScrollTop.removeClass("active");
        homeMenu.addClass("active");
        newsFeed.removeClass("active");
      } else {
        ScrollTop.addClass("active");
        navIcon.removeClass("active");
        newsFeed.addClass("active");
      }
    });
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });

    // Autocomplete off
    $('input[type=text]').attr('autocomplete','off');

    // Header Active
    $('.single-item .cmn-head').on('click', function () {
      $(this).parents('.single-item').toggleClass('active');
      $(this).parents('.single-item').siblings().removeClass('active');
    });

    // sidebar Active
    $('.sidebar-toggler .toggler-btn').on('click', function () {
      $('.sidebar-toggler .sidebar-head').toggleClass('active');
    });

    // sidebar Close
    $('.sidebar-toggler .contact-close').on('click', function () {
      $('.sidebar-toggler .sidebar-head').removeClass('active');
    });

    // Contact Active
    $('.sidebar-content .contact-active').on('click', function () {
      $('.sidebar-content .contact-sidebar').toggleClass('active');
    });

    // Contact Close
    $('.sidebar-content .contact-close').on('click', function () {
      $('.sidebar-content .contact-sidebar').removeClass('active');
    });

    // Profile Active
    $('.main-content .profile-active').on('click', function () {
      $('.main-content .profile-sidebar').toggleClass('active');
    });

    // Profile Close
    $('.main-content .profile-close').on('click', function () {
      $('.main-content .profile-sidebar').removeClass('active');
    });

    // Search Active
    $('.header-section .search-active').on('click', function () {
      $('.header-section .search-form').toggleClass('active');
    });
    
    // Dropdown Active Remove
    $("main").click(function () {
      $('.single-item').removeClass('active');
    });

    // color switch btn
    const cmnThm = document.getElementsByClassName("switch-wrapper");
    if (cmnThm) {
      var switchWrapper = $(".checkbox");
      $(switchWrapper).on("click", function () {
        $('html, section, footer').toggleClass('dark-ui');
        setTheme(localStorage.getItem("theme"));
      });
      if (localStorage.getItem("theme") === "light") {
        localStorage.setItem("theme", "dark");
        switchWrapper.attr('checked', false);
      } else {
        localStorage.setItem("theme", "light");
        switchWrapper.attr('checked', true);
      }
      setTheme(localStorage.getItem("theme"));
      function setTheme(theme) {
        if (theme === "light") {
          $('.switch-wrapper .icon').removeClass('active');
          $('.switch-wrapper .moon').addClass('active');
          localStorage.setItem("theme", "dark");
          $("html, section").addClass('dark-ui');
        } else {
          localStorage.setItem("theme", "light");
          $("html, section").removeClass("dark-ui");
          $('.switch-wrapper .icon').removeClass('active');
          $('.switch-wrapper .sun').addClass('active');
        }
      }
    }

    // Reply Button Toggle 
    $(".like-share .reply-btn").click(function(){
      $(".info-item").removeClass('active');
      $(this).parents('.info-item').toggleClass('active');
      $(".comments-area .active .comment-form").slideToggle();
    });

    // Input Increase
    var minVal = 1, maxVal = 20;
    $(".increaseQty").on('click', function(){
      var $parentElm = $(this).parents(".qtySelector");
      $(this).addClass("clicked");
      setTimeout(function(){
          $(".clicked").removeClass("clicked");
      },100);
      var value = $parentElm.find(".qtyValue").val();
      if (value < maxVal) {
          value++;
      }
      $parentElm.find(".qtyValue").val(value);
    });
    $(".decreaseQty").on('click', function(){
      var $parentElm = $(this).parents(".qtySelector");
      $(this).addClass("clicked");
      setTimeout(function(){
          $(".clicked").removeClass("clicked");
      },100);
      var value = $parentElm.find(".qtyValue").val();
      if (value > 1) {
          value--;
      }
      $parentElm.find(".qtyValue").val(value);
    });

    // Show input File Image
    $('.upload-single input').change(function() {
      $(".upload-single").removeClass('uploadImg');
      $(this).parents('.upload-single').addClass('uploadImg');
      var file = this.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
        $('.upload-single.uploadImg .preview-image').attr('src', e.target.result);
      };
      reader.readAsDataURL(file);
    });

    // Always Scroll to bottom
    $('.main-chat-box').scrollTop( $(document).height() );

  });

});

// Tooltip Active
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})