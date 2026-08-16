<!DOCTYPE html>
<html lang="en">
<body>

    {{-- Top Header Bar --}}
    @include('home.layout.header')

    {{-- Main Navbar --}}
    @include('home.layout.navbar')

    {{-- Dynamic Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('home.layout.footer')

</body>
</html>