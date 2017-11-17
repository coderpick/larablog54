<!DOCTYPE html>
<html lang="en">
<head>

      @include('user/layouts/head')
</head>

  <body>

    <!-- Navigation -->
 @include('user/layouts/header')
    {{-- 
      @section('main-content')
      @show
     --}}
     
   @yield('main-content')

    <!-- Footer -->
 @include('user/layouts/footer')

  </body>

</html>
