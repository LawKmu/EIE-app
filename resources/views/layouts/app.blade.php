
<!DOCTYPE html>

@if (\Request::is('rtl'))
  <html dir="rtl" lang="ar">
@else
  <html lang="en" >
@endif

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @if (env('IS_DEMO'))
      <x-demo-metas></x-demo-metas>
  @endif

  <link rel="apple-touch-icon" sizes="76x76" href={{ asset("../assets/img/apple-icon.png") }}>
  <link rel="icon" type="image/png" href={{ asset("../assets/img/favicon.png") }}>
  <link rel="stylesheet" href={{ asset("../css/app.css") }}>
  <title>
    CMC
  </title>
  <link href={{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css") }} rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--     Fonts and icons     -->
  <link href={{ asset("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700") }} rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href={{ asset("../assets/css/nucleo-icons.css") }} rel="stylesheet" />
  <link href={{ asset("../assets/css/nucleo-svg.css") }} rel="stylesheet" />
  <link href={{ asset("../assets/css/libs.min.css") }} rel="stylesheet" />
  <link href={{ asset("../assets/css/socialv.css") }} rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src={{ asset("https://kit.fontawesome.com/42d5adcbca.js") }} crossorigin="anonymous"></script>
  <link href={{ asset("../assets/css/nucleo-svg.css") }} rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href={{ asset("../assets/css/soft-ui-dashboard.css?v=1.0.3") }} rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">
  @auth
    @yield('auth')
  @endauth
  @guest
    @yield('guest')
  @endguest

  @if(session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
      <p class="m-0">{{ session('success')}}</p>
    </div>
  @endif
    <!--   Core JS Files   -->
  <script src={{ asset("../assets/js/core/popper.min.js") }}></script>
  <script src={{ asset("../assets/js/core/bootstrap.min.js") }}></script>
  <script src={{ asset("../assets/js/plugins/perfect-scrollbar.min.js") }}></script>
  <script src={{ asset("../assets/js/plugins/smooth-scrollbar.min.js") }}></script>
  <script src={{ asset("../assets/js/plugins/fullcalendar.min.js") }}></script>
  <script src={{ asset("../assets/js/plugins/chartjs.min.js") }}></script>
  @stack('rtl')
  @stack('dashboard')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src={{ asset("https://buttons.github.io/buttons.js") }}></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src={{ asset("../assets/js/soft-ui-dashboard.min.js?v=1.0.3") }}></script>
  <script src={{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js") }} integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
