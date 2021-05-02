<html>
<body>

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

		$result1 = $connection->query("SELECT username, password, is_admin FROM users WHERE username = '$username' AND password = '$password'");

		if ($result1->num_rows > 0)
     
        { 
			echo 'Hallo admin! Je bent nu ingelogd als ' . $username . "<br>";
			
			
			$is_admin = 1;
			if ($is_admin = 1) {
				echo 'Deze gebruiker is een admin';
			}
			
        }
        else
        {
            echo 'Wachtwoord en/of username is fout!!';
        }
}





?>


<script>
setTimeout("location.href = 'ingelogd.php';",1000);
</script> 





</body>
</html>