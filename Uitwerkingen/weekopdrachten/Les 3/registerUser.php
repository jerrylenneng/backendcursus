
<?php

	function my_autoloader($class) {
		include 'classes/' . $class . '.class.php';
	}

	spl_autoload_register('my_autoloader');

?>

<?php



$username = $_POST["username"]; 
$password = $_POST["password"]; 
$first_name = $_POST["first_name"]; 
$last_name = $_POST["last_name"]; 

$usersObj2 = new UsersContr();
$usersObj2->createUser($username, $password, $first_name, $last_name);



?>

<center><h3>User geregistreerd!</h3></center>
<script>
setTimeout("location.href = 'index.php';",2000);
</script> 