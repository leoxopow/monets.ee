<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoodsTable extends Migration {

	public function up()
	{
		Schema::create('goods', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->string('price');
			$table->text('images');
		});
	}

	public function down()
	{
		Schema::drop('goods');
	}
}