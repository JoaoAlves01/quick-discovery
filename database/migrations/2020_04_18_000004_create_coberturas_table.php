<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCoberturasTable.
 */
class CreateCoberturasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coberturas', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('cobertura');
			$table->text("indenizacoes")->nullable();
			$table->boolean('status');
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
		Schema::drop('coberturas');
	}
}
