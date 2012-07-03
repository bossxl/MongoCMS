<?php
/*
* This Class is inherited by all other db objects.
* Any universal or general functionality should go through this object
* All database objects HAVE TO BE DECLARED IN THIS FILE!
*
*/

class superdbobject{
	public $id = ''
	public $name = '';
	public $description = '';
	public function __construct($defaults=null){
		if($defaults != null){
			foreach ($defaults as $key => $value) {
				$this->$key = $value;
			}
		}
		// Nothing is needed in the basic construction
	}
}
require_once "media.php";
require_once "user.php";
require_once "pages.php";
?>