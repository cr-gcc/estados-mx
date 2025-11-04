<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('estados', function (Blueprint $table) {
			$table->id();
			$table->char('clave_geo', 2);
			$table->char('clave_area', 2);
			$table->string('nombre', 128);
			$table->char('abreviatura', 3);
			$table->unsignedBigInteger('poblacion');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('estados');
	}
};
