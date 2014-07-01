<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("phone");
            $table->string("title");
            $table->mediumText("short_descritpion");
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
		Schema::drop('staffs');
	}

}