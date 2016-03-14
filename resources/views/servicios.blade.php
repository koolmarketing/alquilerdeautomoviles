@extends('templates.master')


@section('contenido')

<!-- =========================
       Header
       ============================== -->
       <section class="header-pages nosotros">

       	<!-- *****  Logo ***** -->
       	<div class="logo-container text-center">
       		<a href="#">
       			<img src="img/logo-header.png" class="logo-banner" width="220px" alt="">
       		</a><br>
       	</div>
       	<div id="titulo">
       		<h1 class="title-center"> SERVICIOS </h1>
       	</div>


       </section> <!-- *** end Header *** -->




    <!-- =========================
       About Us
       ============================== -->
       <section id="about-us" class="about-us">
       	<div class="overlay">
       		<div class="container padding-top-large">
       			<!-- Alquiler de automoviles -->

       			<div class="col-md-12">
       				<div class="col-md-6">
       					<h3>Alquila un automovil !</h3>
       					<p>
       						En alquilerdeautomoviles.com.co queremos que consigas el mejor servicio y a una tarifa que no exceda tu presupuesto, consulta aquí.
       					</p>
       					{!! link_to("alquiler","ver galería",array("class"=>"btn btn-info btn-sm")) !!}
       				</div>

       				<div class="col-md-6">
       					<img src="img/hombreycarro.jpg" alt="" class="img-responsive img-thumbnail">
       				</div> 
       			</div>

       			<br>
       		</div>
       	</div>

       </section> <!-- *** end About Us *** -->


    <!-- =========================
       About Us
       ============================== -->
       <section id="about-us" class="about-us">
       	<div class="overlay">
       		<div class="container padding-top-large">
       			<!-- Alquiler de automoviles -->


       			<div class="col-lg-12 padding-bottom-medium">


       				<div class="col-md-12">
       					<div class="col-md-6">
       						<img src="img/carros-alquiler.jpg" alt="" class="img-responsive img-thumbnail">
       					</div> 

       					<div class="col-md-6">
       						<h3>Gane dinero con su automovil</h3>
       						<p> Nuestra meta general es lograr que nuestros usuarios puedan generar ingresos extra ayudando y proporsionando, un servicio seguro y rentable, le animamos a inscribirse y nos contactaremos con usted.  </p>

                                                 {!! link_to("postular","Postularme",array("class"=>"btn btn-info btn-sm")) !!}
                                          </div>

                                   </div>

                            </div>

                            <br>
                     </div>
              </div>

       </section> <!-- *** end About Us *** -->




    <!-- =========================
       About Us
       ============================== -->
       <section id="about-us" class="about-us">
       	<div class="overlay">
       		<div class="container padding-top-large">
       			<!-- Alquiler de automoviles -->

       			<div class="col-md-12 padding-bottom-medium">
       				<div class="col-md-6">
       					<h3>Servicios complementarios</h3>
       					<p>
       						Contamos con varios complementos para hacer mucho más agradable su servicio.
       					</p>
                                      {!! link_to("servicioscomplementarios","Ver Más",array("class"=>"btn btn-info btn-sm")) !!} 
                               </div>

                               <div class="col-md-6">
                                     <img src="img/hombreypuertadecarro.jpg" alt="" class="img-responsive img-thumbnail">
                              </div> 
                       </div>

                       <br>
                </div>
         </div>
  </section>






    <!-- =========================
       Promote
       ============================== -->
       <section id="promote" class="promote main-bg white-color">
       	<div class="container">
       		<div class="row">
       			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-4 text-center">
       				<p class="light-text" style="font-family:'Open Sans', sans-serif;">Si requiere más información</p>
       			</div>
       			<div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-8 button-container">
       				<a href="{!! URL::to('nosotros') !!}" class="button deep hvr-grow">Nosotros</a>
       				<span class="margin-right-small margin-left-small">ó</span>
       				<a href="{!! URL::to('contacto') !!}" class="button light hvr-grow">Enviar mensaje</a>
       			</div>
       		</div>
       	</div>
       </section> <!-- *** end promote *** -->


       @stop