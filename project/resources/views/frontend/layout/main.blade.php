<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Digian</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}" />

  <!-- font awesome style -->
  <link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>
 <!-- header section strats -->
 @include('frontend.include.header')
    <!-- end header section -->

    <!-- slider section -->
    @include('frontend.include.slider')
  
    <!-- end slider section -->
  </div>

  <!-- service section -->
  @include('frontend.include.service')
  
  <!-- end service section -->

  <!-- about section -->
  @include('frontend.include.about')

  
  <!-- end about section -->

  <!-- case section -->

@include('frontend.include.case')
 
  <!-- end case section -->

  <!-- client section -->
  @include('frontend.include.client')
  <!-- end client section -->



  <!-- contact section -->
  @include('frontend.include.contact')

  <!-- end contact section -->


 <!-- info section -->

 @include('frontend.include.information')
    <!-- end info section -->

    <!-- footer section -->
    @include('frontend.include.footer')
    <!-- footer section -->
  </div>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>