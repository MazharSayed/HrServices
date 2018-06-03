<?php
session_start();

include "conn.php";
if(!isset($_SESSION['username'])){
	echo "<script>alert('plz login');</script>";
	echo "<script>window.location.assign('index.php')</script>";
}
$email=$_SESSION['email'];
$getdata=mysql_query("select * from user where email='$email'");
while($row=mysql_fetch_assoc($getdata)){
	$name=$row['name'];
	$email=$row['email'];
	$res=$row['resume'];
	$path=urlencode($row['path']);
	$status=$row['status'];
}
if(isset($_POST['upload'])){
$target="resumes/";
$n=str_replace(" ","-",$_FILES['myFile']['name']);
echo $n;
$filetype=$target.basename($n);
$name=basename($filetype);
$ext=pathinfo($name, PATHINFO_EXTENSION);
if($ext=="pdf")
{
	if(move_uploaded_file($_FILES["myFile"]["tmp_name"],$filetype )){
	
		$updat=mysql_query("update user set resume='1',path='$filetype' where email='$email'");
		if($updat){
				echo "<script>alert('File uploaded successfully')</script>";
				echo "<script>window.location.assign('profile.php');</script>";
		}
		else{
			echo mysql_error();
		}
	}
	else{
		echo "Error";
	}
}
	
}


?>
<html>
<head><title>Profile</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style7.css">
<link rel="stylesheet" href="css/bootstrap4.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script></head>

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
<li><a href="login.html">Activities</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">
<br><br>

<div class="col-lg-3">
</div>

<div class="col-lg-7" style="background-color:#9db3d0;border-radius:10px;">
<h1 align="center" >Welcome &nbsp;<?php echo $name."<br>";?></h1>
<div class="container">
<h3 >Email :</h3><h4><?php echo $email."<br>";?></h4>
<?php


if($res==0){
	
?>
<div>
<h3>Resume Status:</h3>
<form action="" method="post" enctype="multipart/form-data">
 
<input name="myFile" type="file">

<input type="submit" class="btn btn-info" name="upload" value="Upload">
<a href="logout.php">Logout</a>
</form>

</div>
<?php


}
else{
?><h3>Resume Status:</h3><h4><?php
	if($status=="0"){
		
		echo "Your resume is under process";
	}
	else{
		echo "Your resume have assessed please check Your Email";
	}
?>
</h4>
<div><a href=<?php echo urldecode($path);  ?> class="btn btn-danger " target="_blank"> Show</a>&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></div>
<?php
}
?>
<br>
<br>
</div>
</div>
<div class="col-lg-3">
</div>
</div>
</div>
<br><br><br>
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

</body>

</html>