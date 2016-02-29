@extends('templates.master')

@section('title')
Contacto
@stop

@section('add_styles')
<script src='https://www.google.com/recaptcha/api.js'></script>
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
       		<h1 class="title-center"> Contratar un Vehículo </h1>
       	</div>


       </section> <!-- *** end Header *** -->

       <div class="container main-container">				



       	<div class="row">





       	</div>

       	<div class="col-sm-6 col-xs-12">
       		<div class="map"></div>
       	</div>
       	<br>

       	<div class="col-sm-7  col-xs-12">

       		<div>

       			<!-- Nav tabs -->
       			<ul class="nav nav-tabs" role="tablist">
       				<li role="presentation" class="active persona_natural"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Persona Natural</a></li>
       				<li role="presentation" class="empresas"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Empresas</a></li>		
       			</ul>

       			<!-- Tab panes -->
       			<div class="tab-content">
       				<div role="tabpanel" class="tab-pane active" id="home">
       					<br>
       					<form id="main-contact-form" class="contact-form cam-form" name="contact-form" method="post" action="http://sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/sendemail.php" role="form">
       						<div class="row">

       							<div class="col-md-12">
       								<div class="col-md-5 item-carro-imagen">
       									{!! HTML::image('img/thum/sparkrojo.jpg','',array('class'=>'img-responsive img-thumbnail')) !!}
       								</div>
       								<div class="col-md-7 item-carro-list">
       									<span>Seleccionado</span>
       									<span class="col-sm-12">Chevrolet Spark GT 2014</span>
       									<span class="col-sm-12 text-right">110.000 pesos/día</span>

       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<div class="col-md-12"><h4 class="title-cam-h3">Fecha de Contratación</h4><br></div>   								
       									
       								</div>
       								<div class="col-md-6">	
       									<input type="text" class="form-control some_class" value="" id="date_timepicker_start" placeholder="INICIAL" />
       								</div>
       								<div class="col-md-6">	
       									<input type="text" class="form-control some_class" value="" id="date_timepicker_end" placeholder="FINAL" />
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="name" class="sr-only">Documento: </label>
       									
       									<select name="" id="input" class="form-control" required="required" placeholder="TIPO DE DOCUMENTO">
       										<option value="">TIPO DE DOCUMENTO</option>
       										<option value="">1</option>
       										<option value="">1</option>
       										<option value="">1</option>
       									</select>
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="name" class="sr-only">Número: </label>
       									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="NÚMERO DE DOCUMENTO">
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="name" class="sr-only">Nombre: </label>
       									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="SU NOMBRE COMPLETO">
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
       									<input type="text" class="form-control" name="phoneno" id="phoneno" required="required" placeholder="TELÉFONO FIJO">
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="subject" class="sr-only">Teléfono Movil: </label>
       									<input type="text" class="form-control" name="subject" id="asunto" required="required" placeholder="TELÉFONO MOVIL">
       								</div>
       							</div>

       							<div class="col-xs-12">
       								<div class="form-group">
       									<label for="message" class="sr-only">Mensaje: </label>
       									<textarea class="form-control" rows="4" name="message" id="message" required="required" placeholder="INFORMACIÓN ADICIONAL"></textarea>
       								</div>
       							</div>

       							<div class="col-md-12">
       								<div class="form-group">
       									<div class="g-recaptcha" data-sitekey="6Lc6MxkTAAAAAJGKu4W561DFO8pk6amhSyBcqG85"></div>
       								</div>
       							</div>

       							<div class="col-xs-12">
       								<input type="submit" class="btn btn-lg btn-block btn-primary text-uppercase" value="SOLICITAR SERVICIO DE ALQUILER">
       							</div>
       						</div>
       					</form>
       				</div>
       				<div role="tabpanel" class="tab-pane" id="profile">
       					<br>
       					<form id="main-contact-form" class="contact-form cam-form" name="contact-form" method="post" action="http://sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/sendemail.php" role="form">
       						<div class="row">

       							<div class="col-md-12">
       								<div class="col-md-5 item-carro-imagen">
       									{!! HTML::image('img/thum/sparkrojo.jpg','',array('class'=>'img-responsive img-thumbnail')) !!}
       								</div>
       								<div class="col-md-7 item-carro-list">
       									<span>Seleccionado</span>
       									<span class="col-sm-12">Chevrolet Spark GT 2014</span>
       									<span class="col-sm-12 text-right">110.000 pesos/día</span>

       								</div>
       							</div>

       							<div class="col-md-12">
       								<div class="form-group">
       									<label for="name" class="sr-only">NOMBRE DE LA EMPRESA: </label>
       									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="NOMBRE DE LA EMPRESA">
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<div class="col-md-12"><h4 class="title-cam-h3">Fecha de Contratación</h4><br></div>   								
       									
       								</div>
       								<div class="col-md-6">	
       									<input type="text" class="form-control some_class" value="" id="date_timepicker_start1" placeholder="INICIAL" />
       								</div>
       								<div class="col-md-6">	
       									<input type="text" class="form-control some_class" value="" id="date_timepicker_end1" placeholder="FINAL" />
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="name" class="sr-only">NIT: </label>
       									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="NIT">
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="name" class="sr-only">NIT: </label>
       									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="NOMBRE DEL CONTACTO">
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
       									<input type="text" class="form-control" name="phoneno" id="phoneno" required="required" placeholder="TELÉFONO">
       								</div>
       							</div>

       							<div class="col-md-6">
       								<div class="form-group">
       									<label for="subject" class="sr-only">Asunto: </label>
       									<input type="text" class="form-control" name="subject" id="asunto" required="required" placeholder="TELÉFONO MOVIL">
       								</div>
       							</div>

       							<div class="col-xs-12">
       								<div class="form-group">
       									<label for="message" class="sr-only">Mensaje: </label>
       									<textarea class="form-control" rows="4" name="message" id="message" required="required" placeholder="MENSAJE"></textarea>
       								</div>
       							</div>




       							<div class="col-xs-12">
       								<input type="submit" class="btn btn-lg btn-block btn-primary text-uppercase" value="SOLICITAR SERVICIO DE ALQUILER">
       							</div>
       						</div>
       					</form>
       				</div>

       			</div>

       		</div>


       	</div>



       	<div class="col-md-5 container-items-disponibles">	

       		Vehiculos disponibles

       		<div class="col-md-12 item-carro-contratar">
       			<div class="col-md-5 item-carro-imagen">
       				{!! HTML::image('img/thum/hyundai_i10.jpg','',array('class'=>'img-responsive img-thumbnail','width'=>'120px')) !!}
       			</div>
       			<div class="col-md-7 item-carro-list">

       				<span class="col-sm-12">Marca Linea Modelo</span>
       				<span class="col-sm-12 text-right">110.000</span>
       				<button class="btn btn-xs btn-primary">Seleccionar</button>
       			</div>

       		</div>


       		<div class="col-md-12 item-carro-contratar">
       			<div class="col-md-5 item-carro-imagen">
       				{!! HTML::image('img/thum/hyundai_i10.jpg','',array('class'=>'img-responsive img-thumbnail','width'=>'120px')) !!}
       			</div>
       			<div class="col-md-7 item-carro-list">

       				<span class="col-sm-12">Marca Linea Modelo</span>
       				<span class="col-sm-12 text-right">110.000</span>
       				<button class="btn btn-xs btn-primary">Seleccionar</button>
       			</div>

       		</div>




       		<div class="col-md-12 item-carro-contratar">
       			<div class="col-md-5 item-carro-imagen">
       				{!! HTML::image('img/thum/hyundai_i10.jpg','',array('class'=>'img-responsive img-thumbnail','width'=>'120px')) !!}
       			</div>
       			<div class="col-md-7 item-carro-list">

       				<span class="col-sm-12">Marca Linea Modelo</span>
       				<span class="col-sm-12 text-right">110.000</span>
       				<button class="btn btn-xs btn-primary">Seleccionar</button>
       			</div>

       		</div>



       		<div class="col-md-12 item-carro-contratar">
       			<div class="col-md-5 item-carro-imagen">
       				{!! HTML::image('img/thum/hyundai_i10.jpg','',array('class'=>'img-responsive img-thumbnail','width'=>'120px')) !!}
       			</div>
       			<div class="col-md-7 item-carro-list">

       				<span class="col-sm-12">Marca Linea Modelo</span>
       				<span class="col-sm-12 text-right">110.000</span>
       				<button class="btn btn-xs btn-primary">Seleccionar</button>
       			</div>

       		</div>

       		       		<div class="col-md-12 item-carro-contratar">
       			<div class="col-md-5 item-carro-imagen">
       				{!! HTML::image('img/thum/hyundai_i10.jpg','',array('class'=>'img-responsive img-thumbnail','width'=>'120px')) !!}
       			</div>
       			<div class="col-md-7 item-carro-list">

       				<span class="col-sm-12">Marca Linea Modelo</span>
       				<span class="col-sm-12 text-right">110.000</span>
       				<button class="btn btn-xs btn-primary">Seleccionar</button>
       			</div>

       		</div>

       		       		<div class="col-md-12 item-carro-contratar">
       			<div class="col-md-5 item-carro-imagen">
       				{!! HTML::image('img/thum/hyundai_i10.jpg','',array('class'=>'img-responsive img-thumbnail','width'=>'120px')) !!}
       			</div>
       			<div class="col-md-7 item-carro-list">

       				<span class="col-sm-12">Marca Linea Modelo</span>
       				<span class="col-sm-12 text-right">110.000</span>
       				<button class="btn btn-xs btn-primary">Seleccionar</button>
       			</div>

       		</div>



       	</div>


       </div>




       @stop

       @section('add_scripts')

       <script type="text/javascript" src="js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
       <script>
       	$(document).ready(function() {
       		jQuery(function(){
       			jQuery('#date_timepicker_start').datetimepicker({
  //format:'Y/m/d',
  onShow:function( ct ){
  	this.setOptions({
  		maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
  	})
  },
  timepicker:true
});
       			jQuery('#date_timepicker_end').datetimepicker({
  //format:'Y/m/d',
  onShow:function( ct ){
  	this.setOptions({
  		minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
  	})
  },
  timepicker:true
});
       		});
       	});
       </script>

       <script>
       	$(document).ready(function() {
       		jQuery(function(){
       			jQuery('#date_timepicker_start1').datetimepicker({
  //format:'Y/m/d',
  onShow:function( ct ){
  	this.setOptions({
  		maxDate:jQuery('#date_timepicker_end1').val()?jQuery('#date_timepicker_end1').val():false
  	})
  },
  timepicker:true
});
       			jQuery('#date_timepicker_end1').datetimepicker({
  //format:'Y/m/d',
  onShow:function( ct ){
  	this.setOptions({
  		minDate:jQuery('#date_timepicker_start1').val()?jQuery('#date_timepicker_start1').val():false
  	})
  },
  timepicker:true
});
       		});
       	});
       </script>

       <script type="text/javascript">
       	
       	$(".persona_natural").click(function(event) {
       		
       		swal({   title: "<h1>Persona Natural!</h1>",   text: "<b>Si quieres alquilar un vehículo de manera personal y no por medio de una empresa debes llenar este formulario.</b>",   html: true });
       	});

       	$(".empresas").click(function(event) {
       		
       		swal({   title: "<h1>Empresas!</h1>",   text: "<b>Si vas a realizar un alquiler por medio de una compañía debes llenar este formulario y tener la información para  los campos adicionales que te solicitamos.</b>",   html: true });
       	});

       </script>


       @stop