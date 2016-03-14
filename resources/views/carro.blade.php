@extends('templates.master')

@section('title')
Carro
@stop

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
          <h1 class="title-center"> Chevrolet Spark GT 2014 </h1>
        </div>


      </section> <!-- *** end Header *** -->

      <p><br></p>

      <section class="container">
        <div class="col-md-6">
          <img src="img/spark_rojo.jpg" class="img-responsive img-thumbnail">
          <br><br>
         
          {!! link_to('contratarvehiculo/','Contratar',array('class'=>'btn btn-primary btn-lg')) !!}


        </div> 

        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">Modelo: <span class="pull-right">2013</span></li>            
            <li class="list-group-item">Capacidad: <span class="pull-right">5 pasajeros</span></li>
            <li class="list-group-item">Precio por día: <span class="pull-right">110.000</span></li>
<!--             <button class="btn btn-primary btn-md btn-block" id="more-info"><h4 class="title-w">Ver más Información</h4></button>
 -->
          </ul>



          <ul class="list-group">
            <li class="list-group-item text-center">Requesitos</li>
            <li class="list-group-item">Documento: <span class="pull-right">Cédula de Ciudadanía o Pasaporte</span></li>
            <li class="list-group-item">Licencia de conducción vigente: <span class="pull-right">(nacional o extranjera)</span></li>
            <li class="list-group-item">Depósito: <span class="pull-right">1.600.000</span></li>
          </ul>

          
         <!--  <button class="btn btn-success btn-lg pull-right" id="btn-mostrar">Más Detalles</button>
 -->
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Más detalles
</button>
<div class="collapse" id="collapseExample">
  
  <br><br>
       <div class='list-group list-pop col-md-7'><a href='#' class='list-group-item'><b>Marca:</b> <span class='pull-right'>Marca</span> </a><a href='#' class='list-group-item'><b>Linea:</b> <span class='pull-right'>Linea</span> </a><a href='#' class='list-group-item'><b>Modelo:</b><span class='pull-right'>Modelo</span></a><a href='#' class='list-group-item'><b>Color:</b><span class='pull-right'>Color</span></a> <a href='#' class='list-group-item'><b>Transmisión:</b><span class='pull-right'>Transmisión</span></a> <a href='#' class='list-group-item'><b>Combustible:</b><span class='pull-right'>Combustible</span></a><a href='#' class='list-group-item'><b>Pasajeros:</b><span class='pull-right'>Pasajeros</span></a> <a href='#' class='list-group-item'><b>Precio por día:</b><span class='pull-right'>Valor</span></a></div><div class='list-group list-pop col-md-5'> <a href='#' class='list-group-item'>Aire acondicionado<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Frenos ABS<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Cojinería de Cuero<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Airbag Conductor<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Airbag Copiloto<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Permite mascotas<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Entrega a domicilio<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Radio<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>CD/MP3<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>USB/MP3<span class='pull-right'><i class='icon-check'></i></span></a></div>
  
</div>
        </div>







      </section>

     


  @stop


  @section('add_scripts')
  <script type="text/javascript">


    $("#btn-mostrar").click(function(){
        $("#delalles").toggle();
    });


    $("#more-info").click(function(event) {
      swal({ 
      title:"<h3 class='h3-grey-title'>Información general</h3>", 
        text: "<div class='list-group list-pop col-md-7'><a href='#' class='list-group-item'><b>Marca:</b> <span class='pull-right'>Marca</span> </a><a href='#' class='list-group-item'><b>Linea:</b> <span class='pull-right'>Linea</span> </a><a href='#' class='list-group-item'><b>Modelo:</b><span class='pull-right'>Modelo</span></a><a href='#' class='list-group-item'><b>Color:</b><span class='pull-right'>Color</span></a> <a href='#' class='list-group-item'><b>Transmisión:</b><span class='pull-right'>Transmisión</span></a> <a href='#' class='list-group-item'><b>Combustible:</b><span class='pull-right'>Combustible</span></a><a href='#' class='list-group-item'><b>Pasajeros:</b><span class='pull-right'>Pasajeros</span></a> <a href='#' class='list-group-item'><b>Precio por día:</b><span class='pull-right'>Valor</span></a></div><div class='list-group list-pop col-md-5'> <a href='#' class='list-group-item'>Aire acondicionado<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Frenos ABS<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Cojinería de Cuero<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Airbag Conductor<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Airbag Copiloto<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Permite mascotas<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Entrega a domicilio<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Radio<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>CD/MP3<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>USB/MP3<span class='pull-right'><i class='icon-check'></i></span></a></div>", html: true });
   });

 </script>


 @stop