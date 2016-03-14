<!doctype html>
<html class="no-js" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Alquiler de Automoviles | @yield('title')</title>

  
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="author" content="@yield('author')">

    <!-- =========================
       favicon and app touch icon
       ============================== -->
       <link rel="shortcut icon" href="favicon.ico"/>
       <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- =========================
       Bootstrap and animation
       ============================== -->

       {!! HTML::style("css/bootstrap.css") !!}
       {!! HTML::style("css/animate.min.css") !!}

    <!-- =========================
       Fonts, typography and icons
       ============================== -->
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
       {!! HTML::style("awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css") !!}
       {!! HTML::style("css/font-awesome.css") !!}
       {!! HTML::style("css/typography.css") !!}
       {!! HTML::style("css/owl.carousel.css") !!}
       {!! HTML::style("css/owl.theme.css") !!}
       {!! HTML::style("css/nivo-lightbox.css") !!}
       {!! HTML::style("css/nivo-lightbox-default.css") !!}
       {!! HTML::style("css/jquery.circliful.css") !!}  
       {!! HTML::style("js/datetimepicker-master/jquery.datetimepicker.css") !!} 
      {!! HTML::style("css/main-blue.css") !!}         
       {!! HTML::style("js/sweetalert-master/dist/sweetalert.css") !!} 

       {!! HTML::style("css/responsive.css") !!}


       {!! HTML::script("js/vendor/modernizr-2.8.3.min.js") !!}
       {!! HTML::script("js/queryloader2.min.js") !!}
       {!! HTML::style("css/maincamoranns.css") !!}
       {!! HTML::style("fontello/css/fontello.css") !!}

       @yield('add_styles')

       <script>
        window.addEventListener('DOMContentLoaded', function() {
          "use strict";
          new QueryLoader2(document.querySelector("body"), {
            barColor: "#3498db",
            backgroundColor: "#111",
            percentage: true,
            barHeight: 1,
            minimumTime: 200,
            fadeOutTime: 1000
          });
        });
        var alert_color_success_background = '#3498db';
        var alert_color_error_background = '#CF000F';
      </script>


    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div >

          <div class="top-bar hidden-xs header-blue">
            <div class="container ">
              <ul class="list-unstyled list-inline clearfix">
                <li class="pull-left">Bienvenido a alquilerdeautomoviles.com.co</li>
                <li class="pull-right">
                  <i class=" icon-whatsapp"></i> 310 5221789 - 310 2562047 
                </li>
                
                <li class="pull-right"> 
                  <img src="img/tarjetas.png" height="20" >
                </li>  
                <li class="pull-right"> 
                  <img src="img/logoklob.jpg" height="20" >
                </li>
              </ul>
            </div>
          </div>

          <nav id="nav" class="navbar navbar-default navbar-static-top" role="navigation">

            <div class="container">

              <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a href="{!!URL::to('/')!!}" class="navbar-brand">
                  <img class="img-responsive" src="img/logo.jpg" alt="Logo">
                </a>

              </div>

              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li>{!! link_to('/','Inicio') !!} </li>
                  <li>{!! link_to('nosotros/','Nosotros') !!} </li>
                  <li>{!! link_to('servicios/','Servicios') !!} </li>
                  <li>{!! link_to('postular/','Postular') !!} </li>
                  <li>{!! link_to('contacto/','Contacto') !!} </li>
                </ul>
              </div>            
            </div>          
          </nav>        
        </div>

        @yield('contenido')

        <footer id="footer" class="footer">
          <div class="container padding-large text-center">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">           
               <ul class="social margin-bottom-medium-2">
                <li class="facebook hvr-pulse"><a href="https://www.facebook.com/Alquiler-de-Automoviles-1540294692937774/" target="blank"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter hvr-pulse"><a href="https://twitter.com/AlquilerA" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li class="g-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <p class="copyright"><p>
                <img src="img/NR.png" width="300px">
              </p>
              
              &copy; Copyright 2016 alquilerdeautomoviles.com.co- Todos los derechos reservados.- Desarrollado por <a href="http://koolmarketing.net" target="_blank">Koolmarketing</a>
            </p>
          </div>
        </div>
      </div>
    </footer> 


 
    {!! HTML::script("js/jquery.min.js") !!}
   
    {!! HTML::script("https://maps.googleapis.com/maps/api/js?key=AIzaSyBOsiOjjoOiFBmXLU0adNjsnCKLpcDfRyI") !!}
    
    {!! HTML::script("js/vendor/bootstrap.js") !!}
    {!! HTML::script("js/wow.min.js") !!}
    {!! HTML::script("js/imagesloaded.pkgd.min.js") !!}
    {!! HTML::script("js/jquery.easing.min.js") !!}
    {!! HTML::script("js/appear.js") !!}
    {!! HTML::script("js/jquery.circliful.min.js") !!}
    {!! HTML::script("js/owl.carousel.min.js") !!}
    {!! HTML::script("js/nivo-lightbox.min.js") !!}
    {!! HTML::script("js/isotope.pkgd.min.js") !!}
    {!! HTML::script("js/notie.js") !!}
    {!! HTML::script("js/jquery.nicescroll.min.js") !!}
    {!! HTML::script("js/main.js") !!}
    {!! HTML::script("js/sweetalert-master/dist/sweetalert.min.js") !!}
    

<script>
  $(document).ready(function() {  
        $("body").niceScroll({cursorcolor: "#1595D4",cursorwidth: "10px",cursorborderradius: "1px",});
     });
</script>

   <script type="text/javascript">
       $(document).ready(function() {  
        $(".container-items-disponibles").niceScroll({cursorcolor: "#1595D4",cursorwidth: "10px",cursorborderradius: "1px",});

    });
   </script>


    
   @yield('add_scripts')  


    </body>
    </html>
