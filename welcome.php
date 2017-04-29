<?php
    session_start();
    echo $_SESSION['login_user'];
?>

<form action="logout.php">
    <input type="submit" value="Logout">
</form>

