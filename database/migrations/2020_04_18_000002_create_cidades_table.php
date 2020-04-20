<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Entities\Cidades;

/**
 * Class CreateCidadesTable.
 */
class CreateCidadesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cidades', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('id_estado');
			$table->string('cidade');
			$table->boolean('status');
			$table->timestamps();
			
			$table->foreign('id_estado')->references('id')->on('uf');
        });
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cidades');
	}
}
