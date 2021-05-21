
<?php

	function my_autoloader($class) {
		include 'classes/' . $class . '.class.php';
	}

	spl_autoload_register('my_autoloader');

?>

<?php

$first_name = $_POST["first_name"]; 
$last_name = $_POST["last_name"]; 
$email = $_POST["email"]; 
$website = $_POST["website"]; 
$created_date= date("Y-m-d H:i:s");
$message = $_POST["message"]; 




$usersObj2 = new CommentsContr();
$usersObj2->createComment($first_name, $last_name, $email, $website, $created_date, $message);



?>

<center><h3>Comment geplaatst!</h3></center>
<script>
setTimeout("location.href = 'index.php';",2000);
</script> 