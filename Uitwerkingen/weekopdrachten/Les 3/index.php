<?php

	function my_autoloader($class) {
		include 'classes/' . $class . '.class.php';
	}

	spl_autoload_register('my_autoloader');

?>

<html>

<body>

<style>
<?php include 'css/style.css'; ?>
</style>



<form id="form" action="registerUser.php" method="post">
<ul class="form-style-1">
<h1> Register a new user: </h1>
    <li>
		<label>Full Name <span class="required">*</span></label>
		<input type="text" name="first_name" class="field-divided" placeholder="First" /> <input type="text" name="last_name" class="field-divided" placeholder="Last" />
	</li>
    <li>
        <label>Username <span class="required">*</span></label>
        <input type="text" name="username" class="field-long" />
    </li>
    <li>
        <label>Password <span class="required">*</span></label>
        <input type="password" name="password" class="field-long" />
    </li>
    <li>
        <a href="showUsers.php"><input type=button value="Show Users" /></a>   <input type="submit" value="Register user" />
    </li>
</ul>
</form>


<form id="form" action="postComment.php" method="post">
<ul class="form-style-1">
<h1> Post a comment: </h1>
    <li>
		<label>Full Name <span class="required">*</span></label>
		<input type="text" name="first_name" class="field-divided" placeholder="First" /> <input type="text" name="last_name" class="field-divided" placeholder="Last" />
	</li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="text" name="email" class="field-long" />
    </li>
    <li>
        <label>Website <span class="required">*</span></label>
        <input type="text" name="website" class="field-long" />
    </li>
    <li>
        <label>Comment <span class="required">*</span></label>
        <input type="text" name="message" class="field-long" />
    </li>
    <li>
        <a href="showComments.php"><input type=button value="Show Comments" /></a>   <input type="submit" value="Post Comment" />
    </li>
</ul>
</form>



<form id="form" action="createPost.php" method="post">
<ul class="form-style-1">
<h1> Create a post: </h1>
    <li>
		<label>Full Name <span class="required">*</span></label>
		<input type="text" name="first_name" class="field-divided" placeholder="First" /> <input type="text" name="last_name" class="field-divided" placeholder="Last" />
	</li>
    <li>
        <label>Title <span class="required">*</span></label>
        <input type="text" name="title" class="field-long" />
    </li>
    <li>
        <label>Post <span class="required">*</span></label>
        <input type="text" name="text" class="field-long" />
    </li>
    <li>
        <a href="showPosts.php"><input type=button value="Show Posts" /></a>   <input type="submit" value="Create Post" />
    </li>
</ul>
</form>






<?php

	
	
	
	#$usersObj2 = new UsersContr();
	#$usersObj2->createUser("Jerry Cewitt", "password");

/*




    fetchOne($id) { return $record; }
    fetchAll() { return array(); }
    deleteOne($id) { return $success; }
    update($id, $properties = array()){ return $success; }
    add(){ return $id; }





*/
?>




</body>
</html>