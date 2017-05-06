<?php

$servername="localhost";
$username_database="root";
$password_database="";
$dbname = "tutors_of_du";

/*$username_database = "tutorsfromdu";
$password_database = "tutors0312";
$dbname = "tutorsfromdu";*/

$conn = new mysqli($servername, $username_database, $password_database, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
