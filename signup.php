<?php
include "conn.php";
if(isset($_POST['signup'])){
	$name=$_POST['name'];
	$username=$_POST['user'];
	$pass=$_POST['pass'];
	$conpass=$_POST['conpass'];
	$email=$_POST['email'];
	
	
	$error="";
	
	if($name==""){
		$error['name']="PLZ enter name";
	}
	if($username==""){
		$error['username']="PLZ enter username";
	}
	if($pass==""){
		$error['pass']="Plz enter password";
	
	}
	if($conpass==""){
		$error['cpass']="Plz enter confirm password";
	}
	if($pass!=$conpass){
		$error['pass']="Password not matched";
	}
	if($email==""){
		$error['email']="Plz enter email";
	}
	
	
	
	if($error==""){
		$insert=mysql_query("insert into user values('$name','$username','$pass','$email','0','','0')");
		if($insert){
			echo "<script>alert('registration done login plz');</script>";
			echo "<script>window.location.assign('login.php')</script>";
		
	}
	else{
		$error['error']=mysql_error();
	}
}
}

?>

<html>
<head>
<title>singup
</title>
<link rel="stylesheet" href="css/style7.css">
<link rel="stylesheet" href="css/bootstrap4.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<div class="navbar navbar-default s">
<div class="container">
<div class="navbar-header">

<button class="navbar-toggle" data-toggle="collapse" data-target="#ss">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>


<div id="ss" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Home</a></li>
<li><a href="Panel.html">Panel</a></li>
<li><a href="selection process.html">Selection process</a></li>
<li><a href="Current openings.html">Current openings</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-4">
</div>

<div class="col-md-4">
<h1 class="text-center">SINGUP</h1><br>
<form  action="" method="POST">
<div ><?php if(isset($error['error'])){echo $error['error'];}?></div>
<label>Full Name:</label>
<input type="text" name="name" value=<?php if(isset($_POST['name'])){echo $_POST['name'];}?>></input><br>
<div><?php if(isset($error['name'])){echo $error['name'];}?></div>
<label>User Name:</label><input type="name" name="user" value=<?php if(isset($_POST['user'])){echo $_POST['user'];}?>></input><br>
<div><?php if(isset($error['username'])){echo $error['username'];}?></div>
<label>Password:</label><input type="Password" name="pass" value=<?php if(isset($_POST['pass'])){echo $_POST['pass'];}?>></input><br>
<div><?php if(isset($error['pass'])){echo $error['pass'];}?></div>
<label>Confirm <br>password:</label><input type="password" name="conpass" value=<?php if(isset($_POST['conpass'])){echo $_POST['conpass'];}?>></input><br>
<div><?php if(isset($error['cpass'])){echo $error['cpass'];}?></div>
<label>Email:</label><input type="email" name="email" <?php if(isset($_POST['email'])){echo $_POST['email'];}?>></input><br>
<div><?php if(isset($error['email'])){echo $error['email'];}?></div>

<input type="submit" class="btn btn-success" name="signup" value="Signup">
</div>
</form>
<div class="col-md-4">
</div>
</div>
</div>
<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"> LOGO </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-primary">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2017 Copyright Text </p>
        </div>
    </footer>

</html>