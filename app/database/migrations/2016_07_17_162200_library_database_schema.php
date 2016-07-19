<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LibraryDatabaseSchema extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
                $table->increments('user_id');
                $table->string('remember_token', 256)->nullable();
                $table->string('fname', 128);
                $table->string('lname', 128);
                $table->string('email', 128);
                $table->string('tel_number', 128);
                $table->string('password', 128);
                $table->string('address', 128);
                $table->string('activation_key', 128);
                $table->string('remind', 128);
                $table->enum('status', array('on','off'));
                $table->dateTime('last_login')->nullable();
                $table->dateTime('created_at');
                $table->dateTime('updated_at');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
