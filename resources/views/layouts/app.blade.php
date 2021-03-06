<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PB Online Store</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ mix('css/bootstrap/app.css') }}" rel="stylesheet">
    <!-- Template -->
    <link href="{{ asset('css/template/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template/media.css') }}" rel="stylesheet">
    <!-- Air Datepicker -->
    <link href="{{ asset('css/air-datepicker/datepicker.min.css') }}" rel="stylesheet">
    <!-- Other Stylesheets -->
    @stack('styles')
</head>
<body>

    <div id="app">
        @guest
            @include('layouts.includes.navbar_guest')
        @else
            @include('layouts.includes.navbar_home')
        @endguest

        <div id="main">
            @yield('content')
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="{{ mix('js/bootstrap/app.js') }}" type="text/javascript"></script>
    <!-- Template Script -->
    <script src="{{ asset('js/template/script.js') }}" type="text/javascript"></script>
    <!-- Vue -->
    <script src="{{ asset('js/vue/vue.min.js') }}" type="text/javascript"></script>
    <!-- Jquery Validation -->
    <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
    <!-- Air Datepicker -->
    <script src="{{ asset('js/air-datepicker/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/air-datepicker/datepicker.en.js') }}" type="text/javascript"></script>
    <!-- Other Scripts -->
    @stack('scripts')
</body>
</html>
