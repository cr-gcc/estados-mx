@extends('layouts.app')
@section('title', 'Home')
@section('content')
	<div class="container my-5">
			<h2 class="mb-4">Usuarios</h2>

			<table id="usersTable" class="table table-striped table-bordered">
					<thead>
							<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Email</th>
									<th>Rol</th>
							</tr>
					</thead>
					<tbody>
							<tr>
									<td>1</td>
									<td>Cris</td>
									<td>cris@email.com</td>
									<td>Admin</td>
							</tr>
							<tr>
									<td>2</td>
									<td>Laura</td>
									<td>laura@email.com</td>
									<td>Usuario</td>
							</tr>
					</tbody>
			</table>
	</div>
@endsection
@section('scripts')
	<script>
		$(document).ready(function() {
			$('#usersTable').DataTable();
		});
	</script>
@endsection
