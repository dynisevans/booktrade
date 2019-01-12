<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Trade</title>
    <link rel="stylesheet" type='text/css' href="{!!url('public/css/thuvien.css') !!}">
    <link rel="stylesheet" type='text/css' href="{!!url('public/css/main.css')!!}">
    <link rel="stylesheet" href="{!!url('public/css/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!!url('public/css/fa-all.css')!!}">
    <script src="{!!url('public/js/jquery.min.js')!!}"></script>
    <script src="{!!url('public/js/bootstrap.min.js')!!}"></script>
    <script src="{!!url('public/js/thuvien.js')!!}"></script>
    <script src="{!!url('public/js/main.js')!!}"></script>
</head>
<body class="home-page" id="top-page"><!-- ////////////// Header ////////////// -->
<main>
    <section class="banner">
        @include('layouts.banner')
    </section>
    <section class="headerSec sticky-top">
        @include('layouts.navbar')
    </section>
    <section class="bodySec">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3">
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
    <section class="footerSec">
        @include('layouts.footer')
    </section>
</main>
</body>
</html>