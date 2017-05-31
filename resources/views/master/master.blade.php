<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
   @include('master.partials.head')

   <body>
        @include('master.partials.nav')

        @yield('content')
   @include('master.partials.footer')
   </body>

</html>