<!DOCTYPE html>
<html lang="en">

@include('layout.user.header')
<body class="font-primary">
    @include('layout.user.navbar')
    
    @yield('content')

    @include('layout.user.footer')
</body>

</html>
