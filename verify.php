<?php

	session_start();
	include"config.php";
	
	if(isset($_GET['username']) && !empty($_GET['username']) AND isset($_GET['code']) && !empty($_GET['code']))
	{
		// Verify data
		$username = $_GET['username']; // Set email variable
		$hash = $_GET['code']; // Set hash variable
		if($_SESSION['login_user']==$username)
		{
			$sql = "SELECT hash, active FROM user_hash WHERE username = '$username'";
			$result = $conn->query($sql);
			if ($result == TRUE ) 
			{
				
				$list = mysqli_fetch_array($result,MYSQLI_ASSOC);
				if($list['hash']==$hash && $list['active']==1)
				{
						
						$sql="UPDATE user_info SET verified = 1 WHERE username = '$username' ";
						$conn->query($sql);
						$sql="UPDATE user_hash SET active = 0 WHERE username = '$username' ";
						$conn->query($sql);
				}
					
			} 
		}
		//$conn->close();
		}
		
		header("location: home.php");
		
		
	

?>