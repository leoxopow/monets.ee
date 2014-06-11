<?php



class News extends Eloquent {

	protected $table = 'news';
	public $timestamps = true;

    public function getShortAttribute() {
        return substr(strip_tags($this->news_content), 0,100);
    }
}