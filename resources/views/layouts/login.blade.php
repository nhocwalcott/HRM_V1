
<!DOCTYPE html>
//Do Nguyet Ạnh
<html lang="{{ app()->getLocale() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    @include('partials.head')

    @include('partials.style')
    
    <!-- END HEAD -->

    <body class="login">
        @yield('content')

        @include('partials.script')

        @yield('script')
    </body>

</html>

