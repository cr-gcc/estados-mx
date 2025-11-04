@extends('layouts.app')
@section('title', 'Home')
@section('content')
	<div class="container my-5">
		<h1>
			Estados de México
		</h1>
		<div id="pb-estados" class="progress vanish">
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 105%"></div>
		</div>
		<h2 id="no-estados" class="vanish">
			<span>No se encontraron registros</span>
		</h2>
	</div>
@endsection