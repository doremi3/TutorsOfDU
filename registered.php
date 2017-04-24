<html>
    <form action="index.php">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorsofdu";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST["username"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$phone_privacy = $_POST["phone_privacy"];
$user_type= $_POST["user_type"];
$photo = $_POST["photo"];

$sql = "INSERT INTO user_info (username, email, name, password, phone, phone_privacy,user_type,photo) VALUES ('$username', '$email','$name', '$password', '$phone', '$phone_privacy','$user_type','$photo')";

if ($conn->query($sql) == TRUE) {
   echo"Registration is complete! ^_^";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
        <br>
    <input type="submit" value="Done">
    </form>
</html>