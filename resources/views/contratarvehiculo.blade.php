@extends('templates.master')

@section('title')
Contacto
@stop

@section('add_styles')
<link href='https://fonts.googleapis.com/css?family=Raleway:300italic' rel='stylesheet' type='text/css'>
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
       			<img src="{!! URL::to('/') !!}/img/logo-header.png" class="logo-banner" width="220px" alt="">
       		</a>
       	</div>
       	<div id="titulo">
       		<h1 class="title-center"> Contratar un Vehículo </h1>
       	</div>


       </section> <!-- *** end Header *** -->

       <div class="container">				

        <br><br>
        <div class="col-md-7  col-xs-12">

         <div>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
           <li role="presentation" class="active persona_natural"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class=" icon-adult"></i> Persona Natural</a></li>
           <li role="presentation" class="empresas"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="icon-commerical-building"></i> Empresas</a></li>		
         </ul>

         <!-- Tab panes -->
         <div class="tab-content">
           <div role="tabpanel" class="tab-pane active" id="home">
            <br>
            {!! Form::open(array('class'=>'contact-form','method' => 'post', 'url' => 'cotizacionpersona')) !!}

            <input type="hidden" name="carro_seleccionado" value="{!! $carroseleccionado->marca !!} {!! $carroseleccionado->linea !!} {!! $carroseleccionado->modelo !!} de {!! $carroseleccionado->propietario !!}">
            <div class="row">

              <div class="col-md-12">
               <div class="col-md-5 item-carro-imagen">
                
                <img src="{!! URL::to('/') !!}/uploads/img/{!! $carroseleccionado->foto_1 !!}" class="img-responsive img-thumbnail"alt="">
              </div>
              <div class="col-md-7 item-carro-list">


                <h4 class="title-alquiler-h3">{!! $carroseleccionado->marca !!} {!! $carroseleccionado->linea !!} {!! $carroseleccionado->modelo !!}</h4>
                <span class="label label-primary">Seleccionado</span><br><br>
                <h5 class="title-alquiler-h5"><b>{!! $carroseleccionado->precio_dia !!}</b> pesos/día</h5>

              </div>
            </div>

            <div class="col-md-6">
             <div class="form-group">
              <div class="col-md-12"><h4 class="title-alquiler-h5"><i class="icon-calendar-empty"></i> Fecha de Contratación</h4><br></div>   								

            </div>
            <div class="col-md-6">	
              <input type="text" class="form-control some_class" name="inicial" value="" id="date_timepicker_start" placeholder="INICIAL" />
            </div><br>
            <div class="col-md-6">	
              <input type="text" name="final" class="form-control some_class" value="" id="date_timepicker_end" placeholder="FINAL" />
            </div>
          </div>

          <br>

          <div class="col-md-6">
           <div class="form-group">
            <label for="name" class="sr-only">Documento: </label>

            <select name="documento" id="input" class="form-control" required="required" placeholder="TIPO DE DOCUMENTO">
            <option value="">Seleccione tipo de documento</option>
             <option value="Cédula">Cedúla</option>
             <option value="Pasaporte">Pasaporte</option>
             <option value="Pasaporte">Cedúla de Extrangería</option>

           </select>
         </div>
       </div>

       <div class="col-md-6">
         <div class="form-group">
          <label for="name" class="sr-only">Número: </label>
          <input type="text" class="form-control" name="numero_documento" id="name" required="required" placeholder="NÚMERO DE DOCUMENTO">
        </div>
      </div>

      <div class="col-md-6">
       <div class="form-group">
        <label for="name" class="sr-only">Nombre: </label>
        <input type="text" class="form-control" name="nombre" id="name" required="required" placeholder="SU NOMBRE COMPLETO">
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
    <input type="text" class="form-control" name="telefono" id="phoneno" required="required" placeholder="TELÉFONO FIJO">
  </div>
</div>

<div class="col-md-6">
 <div class="form-group">
  <label for="subject" class="sr-only">Teléfono Movil: </label>
  <input type="text" class="form-control" name="celular" id="asunto" required="required" placeholder="TELÉFONO MOVIL">
</div>
</div>

<div class="col-xs-12">
 <div class="form-group">
  <label for="message" class="sr-only">Mensaje: </label>
  <textarea class="form-control" rows="4" name="mensaje" id="message" required="required" placeholder="INFORMACIÓN ADICIONAL"></textarea>
</div>
</div>

<div class="col-xs-12">

  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
    <ol><strong>Requisitos para el Alquiler:</strong>
     <li>1. Tarjeta de crédito cupo mínimo $ 1.600.000</li>
     <li>2. Pasaporte o cédula</li>
     <li>3. Licencia de conducción (si es internacional es válida en Colombia)</li>
     <li>4. Edad mínima 23 años</li>

   </ol>
 </div>

</div>



<div class="col-xs-12">
  {!! Form::submit('SOLICITAR SERVICIO DE ALQUILER',array('class' => 'btn btn-lg btn-block btn-primary text-uppercase')) !!} 

