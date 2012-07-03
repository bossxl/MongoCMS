<?php
/* 
* This file creates the main connection to mongodb
* and creates the basic objects to save into.
*
*/
class db {
	public $main = '';
	public $users = '';
	public $media = '';
	public $pages = '';

	public function __construct(){
		$mongo = new Mongo();
		$this->main = $mongo->selectDB("cms");
		$this->users = $this->main->users;
		$this->media = $this->main->media;
		$this->pages = $this->main->pages;
	}
}

$cms_db = new db();

?>