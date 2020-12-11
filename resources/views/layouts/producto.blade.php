<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Vivero</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

<body class="gray-bg">

<div class="navbar navbar-static-top" role="navigation">
    <div >
        <div class="gray-bg">
            @include('layouts.barraSuperior')
            @include('layouts.subMenu')
            <div class="wrapper wrapper-content">
                @include('mensaje')
                @yield('contenido')
            </div>
        </div>
        <br>
    </div>
    <div class="footer">
        <div class="pull-right">
            <strong>Hola :)</strong>
        </div>
        <div>
            Example Company &copy; 2020
        </div>
    </div>
</div>


    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>


</body>

</html>
