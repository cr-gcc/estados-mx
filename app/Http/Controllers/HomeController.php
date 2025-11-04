<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}

	public function estadosInegi()
	{
		$estados = Estado::all();
		return response()->json([
			'data' => $estados,
		], 200);
	}

	public function cargaInegi()
	{
		$url = "https://gaia.inegi.org.mx/wscatgeo/mgee/";
		$message = "";
		$data = [];
		$status = 400;
		$numero = 1;
		// Hay informacion?
		$estados = Estado::all();
		if ($estados->count() > 0) {
			$message = "La base de datos ya ha tiene información";
			$status = 200;
		} else {
			// Llamada al API
			$response = Http::get($url);
			$data = $response->json();
			try {
				$response = Http::get($url);
				if ($response->successful()) {
					$data = $response->json();
					$tmp_estados = $data["datos"] ?? [];
					if (count($tmp_estados)) {
						foreach ($tmp_estados as $tmp_estado) {
							$tmp = [
								'clave_geo' => $tmp_estado['cvegeo'],
								'clave_area' => $tmp_estado['cve_area'],
								'nombre' => $tmp_estado['nom_agee'],
								'abreviatura' => $tmp_estado['nom_abrev'],
								'poblacion' => (int)$tmp_estado['pob'],
							];
							Estado::updateOrCreate($tmp);
							$numero++;
							$message = "Se han creado $numero estados en la base de datos local. Por favor actualiza la página para visualizarlos.";
							$status = 200;
						}
					} else {
						$message = 'No se encontraron registros de los estados.';
						$status = 400;
					}
				} else {
					$message = 'Error al consultar el API del INEGI';
					$status = 400;
				}
			} catch (\Exception $e) {
				$message = $e->getMessage();
				$status = 500;
			}
		}
		//
		return response()->json([
			'message' => $message,
		], $status);
	}
}
