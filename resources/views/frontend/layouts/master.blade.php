<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('frontend.partials.style')

    <title>Hello, world!</title>
  </head>
  <body>
<div class="wrapper mb-0">

   @include('frontend.partials.nav')
    <!-- End Nav Section -->
    <!-- Start Sidebar+ Content Section -->
     @yield('content')


    <!-- End Sidebar+ Content Section -->

    <!-- Footer section start -->
   @include('frontend.partials.footer')
    <!-- Footer section end -->
 
  
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     @include('frontend.partials.script')
  </body>
</html>