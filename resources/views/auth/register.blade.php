<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3 class="m-t-none m-b">Regístrate </h3>
            </div>
            <div class="ibox-content">
                <form class="m-t" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" >{{ __('Name') }}</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                            <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Register') }}</button>
                </form>
                <a class="btn btn-block btn-outline btn-info" href="{{ route('login') }}"> {{ __('Already registered?') }}</a>
            </div>

        </div>  
    </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
