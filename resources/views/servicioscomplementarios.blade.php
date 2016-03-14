@extends('templates.master')

@section('content')
Nosotros
@stop

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
       		<h1 class="title-center"> Servicios Complementarios </h1>
       	</div>


       </section> <!-- *** end Header *** -->


       <!-- =========================
       About Us
       ============================== -->
       <section id="about-us" class="about-us">
        <div class="overlay">



          <div class="container padding-top-large">

            <div class="col-lg-12">  
              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title ">Transporte Aeropuerto Cali</h2><br><br><

                <div class="col-md-12">
                  <img src="{!! URL::to ('img/transporte_aeropuerto.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>


              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title ">Conductores</h2><br><br>

                <div class="col-md-12">
                  <img src="{!! URL::to ('img/conductor.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>


            </div>


            <div class="col-lg-12 padding-bottom-medium">
              <br><br><br>
              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title">Servicio de trámites y documentación ante el tránsito  </h2><br><br><br>
                <div class="col-md-12">
                  <img src="{!! URL::to ('img/transito.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>

              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title">Teléfono Celular  </h2><br><br><br>
                <div class="col-md-12">
                  <img src="{!! URL::to ('img/telefono_carro.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>

            </div>


            <div class="col-lg-12">  
              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title ">Silla para Bebé</h2><br><br>

                <div class="col-md-12">
                <img src="{!! URL::to ('img/silla_bebe.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>


              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title ">Recepción de Vehículos</h2><br><br><

                <div class="col-md-12">
                  <img src="{!! URL::to ('img/recepcion.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>


            </div>



            <div class="col-lg-12">  
              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title ">Alquiler de GPS</h2><br><br>

                <div class="col-md-12">
                <img src="{!! URL::to ('img/gps.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>


              <div class="col-md-6">
                <h2 class="sub-title-nosotros h2-grey-title ">Rastreador satelital de vehículos </h2><br><br><

                <div class="col-md-12">
                  <img src="{!! URL::to ('img/rastreo.jpg')!!}" alt="" class="img-responsive img-thumbnail">
                </div>
              </div>


            </div>



          </div>


        </div>

      </section> <!-- *** end About Us *** -->

      @stop