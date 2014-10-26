<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('websites', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->string('url')->unique();
            $table->boolean('production')->default(false);
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->enum('language', array('.NET', 'PHP', 'Classic ASP', 'Static HTML', 'Other'))->default('.NET');
            $table->enum('cms', array('Contribute', 'Wordpress', 'Sharepoint', 'Custom', 'None'))->default('None');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('websites');
    }

}
