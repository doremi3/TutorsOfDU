<?php

	$to=$_GET['to'];
	
?>

<form method = "post" action = "send_message.php">

				<input type="hidden" value=<?php echo $to ?> name = "to">

				<label for="name">Your name:</label>
				  <input type="text" name="name" id = "name" required><br>
                                  
				  
				  <label for="mail">Your email:</label>
				  <input type="email" name="email" id="email" required><br>
                                   
                                   
                   <label for="message">Additional message:</label>
				  <input type="text" name="message" id = "message"><br>
				  
				  <input type = "submit" value="Send" >
                                   
				  
				  

</form>