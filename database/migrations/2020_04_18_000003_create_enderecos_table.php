<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEnderecosTable.
 */
class CreateEnderecosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table) {

            $table->bigIncrements('id');
			$table->unsignedBigInteger('id_usuario');
			$table->integer('cep');
			$table->string('logradouro');
			$table->string('numero');
			$table->string('complemento')->nullable();
			$table->unsignedBigInteger('id_uf');
			$table->unsignedBigInteger('id_cidade');

			$table->timestamps();
			
			$table->foreign('id_usuario')->references('id')->on('users');
			$table->foreign('id_uf')->references('id')->on('uf');
			$table->foreign('id_cidade')->references('id')->on('cidades');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enderecos');
	}
}
