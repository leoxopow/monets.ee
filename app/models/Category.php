<?php

class Category extends Eloquent {

	protected $table = 'categories';
	public $timestamps = true;
	protected $softDelete = false;

	public function goods()
	{
		return $this->belongsToMany('Goods');
	}

    public function parent() {
        return $this->belongsTo('Category', 'parent_id', 'id');
    }

    public function child() {
        return $this->hasMany('Category', 'id', 'parent_id');
    }
}