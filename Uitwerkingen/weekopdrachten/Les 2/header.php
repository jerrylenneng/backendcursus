<html>
<head>
	<style>

	body {font-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box;}

	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}

	input[type=submit] {
	  background-color: #4CAF50;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	pre, code {
	  font-family: monospace, monospace;
	}
	pre {
	  overflow: auto;
	}
	pre > code {
	  display: block;
	  padding: 0rem;
	  word-wrap: normal;
	}

	#logo {
		position:fixed; top:0; left:0;
	}

	#form {
		clear:both;
	}


	.menu, .footer  {
	  list-style-type: none;
	  margin: 16px 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #333;
	  color: white;
	}

	.footer {
		padding: 20px;
	}

	.menu li, .footer li {
	   float: left;
	}

	.menu li a, .footer li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	.menu li a:hover:not(.active) {
	  background-color: #111;
	}

	.menu li a.active {
	  float: right;
	}

	.active {
	  background-color: #4CAF50;
	}

	</style>
</head>
