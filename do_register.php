<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutors_of_du";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST["username"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$phone_privacy=1;
$photo = "photo";


$sql = "INSERT INTO user_info (username, email, name, password, phone, phone_privacy,photo,verified) VALUES ('$username', '$email','$name', '$password', '$phone', '$phone_privacy','$photo',0)";

if ($conn->query($sql) == TRUE) {
   echo"Registration is complete! ^_^";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
