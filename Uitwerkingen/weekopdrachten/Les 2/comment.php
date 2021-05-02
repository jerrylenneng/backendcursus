
<?php

# Oefening 1

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
	echo 'Verbinding gelukt';
}

echo "<br><br>";
	
$sql = "INSERT INTO comments (name, email, website, created_date, message) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[website]', Now(), '$_POST[message]')";

if (mysqli_query($connection, $sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br/>" . $connection->error;
}	




	
	?>

<br>

Je comment is met succes toegevoegd aan de database!

<script>
setTimeout("location.href = 'OefeningenLes2.php';",1000);
</script> 

