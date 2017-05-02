<?php

$email = $_POST["email"];


include"config.php";
$sql = "SELECT email FROM user_info WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Email is already in use";

}
else
	echo "";





$conn->close();
?>