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
$phone_privacy=$_POST["phone_privacy"];
$photo = "photo";
$gender=$_POST["gender"];
$department = $_POST["department"];
$biography = $_POST["biography"];


$target_dir = "uploads/";
$target_file = $target_dir.$_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file=$target_dir.$username.".".$imageFileType;
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


$sql = "INSERT INTO user_info (username, email, name, password, gender,phone, phone_privacy,department,biography,verified) VALUES ('$username', '$email','$name', '$password','$gender', '$phone', '$phone_privacy','$department','$biography',0)";

if ($conn->query($sql) == TRUE) {
    header( "Location: registered.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
