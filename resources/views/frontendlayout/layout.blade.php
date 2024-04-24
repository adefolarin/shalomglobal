<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="ShalomGlobal">
  <!-- Fav Icon -->
  <link rel="icon" href="{{ asset('frontendassets/assets/images/fav-icon.png') }}" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

  <title>Shalom Global Medical Missions</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ url('frontendassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


  <!-- Stylesheets -->
  <link href="{{ url('frontendassets/assets/css/font-awesome-all.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/flaticon_save_us.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/owl.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/progresscircle.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/icomoon.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/animate.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/color.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/nice-select.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/global.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/swiper.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/responsive.css') }}" rel="stylesheet">

  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>


  @include('frontendlayout.header')

  @yield('content')

  @include('frontendlayout.footer')


  <!-- jequery plugins -->
  <script src="{{ url('frontendassets/assets/js/jquery.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/popper.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/owl.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/wow.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/validation.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/progresscircle.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/scrollbar.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/appear.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/swiper.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/parallax.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/jquery.fancybox.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/parallax-scroll.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/jquery.paroller.min.js') }}"></script>

  <!-- main-js -->
  <script src="{{ url('frontendassets/assets/js/script.js') }}"></script>


  <!-- <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>-->


    <link rel="stylesheet" type="text/css" href="{{ url('frontendassets/assets/css/jquery.datetimepicker.css') }}"/>
    <script src="{{ url('frontendassets/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('frontendassets/assets/js/jquery.datetimepicker.full.js') }}"></script>


  <script>
    jQuery(document).ready(function () {
    'use strict';

    jQuery('#funddate, #commdate').datetimepicker({format: 'Y-m-d',timepicker: false});

    jQuery('#voldatetime').datetimepicker({format: 'Y-m-d H:i',timepicker: true});

    jQuery('#expiry').datetimepicker({format: 'Y-m-d',timepicker: false});
   });
  </script>

  



  <script>

      // if desktop device, use DateTimePicker
      $("#datetimepicker").datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });

    
  </script>

</body>

</html>