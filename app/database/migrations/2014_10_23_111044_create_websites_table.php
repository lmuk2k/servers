<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('websites', function($table)
            {
                $table->increments('id');
                $table->string('name');
                $table->string('url')->unique();
                $table->boolean('production')->default(false);
                $table->text('description');
                $table->text('notes');
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
            Schema::drop('websites');
	}

}
