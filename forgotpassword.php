<?php


	session_start();
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	

?>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>  
    </head>

	<?php include"filter_sidebar.php" ?>
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
						include("config.php");
						$sql = "SELECT username,name,department FROM user_info WHERE isAvailable = '1'";
						$result = $conn->query($sql);
						
						$rows = $result->num_rows;
						
						
						$cnt=0;
						
						
					?>
					<section id="two" style="margin-left: 100px;">
						<h3>Enter your username or email below and we will send you a link to reset your password.</h3>
																
						<article class=\"3u 12u$(xsmall) work-item\">
							<form method="post" enctype="multipart/form-data" onsubmit = "return valid_user()">
				
								
								<input type="text" name = "username" id="username" size="100" required><br>
								<center><p  id="valid_user"></p></center>
								<input type="hidden" name = "forgot" id="forgot" value="1">
								<button type="submit" value="Submit">Get password reset instructions</button><br>
							</form>
						</article>
									
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
                        
                        <script type ="text/javascript"></script>
			<script>

				function valid_user()
				{
						var inpObj = document.getElementById("username");
						var xhttp = new XMLHttpRequest();
						var response;
						var url="valid_user.php";
						var params = "username="+inpObj.value;
						xhttp.open("POST",url,false);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					
						xhttp.onreadystatechange = function()
						{
							if(this.readyState==4 && this.status ==200)
							{					
								response =xhttp.responseText;
								
								
								
							}
						}
						
						
						xhttp.send(params);	
						document.getElementById("valid_user").style.fontSize = "x-large";
						if(response=="")
						{
							document.getElementById("valid_user").innerHTML = "Sorry! We do not recognize you! :("
						}
						else
						{
							
							document.getElementById("valid_user").innerHTML = "Please check your email and follow the instructions! :)"
							sendResetLink();
						}
						return false;
				}
				
				
				function sendResetLink()
				{
						var inpObj = document.getElementById("username");
						var xhttp = new XMLHttpRequest();
						var response;
						var url="send_password_link.php";
						var params = "username="+inpObj.value;
						xhttp.open("POST",url,false);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					
						xhttp.onreadystatechange = function()
						{
							if(this.readyState==4 && this.status ==200)
							{					
								response =xhttp.responseText;
								
								
								
							}
						}
						
						
						xhttp.send(params);	
						
				}

</script>
		
                

	</body>





</html>