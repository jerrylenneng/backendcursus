
<html>
<body>


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



# Oefening 3
	
$sql = "INSERT INTO comments (name, email, website, created_date, message) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[website]', Now(), '$_POST[comment]')";

if (mysqli_query($connection, $sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br/>" . $connection->error;
}	
	
	












# Oefening 2
$query = "SELECT * FROM comments ORDER BY created_date ASC";




$result = mysqli_query($connection, $query);

echo 'Number of comments:' . mysqli_num_rows($result);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<br><br>";




echo '<table border="1" width="500">';
foreach($rows as $row) {
	echo '<tr>';
	echo '<td>';
	echo $row['id'];
	echo '</td>';
	echo '<td>';
	echo $row['name'];
	echo '</td>';
	echo '</tr>';
}
echo '</table>';


/*
$sql = "INSERT INTO comments (name, email, website, created_date, message) VALUES ('John Doe', 'johndoe@email.com', 'google.com', Now(), 'Hello World by John.')";

if (mysqli_query($connection, $sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br/>" . $connection->error;
}
*/



?>



<!--




Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
-->

</body>
</html>