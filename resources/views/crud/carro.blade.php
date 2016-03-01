@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12 ">
		<h1>{!! $carro->marca !!} {!! $carro->linea !!} <small>{!! $carro->modelo !!}</small></h1><br><br>


		<div class="col-md-5">
			<img src="{!! URL::to ('uploads/img/')!!}/{!! $carro->foto_1 !!}" alt="" class="img-responsive">
			<br><br>
<a href="#" type="button" class="btn btn-primary">Más Imagenes</a>
<a href="{!! URL::to('editarcarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-success">Editar</a>
<a href="{!! URL::to('eliminarcarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-danger">Eliminar</a>
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
				@if ($carro->aire_aconcionado=="1")
				<i class='icon-check'></i>
				@else
				<i class='icon-thumbs-down-1'></i>
				@endif			 
			</span>
		</a>  
		<a href='#' class='list-group-item'>Frenos ABS
			<span class='pull-right'>
				@if ($carro->frenos_abs=="1")
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


						      
					</div>





				</div>	
			</div>


			@stop