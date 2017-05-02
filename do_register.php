<?php

session_start();
include"config.php";
$username = $_POST["username"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$phone_privacy = $_POST["phone_privacy"];
$photo = "photo";
$gender = $_POST["gender"];
$department = $_POST["department"];
$biography = $_POST["biography"];


$target_dir = "uploads/";
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir . $username . "." . "jpg";
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
    $width=100;
    $height=100;
    $image = imagecreatefromgd($target_file);
    $new_image = imagecreatetruecolor($width, $height);
    imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
    $image = $new_image;
    echo "";
} else {
    echo "Sorry, there was an error uploading your file.";
}


$sql = "INSERT INTO user_info (username, email, name, password, gender,phone, phone_privacy,department,biography,verified,isAvailable) VALUES ('$username', '$email','$name', '$password','$gender', '$phone', '$phone_privacy','$department','$biography',0,1)";

if ($conn->query($sql) == TRUE) {
    $username = $_POST['username'];
    $_SESSION['login_user'] = $username;
    $_SESSION['logged_in'] = true;

    header("location: home.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
