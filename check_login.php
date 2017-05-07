<?php
			  
			include("config.php");

			session_start();

			$username=$_POST['username'];
			$password=$_POST['password'];
			$password = md5($password);

			
			
			$sql = "SELECT username FROM user_info WHERE username = '$username' and password='$password'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
					$_SESSION['login_user']=$username;
					echo "";

			}
			else
				echo "Username or password is invalid";
			 
			

			 

			
?>