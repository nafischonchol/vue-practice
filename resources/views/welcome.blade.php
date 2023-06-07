<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--plugins-->
    <link href="{{ asset('theme/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- loader-->
    <link href="{{ asset('theme/css/pace.min.css') }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('theme/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/header-colors.css') }}" rel="stylesheet" />
    @vite('resources/js/app.js')
</head>

<body class="antialiased">
    <div id="app"></div>
  
     <!-- Bootstrap bundle JS -->
     <script src="{{ asset('theme/js/bootstrap.bundle.min.js')}}"></script>
     <!--plugins-->
     <script src="{{ asset('theme/js/jquery.min.js')}}"></script>
     <script src="{{ asset('theme/plugins/simplebar/js/simplebar.min.js')}}"></script>
     <script src="{{ asset('theme/plugins/metismenu/js/metisMenu.min.js')}}"></script>
     <script src="{{ asset('theme/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
     <script src="{{ asset('theme/js/pace.min.js')}}"></script>
     <!--app-->
     <script src="{{ asset('theme/js/app.js')}}"></script>
     <script src="{{ asset('theme/js/index.js')}}"></script>
     <script>
       new PerfectScrollbar(".best-product")
    </script>
</body>

</html>
