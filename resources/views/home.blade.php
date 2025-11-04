@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <div class="container my-5">
    <h1>
      Estados de México
    </h1>
    <div id="pb-estados" class="progress vanish">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="100"
        aria-valuemin="0" aria-valuemax="100" style="width: 105%"></div>
    </div>
    <h3 id="no-estados" class="vanish">
      <span class="text-danger">No se encontraron registros</span>
    </h3>
    <div id="dt-estados" class="vanish card bg-secondary text-white" style="width: 100%;">
      <table id="data-estados" class="display table table-striped table-dark" style="width:96%">
        <thead>
          <tr>
            <th></th> <!-- Columna para botón de detalles -->
            <th>Nombre Estado</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
@endsection
