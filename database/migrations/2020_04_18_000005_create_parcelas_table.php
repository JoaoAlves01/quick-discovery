<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateParcelasTable.
 */
class CreateParcelasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parcelas', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('parcela');
			$table->string('descricao');
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
		Schema::drop('parcelas');
	}
}
