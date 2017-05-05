

<?php


	session_start();
	$to=$_GET['to'];

	

?>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>  
    </head>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<?php 
                                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                                            include"user_header.php";
                                         else
                                             include"login_header.php"
                                        ?>

				<!-- Two -->
				
					<?php
						
						
						
					?>
					<section id="two">
				
													
							<form method = "post" action = "send_message.php">

				<input type="hidden" value=<?php echo $to ?> name = "to">
				
				<label for="name">Your name:</label>
				  <input type="text" name="name" id = "name" required><br>
                                  
				  
				  <label for="mail">Your email:</label>
				  <input type="email" name="email" id="email" required><br>
                                   
                                   
                   <label for="message">Additional Message:</label>
                    <textarea id="message" name="message"></textarea>
				  
				  <input type = "submit" value="Send" >
                                   
				  
				  

</form>
							
						
						
						
					</section>

			
					
					
			</div>

		<!-- Footer -->
			<?php include"footer.php" ?>
		<!-- Sign up form -->
		<?php 
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true);
                    else
                        include"login_module.php"
                     
                ?>
		
		
		
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
		
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
                        
                        <script type ="text/javascript">
		
                

	</body>
</html>

