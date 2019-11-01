<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLeadsTable.
 */
class CreateLeadsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leads', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('telefone');
			$table->string('email');
			$table->string('cidade');
			$table->integer('empresa_id')->unsigned()->index();
			$table->integer('qualificado_id')->unsigned()->index();



			$table->timestamps();
			
			$table->foreign('empresa_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('qualificado_id')->references('id')->on('qualificacaos')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('leads', function(Blueprint $table) {
			$table->dropForeign('empresa_empresa_id_foreign');
			$table->dropForeign('qualificado__qualificado_id_foreign');
			 Schema::defaultStringLength(191);
		});

		
		Schema::drop('leads');
	}
}
