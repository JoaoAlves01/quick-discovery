<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Entities\Cotacoes;

/**
 * Class CreateCotacoesTable.
 */
class CreateCotacoesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotacoes', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('id_usuario');
			$table->string('estado_civil');
			$table->decimal('renda', 10, 2);
			$table->unsignedBigInteger('id_parcela')->nullable();
			$table->decimal('premio', 10, 2)->nullable();
			$table->integer('numero_cotacao')->nullable();
			$table->integer('numero_proposta')->nullable()->nullable();
			$table->string('inicio_vigencia')->nullable();
			$table->string('fim_vigencia')->nullable();
			$table->unsignedBigInteger('id_corretor');
			$table->text('indenizacoes')->nullable();

			$table->timestamps();
			
			$table->foreign('id_usuario')->references('id')->on('users');
			$table->foreign('id_parcela')->references('id')->on('parcelas');
			$table->foreign('id_corretor')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cotacoes');
	}
}
