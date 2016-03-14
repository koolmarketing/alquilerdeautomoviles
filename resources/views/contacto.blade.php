@extends('templates.master')

@section('title')
Contacto
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
       		</a>
       	</div>
       	<div id="titulo">
       		<h1 class="title-center"> Contáctenos </h1>
       	</div>


       </section> <!-- *** end Header *** -->

       <div class="container main-container">				

       	<br>
       	<div class="col-md-4 col-sm-8">	
       	{!! HTML::image('img/servicioalcliente.jpg','',array('class'=>'img-responsive img-thumbnail')) !!}

       		<ul class="list-group list-sm-cam">
       			<li class="list-group-item "><b class="icon-mobile-2"> Teléfonos</b> <span class="pull-right">310 5221789 - 310 2562047</span></li>
       			<li class="list-group-item"><b class="icon-mail-8"> Email</b> <span class="pull-right">info@alquilerdeautomoviles.com.co</span></li>
       			
       		</ul>
       	</div>

       	<div class="col-sm-12 col-md-7  col-xs-12">

       		

{!! Form::open(array('class'=>'contact-form','method' => 'post', 'url' => 'contactopersona')) !!}

       		<h3 class="text-center h3-grey-title">Servicio al Cliente</h3><br>

       		<form id="main-contact-form" class="contact-form cam-form" name="contact-form" method="post" action="http://sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/sendemail.php" role="form">
       			<div class="row">

       				<div class="col-md-6">
       					<div class="form-group">
       						<label for="name" class="sr-only">Nombre: </label>
       						<input type="text" class="form-control" name="nombre" id="name" required="required" placeholder="SU NOMBRE">
       					</div>
       				</div>

       				<div class="col-md-6">
       					<div class="form-group">
       						<label for="email" class="sr-only">Email: </label>
       						<input type="text" class="form-control" name="email" id="email" required="required" placeholder="EMAIL">
       					</div>
       				</div>

       				<div class="col-md-6">
       					<div class="form-group">
       						<label for="phoneno" class="sr-only">Teléfono: </label>
       						<input type="text" class="form-control" name="telefono" id="phoneno" required="required" placeholder="TELÉFONO">
       					</div>
       				</div>

       				<div class="col-md-6">
       					<div class="form-group">
       						<label for="subject" class="sr-only">Asunto: </label>
       						<input type="text" class="form-control" name="asunto" id="asunto" required="required" placeholder="ASUNTO">
       					</div>
       				</div>

       				<div class="col-xs-12">
       					<div class="form-group">
       						<label for="message" class="sr-only">Mensaje: </label>
       						<textarea class="form-control" rows="3" name="mensaje" id="message" required="required" placeholder="SU MENSAJE"></textarea>
       					</div>
       				</div>

       				<div class="col-xs-12 text-center">
       					{!! Form::submit('Enviar',array('class' => 'btn btn-lg btn-block btn-secondary text-uppercase')) !!}  
       				</div>
       			</div>
       		{!! Form::close() !!}
       		
       	</div>






       </div>
   </div>

   <div class="container main-container"> <div class="col-md-10 col-md-offset-1"> <br><br><br>
   	<div class="col-md-6 contact-item">
   	<span class="col-md-12 subtitle-cam center-text">Alquiler de Automóviles</span>
   		<!-- <img src="http://dummyimage.com/500x240/cccccc/686a82.gif&text=placeholder+image" alt="placeholder+image" class="img-responsive"> -->
   		
   		<a href="{!!URL::to('alquiler')!!}">{!! HTML::image('img/alquilar1.jpg','',array('class'=>' img-responsive')) !!}</a>
   		
   	</div>


   	<div class="col-md-6 contact-item">
   	<span class="col-md-12 subtitle-cam center-text">Postula tu carro</span>
   		<a href="/postular"></a>


   		<a href="{!!URL::to('postular')!!}">{!! HTML::image('img/postular1.jpg','',array('class'=>' img-responsive')) !!}</a>
   		
   	</div>
	</div>
   </div>

   


   @stop

@section('add_scripts')

   @if ($status=="enviado")
<script>
  // alert('Su carro ha sido registrado de manera exitosa, en este momento esta en revisión, nos comunicaremos con usted muy pronto');

  swal({
                  title: "Gracias !",
                  text: "Su mensaje se ha enviado exitosamente",
                  type: "success"
                });
</script>
@endif

@stop