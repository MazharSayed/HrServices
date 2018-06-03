<?php
session_start();
include "conn.php";
if(isset($_POST['login']))
{
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	
	$error=="";
	if($user==""){
		$error['user']="Please Enter User name";
	
		
}
if($pass==""){
	$error['pass']="Plaese Enter Password";
}

if($error==""){
	$sel=mysql_query("select * from user where username='$user'");
	if($sel){
		while($row=mysql_fetch_assoc($sel)){
			if($pass==$row['password']){
				echo "<script>window.location.assign('profile.php')</script>";
				$_SESSION['username']=$user;
				$_SESSION['email']=$row['email'];
	}
	else{
		$error['error']="Plz Check Password";
	
	}
		}
	}
	else{
		$error['error']=mysql_error();
}

	
	}
}

	?>







<html>
<head><title>Login</title>
<link rel="stylesheet" href="css/style 1.css">
<link rel="stylesheet" href="css/bootstrap3.css">

</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<H1 class="text-center">Welcome</H1>
<form action="" method="POST">
<div class="login" "ss">
<?php  

if(isset($error['error']))
{
	
	echo $error['error'];
}
?>

<input type="text" placeholder="User Id" name="username" value=
<?php  
if(isset($_POST['username']))
{
	echo $_POST['username']; 
}
?>></input><br>

<?php  
if(isset($error['user']))
{
	echo $error['user'];
}
	
?>

<input type="password" placeholder="Password" name="pass" value=
<?php  
if(isset($_POST['pass']))
{
	echo $_POST['pass']; 
}
?>></input><br>

<?php  
if(isset($error['pass']))
{
	echo $error['pass'];
}
?>
</div>
<br>
<input type="submit" class="btn btn-success" name="login" value="Login">
</form>
</div>
<div class="col-md-4">
</div>

</div>
</div>

</body>





</html>