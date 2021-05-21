<style>
<?php include 'css/style.css'; ?>
</style>

<?php

	function my_autoloader($class) {
		include 'classes/' . $class . '.class.php';
	}

	spl_autoload_register('my_autoloader');



	
	
	
	
	
?>

<h4> table id:</h4>
<?php $commentsObj = new CommentView(); $commentsObj->showComments();  ?>