<!DOCTYPE html>
<html @yield('html-class')>
   @include('master.partials.head')

   <body>
        @include('master.partials.nav')

        @yield('content')
   @include('master.partials.footer')
   </body>
    </html>

