<?php


	session_start();
	include"config.php";
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	

?>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/profile.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>  
    </head>

	
	<?php 
                                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                                            include"user_header.php";
                                         else
                                             include"login_header.php";
                                        ?>
		<!-- Main -->
			<section class="main">		
			
				<?php
					$username = $_GET['username'];
					$sql = "SELECT * FROM user_info WHERE username = '$username'";
					$result = $conn->query($sql);
					$list = mysqli_fetch_array($result,MYSQLI_ASSOC);
					$path="uploads/".$list['username'].".jpg";
					if(!file_exists($path))
						$path="uploads/default/avatar.jpg";

				?>
					
				<div class="profile">
				
				<form>
					<section class = "header_info" >
					
					<div class = "profile_pic" >
					<div class="3u"><span class="image fit"><img src= <?php echo $path; ?> alt="" /></span>  </div>
					
					<?php
						if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_SESSION['login_user']) && $_SESSION['login_user']==$list['username'])
							echo "<div class = \"changepp\" > <a href=\"editprofile.php?username=".$_SESSION['login_user']."\" class=\"button\">Edit Profile</button> </a> </div>";
					?>
	
					</div>
					<div class="basic_info">
					<br>
					<a href = "" >
					<font size="6" color="blue">
						<?php 
							echo $list['name'];
						?>
					</font>
					</a>
					<br>
					
					<font size="5">
						<?php 
							echo $list['department'];
						?>
					</font>
					<br>
					<br><br>
					
					</div>
					
					</section>
					
					<section class = "edit" >
					
						
					
					</section>
					
					<section class = "info" >
					

					
					<p> <font size="5"> About <?php echo $list['name']; ?> </font> <br/> <font size="4"><?php echo $list['biography']; ?></font> </p>
					
					<p> <font size="5"> Preferred subjects: </font> <br/> <font size="4">Physics</font> </p>
					
					<p> <font size="5"> Preferred locations: </font> <br/> <font size="4">Dhanmondi</font> </p>
					<p> <font size="5"> Minimum expected salary per month: </font> <br/> <font size="4">5000 BDT</font> </p>
					</section>
					
				</form>	
				</div>
				
				<div class="message">
				<section>
							
							<center> <h4><font size="5"> Send Message to <?php echo $list['name'] ?> </font></h4> </center>
							<form method = "post" onsubmit = "return sendMessage() " >
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" placeholder="Your Name" maxlength="50" required />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" placeholder="Your Email Address" maxlength="50" required />
									</div>
								
								
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message here and hit the send message button. An e-mail will be sent to the tutor containting your message and e-mail address. So the tutor will be able to reply to you in your provided e-mail address." rows="6"></textarea>
									</div>
									<input type="hidden" value=<?php echo $list['username'] ?> id = "to" >
									 <p id="success"></p>
									<div class="12u$">
										<ul class="actions">
										<center>
											<li><input type="submit" value="send" class="special" /></li>
										</center>
										</ul>
									</div>
								</div>
							</form>
						</section>
						</div>

			</section>

		<!-- Footer -->
			<?php include"footer.php" ?>
		<!-- Sign up form -->
		<?php 
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true);
                    else
                        include"login_module.php"
                     
                ?>
		
		
		
		<script>
		
			function sendMessage()
			{

				var inpname = document.getElementById("name");
				var inpto = document.getElementById("to");
				var inpemail = document.getElementById("email");
				var inpmessage = document.getElementById("message");
				var xhttp = new XMLHttpRequest();
				var response;
				var url="send_message.php";
				var params = "to="+inpto.value+"&name="+inpname.value+"&email="+inpemail.value+"&message="+inpmessage.value;
				xhttp.open("POST",url,false);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
				xhttp.onreadystatechange = function()
				{
					if(this.readyState==4 && this.status ==200)
					{					
						response =xhttp.responseText;
						//alert(response);
						document.getElementById("success").innerHTML = "Message has been sent! :)";
						
						
					}
				}
				
				xhttp.send(params);
				return false;
			}
		
		</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
		
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
                        
                        <script type ="text/javascript">
		
                

</html>

























