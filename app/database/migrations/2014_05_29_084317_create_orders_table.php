<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('goods');
			$table->string('status');
			$table->string('customer', 255);
			$table->string('customer_phone', 255);
			$table->string('customer_mail', 255);
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}