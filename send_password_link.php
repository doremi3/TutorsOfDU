<?php

	include"config.php";
	include"send_email.php";
	$value = $_POST['username'];
	
	
	$sql="SELECT username,name,email FROM user_info WHERE username = '$value' OR email='$value'";
	$result=$conn->query($sql);
	$list=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$username=$list['username'];
	$email=$list['email'];
	$name=$list['name'];
	
	$hash = md5( rand(0,1000) );
	$sql="UPDATE user_info SET password = '$hash' WHERE username = '$username' ";
	$conn->query($sql);
	
	$address="http://csedu.cf/tutorsfromdu/resetPassword.php?username=".$username."&code=".$hash;
	
	$subject = "Password reset instructions";
	
	$body = '
	
	Hello '.$name.' !
 
	------------------------
	Your username: '.$username.'
	------------------------
	
	Someone has requested for a link to reset your password. You can reset it by clicking on the link below.
 
	 '.$address.'
	 
	 If you did not request the reset link, then ignore this email.
	 
	 Do not be worried because your password will not change unless you click on this link or change it from your account. :)
	 
	 Have a good day!
	 
	 Regards,
	 Tutors From DU Team'
	 ;
	
	
	sendEmail($email,$subject,$body);

?>