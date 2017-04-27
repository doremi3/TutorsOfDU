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
$sql = "SELECT username FROM user_info WHERE username = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Username is already in use";

}
else
	echo "";





$conn->close();
?>