</div>
</div>
{!! Form::close() !!}
</div>
<div role="tabpanel" class="tab-pane" id="profile">
  <br>
  {!! Form::open(array('class'=>'contact-form','method' => 'post', 'url' => 'cotizacionempresa')) !!}
  <div class="row">
  <input type="hidden" name="carro_seleccionado" value="{!! $carroseleccionado->marca !!} {!! $carroseleccionado->linea !!} {!! $carroseleccionado->modelo !!} de {!! $carroseleccionado->propietario !!}">

      <div class="col-md-12">
               <div class="col-md-5 item-carro-imagen">
                
                <img src="{!! URL::to('/') !!}/uploads/img/{!! $carroseleccionado->foto_1 !!}" class="img-responsive img-thumbnail"alt="">
              </div>
              <div class="col-md-7 item-carro-list">


                <h4 class="title-alquiler-h3">{!! $carroseleccionado->marca !!} {!! $carroseleccionado->linea !!} {!! $carroseleccionado->modelo !!}</h4>
                <span class="label label-primary">Seleccionado</span><br><br>
                <h5 class="title-alquiler-h5"><b>{!! $carroseleccionado->precio_dia !!}</b> pesos/día</h5>

              </div>
            </div>

  <div class="col-md-12">
   <div class="form-group">
    <label for="name" class="sr-only">NOMBRE DE LA EMPRESA: </label>
    <input type="text" class="form-control" name="empresa" id="name" required="required" placeholder="NOMBRE DE LA EMPRESA">
  </div>
</div>

<div class="col-md-6">
 <div class="form-group">
   <div class="col-md-12"><h4 class="title-alquiler-h5"><i class="icon-calendar-empty"></i> Fecha de Contratación</h4><br></div>     								

 </div>
 <div class="col-md-6">	
  <input type="text" class="form-control some_class" name="inicial" value="" id="date_timepicker_start1" placeholder="INICIAL" />
</div><br>
<div class="col-md-6">	
  <input type="text" class="form-control some_class" name="final" value="" id="date_timepicker_end1" placeholder="FINAL" />
</div>
</div>

<br>

<div class="col-md-6">
 <div class="form-group">
  <label for="name" class="sr-only">NIT: </label>
  <input type="text" name="nit" class="form-control" id="name" required="required" placeholder="NIT">
</div>
</div>

<div class="col-md-6">
 <div class="form-group">
  <label for="name" class="sr-only">CONTACTO: </label>
  <input type="text" class="form-control" name="contacto" id="name" required="required" placeholder="NOMBRE DEL CONTACTO">
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
  <label for="subject" class="sr-only">CELULAR: </label>
  <input type="text" class="form-control" name="celular" id="asunto" required="required" placeholder="TELÉFONO MOVIL">
</div>
</div>

<div class="col-xs-12">
 <div class="form-group">
  <label for="message" class="sr-only">MENSAJE: </label>
  <textarea class="form-control" rows="4" name="mensaje" id="message" required="required" placeholder="MENSAJE"></textarea>
</div>
</div>


<div class="col-xs-12">

  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    
    <ol><strong>Requisitos para el Alquiler:</strong>
     <li>1. Certificado Cámara de comercio con vigencia mínima 15 días</li>
     <li>2. Carta de intención firmada por el representante legal de la empresa</li>
     <li>3. Referencia Comercial y Bancaria</li>
     <li>4. Transferencia Bancaria o efectivo, al momento de retirar el vehículo.</li>
     <li>5. Tarjeta de crédito cupo mínimo 1.600.000.</li>

   </ol>
 </div>

</div>




<div class="col-xs-12">
  {!! Form::submit('SOLICITAR SERVICIO DE ALQUILER',array('class' => 'btn btn-lg btn-block btn-primary text-uppercase')) !!} 

</div>
</div>
{!! Form::close() !!}
</div>

</div>

</div>


</div>


<div class="col-md-4 col-sm-12 otros_autos hidden-sm hidden-xs" >    

  <h3 class="title-alquiler-h3 text-right"><i class="icon-cab"></i> Carros Disponibles</h3><br>
  <div class="container-items-disponibles">


@foreach ($carros as $carro)

<div class="col-md-12 item-carro-contratar">
      <div class="col-md-5 item-carro-imagen">
        <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_1 !!}" class="img-responsive img-thumbnail"alt="" width="120px">        
      </div>
      <div class="col-md-7 item-carro-list">

        <span class="col-sm-12">{!! $carro->marca !!} {!! $carro->linea !!} {!! $carro->modelo !!}</span>
        <span class="col-sm-12 text-right">{!! $carro->precio_dia !!}</span>
        @if ($carro->id == $carroseleccionado->id)
        <a  class="btn btn-xs btn-danger">Seleccionado</a>
        @else
        <a href="{!! URL::to('/') !!}/contratarvehiculo/{!! $carro->id !!}" class="btn btn-xs btn-primary">Seleccionar</a>
        @endif
        
      </div>

    </div>

@endforeach
    

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


@if ($status=="enviado")
<script>
  // alert('Su carro ha sido registrado de manera exitosa, en este momento esta en revisión, nos comunicaremos con usted muy pronto');

  swal({
    title: "Gracias !",
    text: "Estamos revisando su requerimiento, en pocos minutos nos comunicaremos con usted",
    type: "success"
  });
</script>
@endif


@stop