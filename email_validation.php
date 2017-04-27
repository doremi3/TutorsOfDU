<?php

$email = $_POST["email"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutors_of_du";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT email FROM user_info WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Email is already in use";

}
else
	echo "";





$conn->close();
?>