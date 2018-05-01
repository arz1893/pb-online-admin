<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PB Online Store</title>

    <!-- Scripts -->
    <script src="{{ asset('js/materialize/materialize.min.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ mix('css/materialize/app.css') }}" rel="stylesheet">

    <!-- Other Stylesheets -->
    @stack('styles')
</head>
<body>
    <div id="app">
        <nav>
            <div class="nav-wrapper indigo lighten-1">
                <a href="{{ url('/') }}" class="brand-logo">PB Admin</a>
                <a role="button" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="{{ route('login') }}" role="button">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" role="button">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ route('login') }}" role="button">Login<i class="fas fa-sign-in-alt"></i></a></li>
            <li><a href="{{ route('register') }}" role="button">Register<i class="fas fa-user-plus"></i></a></li>
        </ul>

        <div id="main">
            @yield('content')
        </div>

    </div>

    <!-- Jquery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Materialize -->
    <script src="{{ asset('js/materialize/materialize.min.js') }}" type="text/javascript"></script>
    <!-- Axios -->
    <script src="{{ asset('js/axios/axios.min.js') }}" type="text/javascript"></script>
    <!-- Lodash -->
    <script src="{{ asset('js/lodash/lodash.min.js') }}" type="text/javascript"></script>
    <!-- Vue -->
    <script src="{{ asset('js/vue/vue.min.js') }}" type="text/javascript"></script>
    <!-- Jquery Validation -->
    <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
    <!-- Materialize component init -->
    <script src="{{ asset('js/init_jquery.js') }}" type="text/javascript"></script>
    <!-- Other Scripts -->
    @stack('scripts')
</body>
</html>
