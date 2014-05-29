<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearSede extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sede', function(Blueprint $table)
		{
			$table->increments('id_sede');
			
			$table->integer('id_menu')->unsigned();
			$table->foreign('id_menu')->references('id_menu')->on('menu')->onDelete('cascade');
			
			$table->integer('id_restaurante')->unsigned();
			$table->foreign('id_restaurante')->references('id_restaurante')->on('restaurante')->onDelete('cascade');

			$table->string('nombre', 50);
			$table->string('pais', 30);
			$table->string('provincia', 30);
			$table->string('canton', 30);
			$table->string('distrito', 30);
			$table->string('sennas', 150);
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
		Schema::drop('sede');
	}

}
