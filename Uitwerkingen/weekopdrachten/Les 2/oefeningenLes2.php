

<style>

	table	{
		border-style:solid;
		border-width:2px;
		border-color:pink;
	}

</style>

</head>

<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../../index.php">Hoofdmenu</a>

<h3> Oefeningen Les 2 </h3>

<h4> Oefening 2.1 <h4>

<a href="index.php">index.php</a>

<h4> Oefening 2.2 </h4>

Bewerkingen uitgevoerd op de database

<br><br>

<h4> Oefening 2.3 </h4>

<?php

// oefening 1

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
	echo '<h4> Verbinding met de database is gelukt </h4>';
}

$result = $connection->query("SELECT * FROM `comments`");
				
echo "<table border='1'>

<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>website</th>
<th>message</th>
</tr>";

while($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['website'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";

}

echo "</table>";


# Oefening 2 & 3


?>

<ul id="menu" class="menu">
</ul><form id="form" action="comment.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Naam...">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email...">

  	 <label for="website">Website</label>
    <input type="text" id="website" name="website" placeholder="Website">

    <label for="message">Message</label>

    <input id="message" name="message" placeholder="Bericht..." ></textarea>

    <input type="submit" value="Submit">
</form>

<h4> Oefening 2.4 </h4>

<?php 

// Les 2.4

// oefening 1 (tabel aangemaakt)

// oefening 2 

// hier is er een probleem met de foreign key van post_id. Deze klopt niet, vandaar dat ik de oefening niet kan doen

// graag een demonstratie hoe dit te fixen

?>

<h4> Oefening 2.5 </h4>

<a href="login.php">login.php</a>

























<?php 

/*

?>



<?php



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



<h4> Weekopdracht <h4>


*/

?>