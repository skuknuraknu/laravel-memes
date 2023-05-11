$(function ($) {
  "use strict";

  jQuery(document).ready(function () {

    /* niceSelect */
    $("select").niceSelect();

    /* Magnific Popup video */
    if (document.querySelector('.popupvideo') !== null) {
      $('.popupvideo').magnificPopup({
        disableOn: 300,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
      });
    }

    // story-carousel
    $(".story-carousel").not('.slick-initialized').slick({
      infinite: false,
      autoplay: false,
      centerMode: false,
      centerPadding: "0px 50px",
      focusOnSelect: false,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: "<button type='button' class='arafat-prev cmn-btn pull-left'><i class=\"material-symbols-outlined mat-icon\"  aria-hidden='true'>chevron_left</i></button>",
      nextArrow: "<button type='button' class='arafat-next cmn-btn pull-right'><i class=\"material-symbols-outlined mat-icon\"  aria-hidden='true'>chevron_left</i></button>",
      dots: false,
      dotsClass: 'section-dots',
      customPaging: function (slider, i) {
        var slideNumber = (i + 1),
          totalSlides = slider.slideCount;
        return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
      },
      responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
            arrows: false,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 3,
            arrows: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            arrows: false,
          }
        },
      ]
    });

    // shop-carousel
    $(".slider-for").not('.slick-initialized').slick({
      infinite: false,
      autoplay: false,
      centerMode: false,
      centerPadding: "0px 50px",
      focusOnSelect: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav',
      arrows: false,
      prevArrow: "<button type='button' class='arafat-prev cmn-btn pull-left'><i class=\"material-symbols-outlined mat-icon\"  aria-hidden='true'>chevron_left</i></button>",
      nextArrow: "<button type='button' class='arafat-next cmn-btn pull-right'><i class=\"material-symbols-outlined mat-icon\"  aria-hidden='true'>chevron_left</i></button>",
      dots: false,
      dotsClass: 'section-dots',
      customPaging: function (slider, i) {
        var slideNumber = (i + 1),
          totalSlides = slider.slideCount;
        return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
      },
    });
    $(".slider-nav").not('.slick-initialized').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 3,
            arrows: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            arrows: false,
          }
        },
      ]
    });

    // Video Player
    if (document.querySelector('.player') !== null) {
      const controls = [
        'play-large',
        'play',
        'progress',
        'duration',
        'volume',
        'pip',
        'fullscreen'
      ];
      const player = Plyr.setup('.player', { controls });
    }
    
    // Post Apex charts
    if (document.querySelector('#postChart') !== null) {
      var options = {
        series: [
          {
            show: true,
            data: [30, 50, 40, 50, 70, 65, 90]
          },
        ],
        chart: {
          height: 250,
          type: 'bar',
          toolbar: {
            show: false,
          }
        },
        tooltip: {
          enabled: false,
        },
        colors: ['#7579FF'],
        plotOptions: {
          bar: {
            columnWidth: '20%',
            distributed: false,
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false,
        },
        xaxis: {
          categories: [
            ['Nov 23'],
            ['Nov 24'],
            ['Nov 25'],
            ['Nov 26'],
            ['Nov 27'],
            ['Nov 28'],
            ['Nov 29'],
            ['Nov 30'],
            ['Dec 1'],
          ],
          labels: {
            style: {
              colors: 'var(--para-1st-color)',
            }
          }
        },
        yaxis: {
          labels: {
            style: {
              colors: 'var(--para-1st-color)',
            }
          }
        }
      };
      var chart = new ApexCharts(document.querySelector("#postChart"), options);
      chart.render();
    }

    // Member Request charts
    if (document.querySelector('#memberRequest') !== null) {
      var options = {
        series: [
          {
            show: true,
            data: [30, 50, 40, 50, 70, 65, 90]
          },
        ],
        chart: {
          height: 250,
          type: 'bar',
          toolbar: {
            show: false,
          }
        },
        tooltip: {
          enabled: false,
        },
        colors: ['#00CF53'],
        plotOptions: {
          bar: {
            columnWidth: '20%',
            distributed: false,
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false,
        },
        xaxis: {
          categories: [
            ['Nov 23'],
            ['Nov 24'],
            ['Nov 25'],
            ['Nov 26'],
            ['Nov 27'],
            ['Nov 28'],
            ['Nov 29'],
            ['Nov 30'],
            ['Dec 1'],
          ],
          labels: {
            style: {
              colors: 'var(--para-1st-color)',
            }
          }
        },
        yaxis: {
          labels: {
            style: {
              colors: 'var(--para-1st-color)',
            }
          }
        }
      };
      var chart = new ApexCharts(document.querySelector("#memberRequest"), options);
      chart.render();
    }

    // post Content Apex Charts
    if (document.querySelector('#postContentOne') !== null) {
        var options = {
          series: [{
            name: "Desktops",
            fill: false,
            data: [50, 100, 40, 50, 50, 50, 50, 50, 50, 50]
        }],
        chart: {
          height: 90,
          type: 'line',
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          },
        },
        colors: ['#fff'],
        dataLabels: {
          enabled: false
        },
        xaxis: {
          labels: {
            show: false
          }
        },
        stroke: {
          curve: 'smooth'
        },
        tooltip: {
          enabled: false,
        },
        grid: {
          show: false
        },
        yaxis: {
          show: false,
          labels: {
            show: false,
          }
        },
      }
      var chart = new ApexCharts(document.querySelector("#postContentOne"), options);
      chart.render();
    }

    // post Content Apex Charts
    if (document.querySelector('#postContentTwo') !== null) {
        var options = {
          series: [{
            name: "Desktops",
            data: [5, 100, 0, 20, 70, 45, 60, 30, 70, 80]
        }],
        chart: {
          height: 90,
          type: 'line',
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          },
        },
        colors: ['#fff'],
        dataLabels: {
          enabled: false
        },
        xaxis: {
          labels: {
            show: false
          }
        },
        stroke: {
          curve: 'smooth'
        },
        tooltip: {
          enabled: false,
        },
        grid: {
          show: false
        },
        yaxis: {
          show: false,
          labels: {
            show: false,
          }
        },
      }
      var chart = new ApexCharts(document.querySelector("#postContentTwo"), options);
      chart.render();
    }
    
    // post Content Apex Charts
    if (document.querySelector('#postContentThree') !== null) {
        var options = {
          series: [{
            name: "Desktops",
            data: [5, 40, 30, 20, 70, 45, 60, 30, 70, 80]
        }],
        chart: {
          height: 90,
          type: 'line',
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          },
        },
        colors: ['#fff'],
        dataLabels: {
          enabled: false
        },
        xaxis: {
          labels: {
            show: false
          }
        },
        stroke: {
          curve: 'smooth'
        },
        tooltip: {
          enabled: false,
        },
        grid: {
          show: false
        },
        yaxis: {
          show: false,
          labels: {
            show: false,
          }
        },
      }
      var chart = new ApexCharts(document.querySelector("#postContentThree"), options);
      chart.render();
    }

    // post Reach Apex Charts
    if (document.querySelector('#postReach') !== null) {
      var options = {
        series: [
        {
          show: false,
          data: [20, 33, 25, 55, 30, 65, 70, 72]
        },
        {
          data: [28, 43, 25, 35, 25, 45, 80, 83]
        }
      ],
        chart: {
        height: 250,
        type: 'line',
        toolbar: {
          show: false
        }
      },
      colors: ['#55FFB8', '#fff'],
      dataLabels: {
        enabled: false,
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        curve: 'smooth'
      },
      grid: {
        show: false
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        labels: {
          style: {
            colors: '#fff',
          },
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: '#fff',
          },
        }
      },
      legend: {
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
      }
      };
      var chart = new ApexCharts(document.querySelector("#postReach"), options);
      chart.render();
    }

    /* Wow js */
    new WOW().init();

  });
});