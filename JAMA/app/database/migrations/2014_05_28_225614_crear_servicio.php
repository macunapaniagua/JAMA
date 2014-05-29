<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearServicio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicio', function(Blueprint $table)
		{
			$table->increments('id_servicio');
			
			$table->integer('id_menu')->unsigned();
			$table->foreign('id_menu')->references('id_menu')->on('menu')->onDelete('cascade');

			$table->string('platillo', 30);
			$table->integer('precio')->nullable();
			$table->integer('puntuacion')->nullable();
			$table->string('tipo', 30);
			$table->string('foto', 500);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicio');
	}

}
