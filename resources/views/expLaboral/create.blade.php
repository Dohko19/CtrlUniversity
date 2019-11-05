@extends('layouts.app')
@section('content')
		<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="shadow bg-white rounded py-3 px-4" method="POST"
				action="{{ route('expLaboral.store', auth()->id()) }}"
				enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{ auth()->id() }}">
					<h1 class="display-4">Agregar Experiencia Laboral</h1>
					<hr>
						<label for="empresa">Nombre de la empresa</label>
						<input class="form-control shadow-sm bg-light @error('empresa') is-invalid @else border-0 @enderror"
						 type="text" name="empresa" value="{{ old('empresa')}}">
						@error('empresa')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<label for="puesto">Nombre del Puesto</label>
						<input class="form-control shadow-sm bg-light @error('puesto') is-invalid @else border-0 @enderror"
						 type="text" name="puesto" value="{{ old('puesto')}}">
						@error('puesto')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<label for="departamento">Nombre del Departamento</label>
						<input class="form-control shadow-sm bg-light @error('departamento') is-invalid @else border-0 @enderror"
						 type="text" name="departamento" value="{{ old('departamento')}}">
						@error('departamento')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<label for="telefono">Telefono de la Empresa</label>
						<input class="form-control shadow-sm bg-light @error('telefono') is-invalid @else border-0 @enderror"
						 type="text" name="telefono" value="{{ old('telefono')}}">
						@error('telefono')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<label for="correo">Correo de la Empresa</label>
						<input class="form-control shadow-sm bg-light @error('correo') is-invalid @else border-0 @enderror"
						 type="text" name="correo" value="{{ old('correo')}}">
						@error('correo')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<label for="fecha_inicio">Fecha de Inicio</label>
						<input class="form-control shadow-sm bg-light @error('fecha_inicio') is-invalid @else border-0 @enderror"
						 type="date" name="fecha_inicio" value="{{ old('fecha_inicio')}}">
						@error('fecha_inicio')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<label for="fecha_termino">Fecha de Termino</label>
						<input class="form-control shadow-sm bg-light @error('fecha_termino') is-invalid @else border-0 @enderror"
						 type="date" name="fecha_termino" value="{{ old('fecha_termino')}}">
						@error('fecha_termino')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<hr>
					<button class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
@endsection