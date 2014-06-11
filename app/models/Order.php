<?php


class Order extends Eloquent {

	protected $table = 'orders';
	public $timestamps = true;
	protected $softDelete = false;

}