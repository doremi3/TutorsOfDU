<?php
    include"config.php";

    $username = $_GET['username'];
    $sql = "SELECT username,name,department FROM user_info WHERE username = '$username'";
    $result = $conn->query($sql);
    $list = mysqli_fetch_array($result,MYSQLI_ASSOC)

?>

Username : <?php echo $list['username'] ?><br>
Name : <?php echo $list['name'] ?><br>
Department : <?php echo $list['department'] ?><br>

<form action="index.php" method="get">

	<input type="hidden" value=<?php echo $username ?> name = "to">
	<input type = "submit" value = "Send a message" formaction = "message_form.php?">
    <input type="submit" value="Go to home">
</form>

