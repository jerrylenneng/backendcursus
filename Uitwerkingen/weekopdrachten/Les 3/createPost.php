
<?php

	function my_autoloader($class) {
		include 'classes/' . $class . '.class.php';
	}

	spl_autoload_register('my_autoloader');

?>

<?php



$text = $_POST["text"]; 
$title = $_POST["title"]; 
$first_name = $_POST["first_name"]; 
$last_name = $_POST["last_name"]; 

$usersObj2 = new PostsContr();
$usersObj2->createPost($text, $title, $first_name, $last_name);



?>

<center><h3>Post geplaatst!</h3></center>
<script>
setTimeout("location.href = 'index.php';",2000);
</script> 