<?php

class Image extends Eloquent {

    protected $table = 'images';
    public $timestamps = true;
    protected $softDelete = false;
}