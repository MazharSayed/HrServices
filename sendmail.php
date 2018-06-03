<?php
session_start();
include "conn.php";
$to=$_GET['email'];
$headers = "From: company@example.com" . "\r\n" .
"CC: somebodyelse@example.com";


$error="";
if(isset($_POST['send'])){
	
	$subject=$_POST['subj'];
$text=$_POST['msg'];
	
	if($to==""){
		$error['to']="Please enter reciepent";
	}
	if($subject==""){
		$error['sub']="Enter subject";
	}
	if($text==""){
		$error['txt']="Enter Body of mail";
	}
	if($error==""){
		if(mail($to,$subject,$text,$headers)){
			$updat=mysql_query("update user set status='1' where email='$to'");
			if($updat){
$error['error']="success";
			}
			else{
				$error['error']=mysql_error();
			}
	
}
else{
	$error['error']="failed";
}
	}


}
?>



<html>
<head><title>Login</title>
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/bootstrap.css"></head>
<body>
<div class="main">
<p class="text-center">Welcome</p>
<form action="" method="POST">
<div class="login">

<?php  if(isset($error['error'])){echo $error['error'];}?>
<input type="text" placeholder="subject" name="subj" value=<?php  if(isset($_POST['subj'])){echo $_POST['subj']; }?>
></input><br>
<?php  if(isset($error['sub'])){echo $error['sub'];}?>

<input type="text" placeholder="message" name="msg" value=<?php  if(isset($_POST['msg'])){echo $_POST['msg']; }?>></input><br>
<?php  if(isset($error['txt'])){echo $error['txt'];}?>

<div class="col-sm-8 col-sm-offset-4"><br>
<input type="submit" class="btn btn-info" name="send" value="Send">
</div
>
</form>
</div>
</div>


</body>





</html>