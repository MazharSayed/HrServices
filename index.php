<?php
session_start();

?>

<html>
<head><title>Index</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<div class="header">
<div class="row">

<h1 class="text-center">Priti Thakur PVT LTD</h1></div>
<?php
if(isset($_SESSION['username'])){

?>
<a href="logout.php">Logout</a>
<?php
}
else{
?>
<a href="login.php">Candidate Login</a>
<a href="hrlogin.php">HR Login</a>
<?php
}
?>

<a href="signup.php">candidate Signup</a>
</div>
</div>
</div>
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





<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner role="listbox">
    <div class="item active">
      <img src="images/New folder/1 .jpg" alt="">
    </div>

    <div class="item">
      <img src="images/New folder/2.jpg" alt="">
   </div>
    
	<div class="item">
      <img src="images/New folder/3.jpg" alt="">
   </div>
   <div class="item">
      <img src="images/New folder/4 .jpg" alt="">
   </div>
	</div>
  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
   
  </a>
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


