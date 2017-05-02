<?php





include"config.php";
$username = $_POST["username"];
$sql = "SELECT username FROM user_info WHERE username = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Username is already in use";

}
else
	echo "";





$conn->close();
?>