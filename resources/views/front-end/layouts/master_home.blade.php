<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-end.inc.header_home')
    @yield('css')
</head>

<body class="sidebar-noneoverflow">

    @yield('content')
    @include('front-end.inc.footer_home')
    @yield('script')
</body>
</html>
