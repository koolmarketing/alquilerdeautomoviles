@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12 ">

	
		 <h1>{!! $carro->marca !!} {!! $carro->linea !!} <small> de <b>{!! $carro->propietario !!}</b></small></h1>
			<br><br>


		<div class="col-md-5">



<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">

      <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_1 !!}" width="341" height="341" alt="...">
      
    </div>
    @if (isset($carro->foto_2))
    <div class="item">
      <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_2 !!}" alt="...">  
    </div>
    @endif

       @if (isset($carro->foto_3))
    <div class="item">
      <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_3 !!}" alt="...">  
    </div>
    @endif
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




		{{-- 	<img src="{!! URL::to ('uploads/img/')!!}/{!! $carro->foto_1 !!}" alt="" class="img-responsive"> --}}
			<br><br>

<a href="{!! URL::to('editarcarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-warning">Editar</a>
<a href="{!! URL::to('eliminarcarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-success">Eliminar</a>
@if ($carro->activo =="0")
						
						<a href="{!! URL::to('activarcarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-danger">Activar Carro</a>
						@else
						<a href="{!! URL::to('desactivarcarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-danger">Desactivar Carro</a>
						@endif


						<p>

						<ul class="list-group">
							<li class="list-group-item">SOAT <a target="blank" href="{!! URL::to('/') !!}/uploads/img/{!! $carro->soat !!}" class="pull-right btn btn-xs btn-default">Ver</a>  </li>
							<li class="list-group-item">Impuesto de Rodamiento <a target="blank" href="{!! URL::to('/') !!}/uploads/img/{!! $carro->rodamiento !!}" class="pull-right btn btn-xs btn-default">Ver</a></li>
							<li class="list-group-item">Revición técnico mecánica<a target="blank" href="{!! URL::to('/') !!}/uploads/img/{!! $carro->tecnico_mecanica !!}" class="pull-right btn btn-xs btn-default">Ver</a></li>
							<li class="list-group-item">Tarjeta de Propiedad <a target="blank" href="{!! URL::to('/') !!}/uploads/img/{!! $carro->tarjeta_propiedad !!}" class="pull-right btn btn-xs btn-default">Ver</a></li>
							<li class="list-group-item">Cédula de ciudadanía <a target="blank" href="{!! URL::to('/') !!}/uploads/img/{!! $carro->cedula_ciudadania !!}" class="pull-right btn btn-xs btn-default">Ver</a></li>
						</ul>
						
		</div>


		<div class="col-md-4">
			<ul class="list-group list-datos">
				<li class="list-group-item active">Datos Personales</li>
				<p>Propietario: <span class="pull-right">{!! $carro->propietario !!}</span></p>
				<p>Email: <span class="pull-right">{!! $carro->email !!}</span></p>
				<p>Telefono Fijo: <span class="pull-right">{!! $carro->telefono_fijo !!}</span></p>
				<p>Celular: <span class="pull-right">{!! $carro->celular !!}</span></p>
				<p>Actividad: <span class="pull-right">{!! $carro->actividad !!}</span></p>
				<p>Ciudad: <span class="pull-right">{!! $carro->ciudad !!}</span></p>
				<p>Dirección: <span class="pull-right">{!! $carro->direccion !!}</span></p>
			</ul>


			<ul class="list-group list-datos">
				<li class="list-group-item active">Vehículo</li>
				<p>Marca: <span class="pull-right">{!! $carro->marca !!}</span></p>
				<p>Linea: <span class="pull-right">{!! $carro->linea !!}</span></p>
				<p>Modelo: <span class="pull-right">{!! $carro->modelo !!}</span></p>
				<p>Color: <span class="pull-right">{!! $carro->color !!}</span></p>
				<p>Placa: <span class="pull-right">{!! $carro->placa !!}</span></p>
				<p>Transmisión: <span class="pull-right">{!! $carro->transmision !!}</span></p>
				<p>Combustible: <span class="pull-right">{!! $carro->combustible !!}</span></p>
				<p>Carrocería: <span class="pull-right">{!! $carro->carroceria !!}</span></p>
				<p>Pasajeros: <span class="pull-right">{!! $carro->pasajeros !!}</span></p>
				<p>Precio por día: <span class="pull-right"><b>{!! $carro->precio_dia !!}</b></span></p>
				<p></p>
			</ul>
		</div>


		<div class="col-md-3">
			<a href='#' class='list-group-item'>Aire acondicionado
          <span class='pull-right'>
            @if ($carro->aire_acondicionado=="1")
            <i class='icon-check'></i>
            @else
            <i class='icon-thumbs-down-1'></i>
            @endif       
          </span>
        </a>  
        <a href='#' class='list-group-item'>Frenos ABS
          <span class='pull-right'>
            @if ($carro->freno_abs=="1")
            <i class='icon-check'></i>
            @else
            <i class='icon-thumbs-down-1'></i>
            @endif

          </span></a>

			<a href='#' class='list-group-item'>4x4
				<span class='pull-right'>
					@if ($carro->_4x4=="1")
					<i class='icon-check'></i>
					@else
					<i class='icon-thumbs-down-1'></i>
					@endif

				</span></a>

				<a href='#' class='list-group-item'>Cojinería de Cuero
					<span class='pull-right'>
						@if ($carro->cojineria_cuero=="1")
						<i class='icon-check'></i>
						@else
						<i class='icon-thumbs-down-1'></i>
						@endif

					</span></a>

					<a href='#' class='list-group-item'>Airbag Conductor
						<span class='pull-right'>
						@if ($carro->airbag_conductor=="1")
							<i class='icon-check'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>

						<a href='#' class='list-group-item'>Airbag Copiloto
						<span class='pull-right'>
						@if ($carro->airbag_copiloto=="1")
							<i class='icon-check'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>

							<a href='#' class='list-group-item'>Permite Mascotas
						<span class='pull-right'>
						@if ($carro->mascotas=="1")
							<i class='icon-check text-success'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>

								<a href='#' class='list-group-item'>Entrega a domicilio
						<span class='pull-right'>
						@if ($carro->entrega_domicilio=="1")
							<i class='icon-check'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>

									<a href='#' class='list-group-item'>Radio
						<span class='pull-right'>
						@if ($carro->radio=="1")
							<i class='icon-check'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>

										<a href='#' class='list-group-item'>CD/MP3
						<span class='pull-right'>
						@if ($carro->cd_mp3=="1")
							<i class='icon-check'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>


										<a href='#' class='list-group-item'>USB/MP3
						<span class='pull-right'>
						@if ($carro->usb_mp3=="1")
							<i class='icon-check'></i>
							@else
							<i class='icon-thumbs-down-1'></i>
							@endif

						</span></a>
						<a href='#' class='list-group-item'>Vidrios Eléctricos
                              <span class='pull-right'>
                                @if ($carro->vidrios_electricos=="1")
                                <i class='icon-check'></i>
                                @else
                                <i class='icon-thumbs-down-1'></i>
                                @endif

                              </span></a>

                              <a href='#' class='list-group-item'>Rastreador Satelital
                                <span class='pull-right'>
                                  @if ($carro->rastreador=="1")
                                  <i class='icon-check'></i>
                                  @else
                                  <i class='icon-thumbs-down-1'></i>
                                  @endif

                                </span></a>

                                <a href='#' class='list-group-item'>Rines de Lujo
                                  <span class='pull-right'>
                                    @if ($carro->rines_lujo=="1")
                                    <i class='icon-check'></i>
                                    @else
                                    <i class='icon-thumbs-down-1'></i>
                                    @endif

                                  </span></a>

                                  <a href='#' class='list-group-item'>DVD
                                    <span class='pull-right'>
                                      @if ($carro->dvd=="1")
                                      <i class='icon-check'></i>
                                      @else
                                      <i class='icon-thumbs-down-1'></i>
                                      @endif

                                    </span></a>

                                    <a href='#' class='list-group-item'>Full Equipo
                                      <span class='pull-right'>
                                        @if ($carro->full_equipo=="1")
                                        <i class='icon-check'></i>
                                        @else
                                        <i class='icon-thumbs-down-1'></i>
                                        @endif

                                      </span></a>


						      
					</div>





				</div>	
			</div>


			@stop