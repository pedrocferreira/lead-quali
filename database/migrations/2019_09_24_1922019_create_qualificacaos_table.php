<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateQualificacaosTable.
 */
class CreateQualificacaosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('qualificacaos', function(Blueprint $table) {
			$table->increments('id');
			$table->dateTime('data_contato');
			$table->string('necessidade');
			$table->string('mora_na_regiao');
			$table->string('prioridade');
			$table->string('nivel_descisao');


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
		Schema::drop('qualificacaos');
		 Schema::defaultStringLength(191);
	}
}
