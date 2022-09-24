<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gecko - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.png">
    @include('pages.layouts.style')
</head>

<body>
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    @include('pages.layouts.header')
    <main>
        @yield('content')
    </main>
    @include('pages.layouts.footer')
    @include('pages.layouts.script')
</body>

</html>
