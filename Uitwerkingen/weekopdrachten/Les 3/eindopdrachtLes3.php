
<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../index.php">Hoofdmenu</a>



<h4> Weekopdracht Les 3 </h4>
<h5> Gebruikers in de database: </h5>

<?php

require_once("inc/db.php");
include("inc/users.php");

$database = new Database("db", "avans", "plus", "phpcursus");

$query = "SELECT username FROM users WHERE id = 1";
$result = $database->query($query);
while($row = mysqli_fetch_assoc($result)) {
  echo "Naam: " . $row["username"];
}

$database->close();




?>

<h2> Registreer </h2>

<form action="/register" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" />         
        </div>
        <div>
            <label for="username">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <div>
            <label for="username">Email</label>
            <input type="text" name="email" id="email" />   
        </div>
        <div><input type="submit" name="submit" value="Registreer" /></div>
    </form> 

