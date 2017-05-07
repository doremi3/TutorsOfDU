<?php

session_start();
include"config.php";
include"send_email.php";
$username = $_POST["username"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$password = md5( $password);
$phone = $_POST["phone"];
$phone_privacy = $_POST["phone_privacy"];
$photo = "photo";
$gender = $_POST["gender"];
$department = $_POST["department"];
$biography = $_POST["biography"];
$course = $_POST['course'];
$location = $_POST['location'];
$salary = $_POST['salary'];


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
 

$hash = md5( rand(0,1000) );
$sql = "INSERT INTO user_info (username, email, name, password, gender,phone, phone_privacy,department,biography,verified,isAvailable) VALUES ('$username', '$email','$name', '$password','$gender', '$phone', '$phone_privacy','$department','$biography',0,1)";
$hash_sql = "INSERT INTO user_hash (username, hash, active) VALUES ('$username','$hash', 1)";
if ($conn->query($sql) == TRUE && $conn->query($hash_sql)==TRUE ) {
    $username = $_POST["username"];
    $_SESSION['login_user'] = $username;
    $_SESSION['logged_in'] = true;
	
	$sql = "INSERT INTO user_salary (username, salary) VALUES ('$username', '$salary')";
	$conn->query($sql);
	
	foreach ($course as $curr)
	{
		$primary = $username."#".$curr;
		$sql = "INSERT INTO user_course (username_course, username, course) VALUES ('$primary', '$username', '$curr')";
		$conn->query($sql);
	
	}
	
	foreach ($location as $curr)
	{
		$primary = $username."#".$curr;
		$sql = "INSERT INTO user_location (username_location, username, location) VALUES ('$primary', '$username', '$curr')";
		$conn->query($sql);
	
	}
	
	sendVerification($username, $email, $name, $hash);
    header("location: home.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

function sendVerification($username, $email, $name, $hash)
{
    $subject = 'Please confirm your email'; // Give the email a subject
	
    $address="http://csedu.cf/tutorsfromdu/verify.php?username=".$username."&code=".$hash;
    $body = '
	
	Hello '.$name.' !
 
	Welcome to tutors Tutors from DU!
 
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
