<!DOCTYPE html>
<html lang="en">
    @include('shared.head')
    <body>
        @include('shared.navigation')

        @yield('content')

        @include('shared.contact-us')
        @include('shared.map')
        @include('shared.footer')
        @include('shared.scripts')
    </body>
</html>
