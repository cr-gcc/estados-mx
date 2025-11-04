<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	protected $fillable = [
		'clave_geo',
		'clave_area',
		'nombre',
		'abreviatura',
		'poblacion'
	];
}
