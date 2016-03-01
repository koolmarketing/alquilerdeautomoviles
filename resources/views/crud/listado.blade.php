@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12 ">
		<h1>Listado de Automoviles</h1><br><br>

		<table class="table table-hover">
			<thead>
				<tr>
				<th></th>
					<th>Marca</th>
					<th>Línea</th>

					<th>Propietario</th>
					<th>Email</th>
					<th>Celular</th>
					<th>Estado</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>

					@foreach ($carros as $carro)
					<td><a href="{!! URL::to('vercarro') !!}/{!! $carro->id !!}" type="button" class="btn btn-success btn-xs icon-search"></a></td>
					<td>{!! $carro->marca !!}</td>
					<td>{!! $carro->linea !!}</td>
					<td>{!! $carro->propietario !!}</td>
					<td> {!! $carro->email !!} </td>
					<td> {!! $carro->celular !!} </td>
					<td>
					@if ($carro->activo =="0")
					{!! "No Disponible" !!}
					@else
					{!! "Disponible" !!}
					@endif
					</td>
					<td>
					@if ($carro->activo =="0")
					{!! '<button type="button" class="btn btn-info btn-xs">Activar</button>' !!}
					@else
					{!! '<button type="button" class="btn btn-info btn-xs">Desactivar</button>' !!}
					@endif
					<button type="button" class="btn btn-success btn-xs icon-edit-1"></button>
					<button type="button" class="btn btn-danger btn-xs icon-trash-4"></button>
						
					</td>
					

					@endforeach
					
				</tr>
			</tbody>
		</table>



	</div>	
</div>


@stop