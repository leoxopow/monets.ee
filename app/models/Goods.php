<?php

class Goods extends Eloquent {

	protected $table = 'goods';
	public $timestamps = true;
	protected $softDelete = false;

	public function categories()
	{
		return $this->belongsToMany('Category');
	}

}