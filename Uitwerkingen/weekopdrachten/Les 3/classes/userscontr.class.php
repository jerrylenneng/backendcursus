<?php

class UsersContr extends Users {
	
	public function createUser($username, $password, $first_name, $last_name) {
		
		$this->setUser($username, $password, $first_name, $last_name);
	
	}
	
	
	
}



