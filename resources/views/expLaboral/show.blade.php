@extends('layouts.app')
@section('content')
	<div class="container">
			<div class="row">
				<div class="col-md-6 col-12 col-sm-10 col-lg-12 mx-auto">
	<h2>Experiencia Laboral de :</h2>
	<table class="table table-hover">
		<tr>
			<th>Nombre</th>
			<th>Puesto</th>
			<th>Telefono</th>
		</tr>
		<tbody>
			{{ $exp->pluck('empresa')->count() }}
			@foreach ($exp as $e)
				<th>{{ $e->empresa }}</th>
				<th>{{ $e->puesto }}</th>
				<th>{{ $e->telefono }}</th>
			@endforeach
		</tbody>
	</table>
			</div>
		</div>
	</div>
@endsection