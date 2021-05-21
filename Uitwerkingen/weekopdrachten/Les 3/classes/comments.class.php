<?php

class Comments extends Dbh {
	
	protected function getComment($title) {
		$sql = "SELECT * FROM comments WHERE title = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$title]);
		
		$results = $stmt->fetchAll();
		return $results;
	}
	
	protected function getComments() {
		$sql = "SELECT * FROM comments";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		
		$results = $stmt->fetchAll();
		return $results;
	}
	
	
	protected function setComment($first_name, $last_name, $email, $website, $created_date, $message) {
		$sql = "INSERT INTO comments(first_name, last_name, email, website, created_date, message ) VALUES (?, ?, ?, ?, ?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$first_name, $last_name, $email, $website, $created_date, $message]);
	}

}



