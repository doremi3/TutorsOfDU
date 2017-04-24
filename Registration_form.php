<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="registered.php" method = "post">
            Userame:<br>
            <input type="text" name="username" required=""><br>
            Email:<br>
            <input type="email" name="email" required=""><br>
            Name:<br>
            <input type="text" name="name" required=""><br>
            Password:<br>
            <input type="password" name="password" required=""><br>
            Phone:<br>
            <input type="tel" name="phone">
            <select>
                <option value=0 selected="selected">Only me</option>
                <option value=1 >Everyone</option>
            </select><br>
            
            Do you want to join as a tutor?<br>
            <input type ="radio" name="user_type" value=1>Yes<br>
            <input type ="radio" name="user_type" value=0 checked="true">No<br>
            <input type="file" name="photo" accept="image/*">
            <input type="submit" value="Submit">
        </form>
        <?php
        // put your code here

        ?>
    </body>
</html>

