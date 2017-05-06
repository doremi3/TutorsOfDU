<?php

	include"send_email.php";
	include"config.php";

	$from = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	
	$to = $_POST['to'];
	$sql = "SELECT email FROM user_info WHERE username = '$to'";
    $result = $conn->query($sql);
    $list = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$to = $list['email'];
	
	$subject = 'Tution offer from '.$from;
	$body = '
	
	Name : '.$from.'
	
	Email: '.$email.'
	
	
	Message from '.$from.' : 
	
	'.$message;
	
	
	
	
	sendEmail($to,$subject,$body);
	
	//echo "Message has been sent! :)";
	
	
	
	

?>