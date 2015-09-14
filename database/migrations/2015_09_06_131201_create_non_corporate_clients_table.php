<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonCorporateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('non_corporate_clients', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('client_id');
                        $table->integer('secondary_pop_id');
                        $table->string('package_description',50);
                        $table->string('login_id',50);
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
		Schema::drop('non_corporate_clients');
	}

}
