<?php
class user extends superdbobject {
	private $password = '';
	public $firstName = '';
	public $lastName = '';
	public $bio = '';
	//index of the array $types, default is a public user type. 
	private $type = 3;
	private $types = array("super-admin", "admin", "editor", "public");
	public function setPassword ($password){
		$this->password = crypt($password);
	}
	public function verifyPassword($userInput){
		if(crypt($userInput, $this->password) == $this->password){
			return true;
		} else {
			return false;
		}
	}
	public function setType($type){
		if(array_search($type, $this->types) !== false){
			$this->type = array_search($type, $this->types);
		} else {
			$this->type = count($this->types) - 1;
		}
	}
	public function getType(){
		return $this->types[$this->type];
	}
}

?>