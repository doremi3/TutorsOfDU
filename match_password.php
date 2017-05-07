<?php

	include("config.php");

	session_start();
	$old = $_POST['old_password'];
	$curr = $_POST['curr_password'];
	$curr = md5( $curr );
	if($old==$curr)
		echo "valid";
	else
		echo "invalid";
?>