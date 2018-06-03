<?php
session_start();
include "conn.php";
$count=0;
$select=mysql_query("select * from user where resume='1' and status='0'");

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
<li><a href="selection process.php">Selection process</a></li>
<li><a href="Current openings.php">Current openings</a></li>
<li><a href="login.php">Activities</a></li>
<li><a href="contact.php">Contact</a></li>
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
<?php
if($select){
	
while($row=mysql_fetch_assoc($select)){
$email=$row['email'];
	$path=$row['path'];
echo $row['name']."<a href=".$path." target='_blank'>Resume</a>\n <br><a href=sendmail.php?email=".$email.">Mail</a><br>";
$count++;
}
echo "Total Resumes".$count."<br>";
}
else{
	echo mysql_error();
}
?>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
