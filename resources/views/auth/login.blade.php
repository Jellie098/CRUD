<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cactiplace | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-8">
                <img src="{{ asset('img/idea1.png') }}">
            </div>
            <div class="col-md-4">
                <div class="ibox-content">
                    <form class="m-t" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b"> {{ __('Login') }}</button>
                        
                        <div>
                            <label> <input type="checkbox" class="i-checks"> {{ __('Remember me') }}</label>
                        </div>
                        <br>
                        <div class="text-muted text-center">
                        @if (Route::has('password.request'))
                            <a lass="text-muted text-center"class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>

                        <br><br>
                        <p class="text-muted text-center">
                            <small>Not a member?</small>
                        </p>

                        <br>
                        <a class="btn btn-block btn-outline btn-success" href="{{ route('register') }}">Create an account</a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6 text-right">
               <small>© 2020</small>
            </div>
        </div>
    </div>

</body>

</html>
