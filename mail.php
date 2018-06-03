<?php
$to = "sadcompiler@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)){
	echo "success";
}
else{
	$m=error_get_last();
}
echo $m;
?>
