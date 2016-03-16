@extends('templates.master')

@section('contenido')


<!-- =========================
       Header
       ============================== -->
       <section class="header-pages alquiler">

       	<!-- *****  Logo ***** -->
       	<div class="logo-container text-center">
       		<a href="#">
       			<img src="img/logo-header.png" class="logo-banner" width="220px" alt="">
       		</a>
       	</div>
       	<div id="titulo">
       		<h1 class="title-center"> Alquila un Automovil </h1>
       	</div>


       </section> <!-- *** end Header *** -->


   <!-- =========================
       Portfolio
       ============================== -->
       <section id="portfolio" class="portfolio padding-large text-center">
       	<div class="container margin-bottom-medium">
       		<div class="row margin-bottom-medium wow fadeInUp">

       			<div class="col-md-10 col-md-offset-1">
       				<div class="subtitle">Tenemos distintos vehículos para atender sus necesidades de movilidad.</div>
       				<p>En esta galería encontraras toda la oferta de vehículos que tenemos disponible en este momento</p>
       			</div>
       		</div> <!-- *** end row *** -->

       		<!-- *****  Portfolio Filters ***** -->
       		<div class="filters">
       			<ul class="wow lightSpeedIn">
       				<li><a href="#" data-filter="*" class="active"><i class="icon-grid"></i></a></li>
       				<li><a href="#" data-filter=".Sedan">Autos</a></li>
       				<li><a href="#" data-filter=".Camioneta">Camionetas</a></li>
       				<li><a href="#" data-filter=".Campero">Camperos</a></li>
       				<li><a href="#" data-filter=".minivan">minivan</a></li>
       				<li><a href="#" data-filter=".buse_buseta">Buses y busetas</a></li>              
       			</ul>
       		</div> <!-- *** end filters *** -->
       	</div> <!-- *** end container *** -->

       	<!-- *****  Portfolio  wrapper ***** -->
       	<div class="portfolio-wrapper margin-bottom-medium">

            <!-- =========================
               Portfolio item
               ============================== -->

               @foreach ($carros as $carro)

                <div class="portfolio-item {!! $carro->carroceria !!}">
                <div class="portfolio">
                  <a href="{!! URL::to('/') !!}/carro/{!! $carro->id !!}" data-lightbox-gallery="portfolio">
                    <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_1 !!}" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                      <h2 class="margin-bottom-small">
                       {!! $carro->marca !!}
                        <strong class="white-color bold-text">{!! $carro->linea !!}</strong>
                      </h2>
                      
                    </div><!-- END PORTFOLIO OVERLAY -->
                  </a>
                </div>
               </div> <!-- *** end portfolio-item *** -->

               @endforeach






         </section> 



         <section id="promote" class="promote main-bg white-color">
         	<div class="container">
         		<div class="row">
         			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-4 text-center">
         				<p class="light-text" style="font-family:'Open Sans', sans-serif;">Si requiere más información</p>
         			</div>
         			<div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-8 button-container">
         				<a href="#" class="button deep hvr-grow">Asesoría</a>
         				<span class="margin-right-small margin-left-small">ó</span>
         				<a href="#" class="button light hvr-grow">Enviar mensaje</a>
         			</div>
         		</div>
         	</div>
         </section> <!-- *** end promote *** -->


         @stop