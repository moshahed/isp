<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('client_type_id');
                        $table->integer('area_id');
                        $table->integer('package_id');
                        $table->string('name',50);
                        $table->string('pop',50);
                        $table->string('switch_port_no',50);
                        $table->string('email',50);
                        $table->text('address');
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
		Schema::drop('clients');
	}

}
