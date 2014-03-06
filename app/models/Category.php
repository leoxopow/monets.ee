<?php

class Category extends Eloquent {

	protected $table = 'categories';
	public $timestamps = true;
	protected $softDelete = false;

	public function goods()
	{
		return $this->belongsToMany('Goods');
	}

}