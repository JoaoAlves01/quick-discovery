<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCoberturasUsersTable.
 */
class CreateCoberturasUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coberturas_users', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('id_cobertura');
			$table->unsignedBigInteger('id_usuario');
			$table->decimal('premio', 10, 2);
			$table->boolean('status');

			$table->timestamps();
			
			$table->foreign('id_cobertura')->references('id')->on('coberturas');
			$table->foreign('id_usuario')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coberturas_users');
	}
}
