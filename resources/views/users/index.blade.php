@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-11 mx-auto">
			<h1>Usuarios</h1>
			<a class="btn btn-primary pull-right" href="{{ route('usuarios.create') }}">Crear Nuevo Usuario</a>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Role</th>
					<th>Ver Experiencia Laboral</th>
					<th>Acciones</th>
				</tr>
				<tbody>
					@foreach ($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td><a href="{{ route('usuarios.show', $user->id) }}">
								{{ $user->name }}</td>
							</a>
							<td>{{ $user->email }}</td>
							<td>{{ $user->roles->pluck('display_name')->implode(', ') }}</td>
							<td><a href="{{ route('expLaboral.show',$user->id) }}">Ver Experiencia Laboral</a></td>
							<td>
							<a class="btn btn-info btn-sm"
									href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
								<form style="display: inline;"
										method="POST"
										action="{{ route('usuarios.destroy', $user->id)}}">
									@csrf
									{{ method_field('DELETE') }}
									<button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		</div>
	</div>
@endsection