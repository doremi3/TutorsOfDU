<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "tutors_of_du";

/*$username = "tutorsfromdu";
$password = "tutors0312";
$dbname = "tutorsfromdu";*/

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
