<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('corporate_clients', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('client_id');
                        $table->string('switch_port_no',50);
                        $table->text('service_description');
                        $table->string('bandwidth',50);
                        $table->string('ip_address',50);
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
		Schema::drop('corporate_clients');
	}

}
