<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>

  <!--plugins-->
  <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.mi') }}n.css" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-extende') }}d.css" rel="stylesheet">
  <link href="{{ asset('assets/css/styl') }}e.css" rel="stylesheet">
  <link href="{{ asset('assets/css/icon') }}s.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/header-colors.css') }}" rel="stylesheet" />

  <title>@yield('title')</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
      @include('master-layout.sidebar')
      @include('master-layout.header')
      <div class="page-content-wrapper">
          <!-- start page content-->
          <div class="page-content">
              @yield('content')
          </div>
          <!-- end page content-->
      </div>



      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top">
          <ion-icon name="arrow-up-outline"></ion-icon>
      </a>
      <!--End Back To Top Button-->

      <!--start switcher-->
      <div class="switcher-body">
          <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
              <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
          </button>
          <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
              data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
              <div class="offcanvas-header border-bottom">
                  <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
              </div>
              <div class="offcanvas-body">
                  <h6 class="mb-0">Theme Variation</h6>
                  <hr>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                          value="option1">
                      <label class="form-check-label" for="LightTheme">Light</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                          value="option2">
                      <label class="form-check-label" for="DarkTheme">Dark</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                          value="option3" checked>
                      <label class="form-check-label" for="SemiDark">Semi Dark</label>
                  </div>
                  <hr />
                  <h6 class="mb-0">Header Colors</h6>
                  <hr />
                  <div class="header-colors-indigators">
                      <div class="row row-cols-auto g-3">
                          <div class="col">
                              <div class="indigator headercolor1" id="headercolor1"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor2" id="headercolor2"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor3" id="headercolor3"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor4" id="headercolor4"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor5" id="headercolor5"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor6" id="headercolor6"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor7" id="headercolor7"></div>
                          </div>
                          <div class="col">
                              <div class="indigator headercolor8" id="headercolor8"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
      <!--end switcher-->


      <!--start overlay-->
      <div class="overlay nav-toggle-icon"></div>
      <!--end overlay-->

  </div>
  <!--end wrapper-->





  <!-- JS Files-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script type="module" src="{{ asset('../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
  <!--plugins-->
  <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

  <!-- Main JS-->
  <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
