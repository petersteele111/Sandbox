<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
   @include('master.partials.head')

   <body>
        @include('master.partials.nav');
        @yield('content');
   </body>
        @include('master.partials.footer')
</html>