<!DOCTYPE html>
<html lang="en">
<head>

     <title>TestOnline - Education</title>
     <!-- khai bao duong dan mac dinh -->
     <base href="{{asset('')}}">
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
     <link rel="stylesheet" href="frontend/css/font-awesome.min.css">
     <link rel="stylesheet" href="frontend/css/owl.carousel.css">
     <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
     <link rel="stylesheet" href="frontend/css/clock.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="frontend/css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     
     <!-- HOME -->
     @include('sinhvien.layout.header')
     <!-- FEATURE -->
    
     @yield('content')

     <!-- ABOUT -->



    

     <!-- FOOTER -->
    
     @include('sinhvien.layout.footer')

     <!-- SCRIPTS -->
     <script src="frontend/js/jquery.js"></script>
     <script src="frontend/js/bootstrap.min.js"></script>
     <script src="frontend/js/owl.carousel.min.js"></script>
     <script src="frontend/js/smoothscroll.js"></script>
     <script src="frontend/js/custom.js"></script>

</body>
</html>