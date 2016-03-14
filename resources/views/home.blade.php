@extends('templates.master')

@section('add_styles')
<link href='https://fonts.googleapis.com/css?family=Raleway:300italic' rel='stylesheet' type='text/css'>
@stop
@section('contenido')

 <!-- =========================
       Header
       ============================== -->
       <header id="header">
        <div id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li  data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for Slides -->
          <div class="carousel-inner">

            <!-- *****  Logo ***** -->
            <div class="logo-container logo-home">
              <a href="#">
                <img src="img/logo-header.png" width="220px" alt="">
              </a>
            </div> 

                <!-- =========================
                   Header item 1
                   ============================== -->
                   <div class="item active">

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-4.jpg');">
                    </div>
                    <div class="carousel-caption cm-padding-40">
                      <h1 class="title-slide-cm sombra">Vive Kilometros de Experiencia !</h1>
                      <h1 class="title-slide-cm">¿Necesitas un auto?</h1>
                      
                      <h2 class="light titulos_banner">Te lo podemos  alquilar!</h2><br>
                      <div class="call-button">
                        <div class="row">
                          <div class="">

                           {!! link_to('alquiler','Ver Carros',array('class'=>'btn btn-lg btn-primary')) !!}
                         </div>
                         <!--  <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="contacto" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Contactanos</a>
                          </div> -->
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                    <div class=""></div>
                  </div>

                <!-- =========================
                   Header item 2
                   ============================== -->
                   <div class="item">

                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-1.jpg');"></div>
                    <div class="carousel-caption cm-padding-40">
                      <h1 class="title-slide-cm sombra">Mi carro es tu carro!</strong></h1>
                      
                      <h2 class="light titulos_banner">Lógra ingresos extras con tu carro </h2><br>


                      <div class="call-button">
                        <div class="row">
                          <div class="">

                           {!! link_to('postular','Postular mi carro',array('class'=>'btn btn-lg btn-primary')) !!}
                         </div>

                         <div class="clearfix"></div>
                       </div>
                     </div>
                   </div>
                   <div class=""></div>
                 </div>

                <!-- =========================
                   Header item 3
                   ============================== -->
                   <div class="item ">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-2.jpg');"></div>

                    <div class="carousel-caption">
                      <h1 class="light mab-none"></strong></h1>
                      
                      <h2 class="light titulos_banner"> </h2><br>
                      <div class="call-button">
                        <div class="row">
                          <div class="col-md-3 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-12">

                          </div>


                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>

                    <div class=""></div>
                  </div>

                <!-- =========================
                   Header item 4
                   ============================== -->
                   <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-3.jpg');"></div>
                    <div class="carousel-caption cm-padding-40">
<!--                       <h1 class="light mab-none">Vive Kilometros de <br><strong class="bold-text">Experiencia</strong></h1>
-->                      
<h2 class="title-slide-cm sombra title-50">Hemos ganado dinero con <br>nuestro carro, 
  alquilándoselo a otras<br> personas y empresas de forma segura. </h2><br>


  <div class="call-button">
    <div class="row">
      <div class="">

        {!! link_to('contacto','Contactos',array('class'=>'btn btn-lg btn-primary')) !!}
     </div>

     <div class="clearfix"></div>
   </div>
 </div>


</div>
<div class=""></div>
</div>



<!-- Carousel Controls -->
<a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
  <span class="icon-prev icon-arrow-left"></span>
</a>
<a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
  <span class="icon-next icon-arrow-right"></span>
</a>
</div>
</header>

<section id="call-to-action" class="call-to-action main-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 wow slideInLeft animated">
        <p class="light-text" style="font-family:'Open Sans', sans-serif;"> Conoce más sobre alquilerdeautomoviles.com.co</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 button-container wow slideInRight animated">
        <a href="nosotros" class="button light internal-link pull-left hvr-grow">Nosotros</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section> 
