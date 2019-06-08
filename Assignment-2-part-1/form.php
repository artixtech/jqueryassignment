<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Assignment 1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['rptPwd'])){  
			print_r( "Name :".$_POST['name']);  
		    print_r( "Email :".$_POST['email']);
		    print_r( "<br/>Password :".$_POST['password']);
		    print_r( "<br/>Agreed to terms and conditions");
		}
		else{
	?>
	<div class="design">
	    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
	    	<label>Name :</label><br/>
	        <input type="text" name="name" id="name"><br/>
	        <label>Email :</label><br/>
	        <input type="email" name="email" id="email"><br/>
	        <label>Password :</label><br/>
	        <input type="password" name="password" id="pwd"><br/>
	        <label>Confirm password :</label><br/>
	        <input type="password" name="rptPwd" id="rptPwd"><br/><br/>
	        <input  type="checkbox" name="tc" id="tc"> Here Terms And Conditions<br/>
	        <button type="button" id="submitBtn">Submit</button><br/><br/>
	    </form>
	    <?php 
	}
	?>
	</div>
</body>
</html>