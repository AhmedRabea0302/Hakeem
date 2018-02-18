<!DOCTYPE html>
<html>
<head>
    <!-- ============ Meta Tags ============== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- ============ Title Tags ============== -->
    <title>Hakeem</title>
    <!-- ============ Pages & Vendors=================== -->
    <link rel="stylesheet" href="{{asset('assets/site/vendor/font-awesome/css/font-awesome.min.css')}}">

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('assets/site/vendor/bootstrap/css/bootstrap-ar.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.css')}}">
    @endif

    <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('assets/site/css/style-ar.css')}}">
    @endif
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        @include('site.layouts.header')
        @yield('content')

        @include('site.layouts.footer')
    </div>

    <script src="{{asset('assets/site/vendor/jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/site/js/script.js')}}"></script>

</body>
</html>