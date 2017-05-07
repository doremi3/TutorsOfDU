<?php

	include"config.php";
	if(isset($_POST['submit']))
	{
	$username = $_POST['usr'];
	if(isset($_POST['new_password']) && $_POST['new_password'] != "")
	{
		$password = md5($_POST['new_password']);
		$sql = "UPDATE user_info SET password = '$password' WHERE username='$username'";
		$conn->query($sql);
	}
	if(isset($_POST['bio']) && $_POST['bio'] != "")
	{
		$bio = $_POST['bio'];
		$sql = "UPDATE user_info SET biography = '$bio' WHERE username='$username'";
		$conn->query($sql);
	}
	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$sql = "SELECT * FROM user_info WHERE username='$username'";
		$result = $conn->query($sql);
		$list = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if($list['email'] != $email)
		{
			$sql = "UPDATE user_info SET email = '$email' WHERE username = '$username'";
			$conn->query($sql);
			
			$hash = md5(rand(0,1000));
			$sql = "UPDATE user_hash SET hash = '$hash' WHERE username= '$username'";
			$conn->query($sql);
			$sql = "UPDATE user_hash SET active = 1 WHERE username= '$username'";
			$conn->query($sql);
			
			sendVerification($username, $email, $list['name'], $hash);
			
		}
	}
	
	
	$target_dir = "uploads/";
	$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	 if($check==true){
			$target_file = $target_dir . $username . "." . "jpg";
		
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			
			$width=100;
			$height=100;
			$image = imagecreatefromgd($target_file);
			$new_image = imagecreatetruecolor($width, $height);
			imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
			$image = $new_image;
			echo "";
	 }} else {
			echo "Sorry, there was an error uploading your file.";
		}
	
	
	if(isset($_POST['salary']) && $_POST['salary'] != "" )
	{
		$salary = $_POST['salary'];
		
		$sql = "UPDATE user_salary SET salary = '$salary' WHERE username = '$username' ";
		$conn->query($sql);
	}
	if(isset($_POST['del_course']))
	{
		$course = $_POST['del_course'];
		
		foreach ($course as $curr)
		{
			$sql = "DELETE FROM user_course WHERE username= '$username' AND course='$curr'";
			$conn->query($sql);
		}
	}
	if(isset($_POST['add_course']))
	{
		$course = $_POST['add_course'];
		
		foreach ($course as $curr)
		{
			$sql = "SELECT FROM user_course WHERE username= '$username' AND course='$curr'";
			echo $curr;
			$result = $conn->query($sql);
			if($result->num_rows == 0)
			{
				$primary = $username."#".$curr;
				$sql = "INSERT INTO user_course(username_course, username, course) VALUES ('$primary','$username','$curr')";
				$conn->query($sql);
			}
		}
	}
	
	if(isset($_POST['del_location']))
	{
		$location = $_POST['del_location'];
		
		foreach ($location as $curr)
		{
			$sql = "DELETE FROM user_location WHERE username= '$username' AND location='$curr'";
			$conn->query($sql);
		}
	}
	if(isset($_POST['add_location']))
	{
		$location = $_POST['add_location'];
		
		foreach ($location as $curr)
		{
			$sql = "SELECT FROM user_location WHERE username= '$username' AND location='$curr'";
			$result=$conn->query($sql);
			if($result->num_rows == 0)
			{
				$primary = $username."#".$curr;
				$sql = "INSERT INTO user_location(username_location, username, location) VALUES ('$primary','$username','$curr')";
				$conn->query($sql);
			}
		}
	}

	header("location: profile.php?username=".$username);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function sendVerification($username, $email, $name, $hash)
{
    $subject = 'Please confirm your email'; // Give the email a subject
	
    $address="http://csedu.cf/tutorsfromdu/verify.php?username=".$username."&code=".$hash;
    $body = '
	
	Hello '.$name.' !
 
	------------------------
	Your username: '.$username.'
	------------------------
 
	Please Log in and click this link to activate your account:.
	 '.$address.'
	 Regards,
	 Tutors From DU Team'
	 ;
	 sendEmail($email,$subject,$body);

}
	
?>