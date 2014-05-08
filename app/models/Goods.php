<?php

class Goods extends Eloquent {

	protected $table = 'goods';
	public $timestamps = true;
	protected $softDelete = false;

    public function categories()
    {
        return $this->belongsToMany('Category');
    }
    public function images()
    {
        return $this->hasMany('Image','goods_id','id');
    }

    public function inCategory($catId) {
        if($this->categories()->where('category_id',$catId)->count()>0)return true;
        else return false;
    }

}