<section id="about-us" class="about-us">
  <div class="overlay">

   <div class="container padding-top-large">

    <div class="col-lg-12">

      <div class="col-md-4 service-cms">
        <img src="img/st-2.jpg" alt="placeholder+image" class="img-responsive">
        <span>
          <h3 class="text-center">Alquiler de Automoviles</h3>
        </span>
        <div>
          <p>
            Anímate a vivir y recorrer las carreteras de Colombia sin la necesidad de tener un carro propio.
          </p>  
          <span class="compartir">                          
            {!! link_to("alquiler","ver más", array("class"=>"btn btn-default")) !!}
          </span>      
        </div>
      </div>

      <div class="col-md-4 service-cms">
        <img src="img/st-1.jpg" alt="placeholder+image" class="img-responsive">
        <span>
          <h3 class="text-center">Postula tu carro</h3>
        </span>
        <div>
          <p>
            Gana ingresos adicionales de forma segura con tu <br>automóvil.
          </p>  
          <span class="compartir">

            {!! link_to("postular","ver más", array("class"=>"btn btn-default")) !!}
          </span>      
        </div>
      </div>

      <div class="col-md-4 service-cms">
        <img src="img/st-3.jpg" alt="placeholder+image" class="img-responsive">
        <span>
          <h3 class="text-center">Servicios Complementarios</h3>
        </span>
        <div>
          <p>
            Tenemos distintos servicios y productos para complementar la experiencia de su recorrido.
          </p>  
          <span class="compartir">
           {!! link_to("servicioscomplementarios","ver más", array("class"=>"btn btn-default")) !!}
         </span>      
       </div>
     </div>


     <div class="col-md-12 text-center center-text">

      <h2 class="text-center" style="font-size: 29px; color:#666666; font-family: 'Helvetica',Arial; font-weight: 600; ">¿Cómo funciona?</h2>

      <video width="520" height="340" controls>
        <source src="videos/Alquiler de automoviles 1.mp4" type="video/mp4">

          Your browser does not support the video tag.
        </video><br><br>
      </div>

    </div>


  </div>
</div>
</section> 
<section id="case-study" class="case-study">
  <div class="row mar-none mat-none">

    <!-- *****  Case Study Left ***** -->
    <div class="col-md-6 case-study-left wow slideInLeft">
      <div class="overlay padding-large text-right">
        <div class="description">
          <h3 class="margin-bottom-small light-text">Recorra las carreteras de Colombia</h3>
          <p>Busca las mejores ofertas que se adapten a su presupuesto y necesidades. </p>
        </div>
      </div>
    </div>

    <!-- *****  Case Study Right ***** -->
    <div class="col-md-6 case-study-right wow slideInRight">
      <div class="overlay padding-large">
        <div class="description">
          <h3 class="margin-bottom-small light-text">Postule con seguridad y rapidamente.</h3>
          <p>Digite el formulario de inscripción y nuestro equipo se comunicará contigo.</p>
        </div>
      </div>
    </div>
  </div>
</section> <!-- *** end Case Study *** -->




    <!-- =========================
       Testimonial
       ============================== -->
       <section id="testimonial" class="testimonial padding-large white-color text-center">
        <div class="container">
          <div class="row">
            <h2 class="margin-bottom-medium">Comentarios de  <strong class="bold-text">Nuestros Usuarios</strong></h2>
            <div class="col-md-10 col-md-offset-1">

              <!-- *****  Carousel start ***** -->
              <div id="testimonial-carousel" class="owl-carousel owl-theme testimonial-carousel">


               <div class="item margin-bottom-small"> <!-- ITEM START -->
                <p>He recibido un buen servicio, pude alquilar un carro muy fácil y la verdad es que estoy satisfecho, por el carro y por el precio.</p>
                <div class="client margin-top-medium clearfix">
                  <img src="img/testimonial/testimonial-1.jpg" height="50" width="50" alt="Client Image">
                  <ul class="client-info main-color">
                    <li><strong>Francisco Herrera</strong></li>
                    <li>Usuario de alquilerdeautomoviles.com.co</li>
                  </ul>
                </div>
              </div> <!-- ITEM END -->

              <div class="item"> <!-- ITEM START -->
                <p>Estoy muy agradecido gracias a esta herramienta página pude conseguir un carro a un buen precio y pude visitar a mi familia con mi esposa y mis hijos.</p>
                <div class="client margin-top-medium">
                  <img src="img/testimonial/testimonial-2.jpg" alt="Client Image" class="grayscale">
                  <ul class="client-info main-color">
                    <li>Jhon Cardona</li>
                    <li>Usuario de alquilerdeautos.com.co</li>
                  </ul>
                </div>
              </div> <!-- ITEM END -->

              <div class="item"> <!-- ITEM START -->
                <p>Con alquierdeautomoviles.com.co estoy ganando dinero ya que prácticamente no uso mucho mi carro, siempre lo tenía en el garaje ahora siempre tengo solicitudes de alquiler y eso me ha traído beneficios extras.</p>
                <div class="client margin-top-medium">
                  <img src="img/testimonial/testimonial-1.jpg" alt="Client Image" class="grayscale">
                  <ul class="client-info main-color">
                    <li>Marcos Lopera</li>
                    <li>Usuario de alquilerdeautos.com.co</li>
                  </ul>
                </div>
              </div> 

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="promote" class="promote main-bg white-color">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-4 text-center">
            <p class="light-text" style="font-family:'Open Sans', sans-serif;">Si requiere más información</p>
          </div>
          <div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-8 button-container">
            <a href="{!! URL::to('nosotros') !!}" class="button deep hvr-grow">Sobre Nosotros</a>
            <span class="margin-right-small margin-left-small">ó</span>
            <a href="{!! URL::to('contacto') !!}" class="button light hvr-grow">Enviar mensaje</a>
          </div>
        </div>
      </div>
    </section> 

    @stop