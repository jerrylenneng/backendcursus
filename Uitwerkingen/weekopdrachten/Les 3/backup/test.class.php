<?


class Test extends Dbh {
	
	public function getUsers() {
		$sql = "SELECT * FROM users";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()) {
			echo $row['username'] . '<br>';
		}
	}
	
	public function getUsersStmt($username, $password) {
		$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$username, $password]);
		$names = $stmt->fetchAll();
		
		foreach ($names as $name) {
			echo $name['username'] . '<br>';
			echo $name['password'] . '<br>';
		}
	}
	
	public function setUsersStmt($username, $password) {
		$sql = "INSERT INTO users(username, password ) VALUES (?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$username, $password]);
	}
	
	
	
	
	
}
