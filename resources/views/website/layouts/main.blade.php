<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        @include('website.layouts.styles')
    </head>
    <body>
        @include('website.layouts.loader')
        @include('website.layouts.topbar')
        @include('website.layouts.navbar')
        @yield('content')
        @include('website.layouts.footer')
        @include('website.layouts.scripts')
    </body>
</html>
