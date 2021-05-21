<?php

class Dbh {
	private $host = "db";
	private $user = "avans";
	private $pwd = "plus";
	private $dbName = "phpcursus";
	
	protected function connect() {
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
		
	}
	
	protected function disconnect() {
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
		
	}
}


