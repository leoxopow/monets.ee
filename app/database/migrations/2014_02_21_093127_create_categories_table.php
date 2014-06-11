<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->mediumInteger('parent');
		});
		Schema::create('category_good', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('good_id');
			$table->integer('category_id');
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}