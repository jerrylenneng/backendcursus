<?php

class Posts extends Dbh {
	
	protected function getPost($textPost) {
		$sql = "SELECT * FROM posts WHERE username = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$textPost]);
		
		$results = $stmt->fetchAll();
		return $results;
	}

	protected function getPosts() {
		$sql = "SELECT * FROM posts";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		
		$results = $stmt->fetchAll();
		return $results;
	}
	
	protected function setPost($title, $textPost, $first_name, $last_name) {
		$sql = "INSERT INTO posts(title, textPost, first_name, last_name) VALUES (?, ?, ?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$title, $textPost, $first_name, $last_name]);
	}

}



