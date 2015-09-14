<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanyInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name',150);
			$table->string('proprietor_name',50);
			$table->string('company_address',200);
			$table->string('company_mobile',150);
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
		Schema::drop('company_info');
	}

}
