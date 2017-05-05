<?php

	include"config.php";
	$value=$_POST['username'];
	$sql="SELECT email from user_info WHERE username = '$value' OR email = '$value'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		$list = mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo $list['email'];
	}
	else
		echo "";

?>