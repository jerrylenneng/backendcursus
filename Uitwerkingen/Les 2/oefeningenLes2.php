
<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../index.php">Hoofdmenu</a>



<h4> Oefeningen Les 2 </h4>

<?php 

define('DB_HOST',"db");
define('DB_PORT', "3306"); // 8889 voor mamp mysql, 3306 voor docker mysql
define('DB_USERNAME',"avans"); 
define('DB_PASSWORD',"plus");
define('DB_DATABASE',"phpcursus"); 

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

if (!$connection) {
	die('Verbinding met de database is mislukt.');
}
else {
	echo 'Verbinding met de database is gelukt';
}



echo "<br><br>";






if(isset($_POST["username"], $_POST["password"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

		$result1 = $connection->query("SELECT username, password FROM users WHERE username = '$username' AND password = '$password'");

		if ($result1->num_rows > 0)
     
        { 
			echo 'Hallo admin!';
			
			
        }
        else
        {
            echo 'Wachtwoord en/of username is fout!!';
        }
}



?>


<form action="checkLogin.php" method="post">
Name: <input type="text" name="username">
<br>
Password: <input type="password" name="password">
<br>
<input type="submit" value="Login" >
</form>

<h4> les 2.3 </h4>

<?php


		$result2 = $connection->query("SELECT * FROM `comments`");
		
		
		
		


		if ($result2->num_rows > 0) { 
			echo "Hier comments:";
			



$result = mysqli_query($connection, "SELECT * FROM `comments`" );


  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
  }

mysqli_close($connection);












			
			
        }
        else {
           echo "Geen comments";
        }
?>



<h4> Weekopdracht <h4>

