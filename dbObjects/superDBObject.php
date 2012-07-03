<?php
/*
* This Class is inherited by all other db objects.
* Any universal or general functionality should go through this object
*
*/
class superdbobject{
	public name = '';
	public description = '';
	public function __construct(){
		// Nothing is needed in the basic construction
	}
	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		$this->description = $description;
	}
}

?>