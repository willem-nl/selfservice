<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebstartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webstart_Browsers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('icon');
			$table->timestamps();
		});

		Schema::create('webstart_Categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('webstart_Items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('browser_id')->unsigned();
			$table->timestamps();

			$table->foreign('browser_id')->references('id')->on('webstart_Browsers')->onDelete('cascade');
		});

		Schema::create('webstart_Categories_Items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->timestamps();

			$table->foreign('item_id')->references('id')->on('webstart_Items')->onDelete('cascade');
			$table->foreign('category_id')->references('id')->on('webstart_Categories')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webstart_Categories_Items');
		Schema::drop('webstart_Items');
		Schema::drop('webstart_Categories');
		Schema::drop('webstart_Browsers');
	}

}
