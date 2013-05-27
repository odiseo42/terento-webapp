<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
		    $table->increments('id');
		    $table->integer('social_uid');
		    $table->string('social_provider', 20);
		    $table->string('email', 128);
		    $table->string('password', 64);		    
		    $table->string('username', 128);
		    $table->timestamps();
		});

		DB::table('users')->insert(array(
		    'username'  => 'admin',
		    'password'  => Hash::make('password')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}