<?php

	session_start();
        $username = $_POST['username'];
         $_SESSION['login_user'] = $username;
         $_SESSION['logged_in']=true;
         
         header("location: home.php");
	//header("Location: home.php");

?>