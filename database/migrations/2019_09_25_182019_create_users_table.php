<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome')->nullable();
			$table->integer('empresa_id')->unsigned()->index()->default(0);
			$table->string('login',50)->unique()->nullable();
			$table->string('password',254)->nullabel();
			$table->string('tipo_user');
			$table->string('email',80)->nullabel();

			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');



			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('empresa_id')->references('id')->on('empresas');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()

	{	
		Schema::defaultStringLength(191);
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('empresas_empresa_id_foreign');
		});
		Schema::drop('users');
	}
}
