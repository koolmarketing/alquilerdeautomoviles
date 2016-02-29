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
       				<li><a href="#" data-filter=".automovil">Autos</a></li>
       				<li><a href="#" data-filter=".camioneta">Camionetas</a></li>
       				<li><a href="#" data-filter=".campero">Camperos</a></li>
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
               <div class="portfolio-item automovil">
               	<div class="portfolio">
               		<a href="carro" data-lightbox-gallery="portfolio">
               			<img src="img/carros/spark-rojo.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
               			<div class="portfolio-overlay hvr-rectangle-out">
               				<h2 class="margin-bottom-small">
               					Chevrolet 
               					<strong class="white-color bold-text">Spark</strong>
               				</h2>
               				<div class="button">Ver Carro</div>
               			</div><!-- END PORTFOLIO OVERLAY -->
               		</a>
               	</div>
               </div> <!-- *** end portfolio-item *** -->

            <!-- =========================
               Portfolio item
               ============================== -->
               <div class="portfolio-item automovil">
               	<div class="portfolio">
               		<a href="carro" data-lightbox-gallery="portfolio">
               			<img src="img/carros/hyundai-i10.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
               			<div class="portfolio-overlay hvr-rectangle-out">
               				<h2 class="margin-bottom-small">
               					hyundai
               					<strong class="white-color bold-text">I10</strong>
               				</h2>
               				<div class="button">Ver Carro</div>
               			</div><!-- END PORTFOLIO OVERLAY -->
               		</a>
               	</div>
               </div> <!-- *** end portfolio-item *** -->


                        <!-- =========================
               Portfolio item
               ============================== -->
               <div class="portfolio-item camioneta">
               	<div class="portfolio">
               		<a href="carro" data-lightbox-gallery="portfolio">
               			<img src="img/carros/mazda-cx9.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
               			<div class="portfolio-overlay hvr-rectangle-out">
               				<h2 class="margin-bottom-small">
               					Mazda
               					<strong class="white-color bold-text">CX9</strong>
               				</h2>
               				<div class="button">Ver Carro</div>
               			</div><!-- END PORTFOLIO OVERLAY -->
               		</a>
               	</div>
               </div> <!-- *** end portfolio-item *** -->


                                      <!-- =========================
               Portfolio item
               ============================== -->
               <div class="portfolio-item campero">
               	<div class="portfolio">
               		<a href="carro" data-lightbox-gallery="portfolio">
               			<img src="img/carros/toyota-fj.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
               			<div class="portfolio-overlay hvr-rectangle-out">
               				<h2 class="margin-bottom-small">
               					Toyota
               					<strong class="white-color bold-text">FJ</strong>
               				</h2>
               				<div class="button">Ver Carro</div>
               			</div><!-- END PORTFOLIO OVERLAY -->
               		</a>
               	</div>
               </div> <!-- *** end portfolio-item *** -->


                                                    <!-- =========================
               Portfolio item
               ============================== -->
               <div class="portfolio-item automovil">
               	<div class="portfolio">
               		<a href="carro" data-lightbox-gallery="portfolio">
               			<img src="img/carros/mazda-2.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
               			<div class="portfolio-overlay hvr-rectangle-out">
               				<h2 class="margin-bottom-small">
               					Mazda
               					<strong class="white-color bold-text">2</strong>
               				</h2>
               				<div class="button">Ver Carro</div>
               			</div><!-- END PORTFOLIO OVERLAY -->
               		</a>
               	</div>
               </div> <!-- *** end portfolio-item *** -->

            <!--  Portfolio item
            ============================== -->
            <div class="portfolio-item automovil">
            	<div class="portfolio">
            		<a href="carro" data-lightbox-gallery="portfolio">
            			<img src="img/carros/Kia-Rio-2016.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
            			<div class="portfolio-overlay hvr-rectangle-out">
            				<h2 class="margin-bottom-small">
            					Kia
            					<strong class="white-color bold-text">Rio 2016</strong>
            				</h2>
            				<div class="button">Ver Carro</div>
            			</div><!-- END PORTFOLIO OVERLAY -->
            		</a>
            	</div>
            </div> <!-- *** end portfolio-item *** -->


             <!--  Portfolio item
             ============================== -->
             <div class="portfolio-item minivan">
             	<div class="portfolio">
             		<a href="carro" data-lightbox-gallery="portfolio">
             			<img src="img/carros/chevrolet-minivan.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
             			<div class="portfolio-overlay hvr-rectangle-out">
             				<h2 class="margin-bottom-small">
             					Chevrolet
             					<strong class="white-color bold-text">Minivan</strong>
             				</h2>
             				<div class="button">Ver Carro</div>
             			</div><!-- END PORTFOLIO OVERLAY -->
             		</a>
             	</div>
             </div> 
             <div class="portfolio-item automovil">
             	<div class="portfolio">
             		<a href="carro" data-lightbox-gallery="portfolio">
             			<img src="img/carros/renault-logan.jpg" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
             			<div class="portfolio-overlay hvr-rectangle-out">
             				<h2 class="margin-bottom-small">
             					Renault
             					<strong class="white-color bold-text">Logan</strong>
             				</h2>
             				<div class="button">Ver Carro</div>
             			</div><!-- END PORTFOLIO OVERLAY -->
             		</a>
             	</div>
             </div> <!-- *** end portfolio-item *** -->




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