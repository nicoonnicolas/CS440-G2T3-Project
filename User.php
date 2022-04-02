<?php 
class User {
	private $username;
	private $password;
	private $firstName;
	private $lastName;
	private $role;
	private $description;

	public function __construct($username, $password, $firstName, $lastName, $role, $description){
		$this->$username = $username;
		$this->$password = $password;
		$this->$firstName = $firstName;
		$this->$lastName = $lastName;
		$this->$role = $role;
		$this->$description = $description;
	}

	public function getUserName(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function getRole(){
		return $this->role;
	}

	public function getDescription(){
		return $this->description;
	}
}
