<?php

class Create_Items {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table) {
		    $table->increments('id');
		    $table->integer('user_id');	
			$table->index('user_id');	
		    $table->string('title', 50);
		    $table->text('description', 124);
		    $table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}