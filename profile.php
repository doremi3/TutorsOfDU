

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
				

				<!-- Two -->
				
					
					<section id="two">
					
						<?php

					session_start();
					include"config.php";
					
					if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                                            include"user_header.php";
                                         else
                                             include"login_header.php";

					$username = $_GET['username'];
					$sql = "SELECT username,name,department FROM user_info WHERE username = '$username'";
					$result = $conn->query($sql);
					$list = mysqli_fetch_array($result,MYSQLI_ASSOC);

				?>
					
						
						Username : <?php echo $list['username'] ?><br>
						Name : <?php echo $list['name'] ?><br>
						Department : <?php echo $list['department'] ?><br>
						
						<form action="index.php" method="get">

							<input type="hidden" value=<?php echo $username ?> name = "to">
							
							
							<?php
								
								if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_SESSION['login_user']) && $_SESSION['login_user']==$username)
								{
									$address="editprofile.php?to=".$username; 
									echo "<a href = ".$address." class=\"button\" >Edit Profile</a>" ;
								}
								else
								{
									$address="message.php?to=".$username; 
									echo "<a href = ".$address." class=\"button\" > Send a message</a>" ;
								}
							?>
							
							
						
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


