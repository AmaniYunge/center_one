<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('Visitor_emails', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean("status");
            $table->string("name");
            $table->string("telephone");
            $table->string("email");
            $table->longText("description");
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
		Schema::drop('Visitor_emails');
	}

}
