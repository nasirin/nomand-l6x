<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('frontend.includes.style')
    @stack('addon-style')
</head>

<body>
    <!-- NAVBAR -->
    @include('frontend.includes.navbar')

    @yield('content')

    <!-- FOOTER -->
    @include('frontend.includes.footer')


    <!-- <script src="script/retina.min.js"></script> -->
    @include('frontend.includes.script')
    @stack('addon-script')
</body>

</html>