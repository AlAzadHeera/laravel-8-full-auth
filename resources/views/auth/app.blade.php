<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','')</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('login-assets/css/login.css') }}">
    <style>
        .login-wrapper .login-btn{
            padding: 5px 20px;
        }

        .custom-alert {
            padding: 20px 0px;
        }

        .custom-alert ul{
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
    @stack('css')
</head>
<body>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <a href="{{ url('/') }}"><img src="{{ asset('login-assets/images/logo.svg') }}" alt="logo" class="logo"></a>
                </div>
                @yield('content')
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('login-assets/images/login.jpg') }}" alt="login image" class="login-img">
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@stack('script')
</body>
</html>
