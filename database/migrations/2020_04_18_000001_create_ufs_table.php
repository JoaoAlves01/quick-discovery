<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUfsTable.
 */
class CreateUfsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uf', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('estado');
			$table->string('sigla');
			$table->string('slug');
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
		Schema::drop('uf');
	}
}
