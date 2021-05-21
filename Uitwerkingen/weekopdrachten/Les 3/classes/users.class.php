<?php

class Users extends Dbh {
	
	protected function getUser($name) {
		$sql = "SELECT * FROM users WHERE username = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name]);
		
		$results = $stmt->fetchAll();
		return $results;
	}
	
	protected function getUsers() {
		$sql = "SELECT * FROM users";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		
		$results = $stmt->fetchAll();
		return $results;
	}
	

	
	protected function setUser($username, $password, $first_name, $last_name) {
		$sql = "INSERT INTO users(username, password, first_name, last_name ) VALUES (?, ?, ?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$username, $password, $first_name, $last_name]);
	}
	
	protected function delUser($username, $password) {
		$sql = "DELETE FROM users WHERE id = ?";
		$stmt = $this->connect()->prepare($sql);
		#$stmt->execute([$username, $password]);
	}

}



