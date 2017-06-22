<!DOCTYPE html>
<html @yield('html-class')>
   @include('layouts.partials.head')
   @yield('meta')

   <body>
        @include('layouts.partials.status')
        @include('layouts.partials.nav')

        @yield('content')
   @include('layouts.partials.footer')
   </body>
    </html>

