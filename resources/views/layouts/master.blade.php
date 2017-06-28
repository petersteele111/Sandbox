<!DOCTYPE html>
<html @yield('html-class')>
   @include('layouts.partials.head')
   @yield('meta')

   <body>
        @yield('status')
        @include('layouts.partials.nav')

        @yield('content')
   @include('layouts.partials.footer')
   </body>
    </html>

