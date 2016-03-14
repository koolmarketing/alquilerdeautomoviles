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
       		<h1 class="title-center"> NOSOTROS </h1>
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
                <h3 class="sub-title-nosotros h2-grey-title ">Nuestra Razón de Ser</h3><br>
                <p class="text-justify">
                 Estar preparado es importante, saber esperar lo es aún más,  aprovechar el momento adecuado es la clave de la vida. Nacimos para brindar el mejor servicio y oportunidad de mejorar la calidad de vida de nuestros clientes y equipo de trabajo.
               </p>
               <hr>

               <h3 class="sub-title-nosotros h2-grey-title ">Responsabilidad social empresarial</h3><br>
               <p class="text-justify"> Fomentamos una forma adicional de generar diversas fuentes de ingresos adicionales con su (pasivo) actual un Vehículo, dando la oportunidad a otros usuarios vivir kilómetros de experiencia.</p>

             </div>

             <div class="col-md-6">
             <!--  <img src="img/st-1.jpg" class="img-responsive img-thumbnail">
 -->
              <video width="500" height="360" controls>
  <source src="videos/Alquiler de automoviles 1.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video>

              <br><br><br>
            </div>

          </div>


          <div class="col-lg-12 padding-bottom-medium">

            <div class="col-md-6">
              <h3 class="sub-title-nosotros h2-grey-title">Visión</h3>
              <p class="text-justify">Somos una empresa dispuesta a brindar soluciones integrales con  alta calidad  y cultura de servicio a nuestro país y sus visitantes, impactando de forma sostenible la economía de las familias y empresas  del mercado Colombiano y exterior con un gran reconocimiento para el 2019.</p>
            </div>

            <div class="col-md-6">
              <h3 class="sub-title-nosotros h2-grey-title">Misión</h3>
              <p class="text-justify">Nos dedicamos a proveer servicios integrales de alquiler de vehículos y generar oportunidades de ingresos adicionales a través de nuestro sistema y nuestra promesa de valor “servimos con calidad y responsabilidad social. </p>
            </div>
          </div>
          
        </div>



        <div class="container ">
          <div class="col-lg-12 padding-bottom-medium">
            <br>
            <h2 class="sub-title-nosotros h2-grey-title text-center">Nuestros Valores Corporativos</h2>
            <br>

            <div class="col-md-3">
             <span class="col-md-12 titulos_valores text-center">Servicio</span>
             <img src="img/servicio1.jpg" alt="" class="img-responsive">

           </div>

           <div class="col-md-3">
            <span class="col-md-12 titulos_valores text-center">Confianza</span>
            <img src="img/confianza1.jpg" alt="" class="img-responsive">

          </div>

          <div class="col-md-3">
            <div class="col-md-12 titulos_valores text-center">Responsabilidad</div> 
            <img src="img/responsabilidad1.jpg" alt="" class="img-responsive"> 

          </div>

          <div class="col-md-3">
            <span class="col-md-12 titulos_valores text-center">Amor</span>
            <img src="img/amor.jpg" alt="" class="img-responsive">
            
          </div>
        </div>
      </div>


    </div>

  </section> <!-- *** end About Us *** -->

  @stop