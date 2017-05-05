<?php


	session_start();
	include("config.php");
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	if(isset($_GET['username']))
	{
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['login_user'] != $_GET['username'])
			header("location: home.php");
		else
		{
			
				$username = $_GET['username'];
				$hash = $_GET['code'];
				
				$sql = "SELECT password FROM user_info WHERE username='$username'";
				$result=$conn->query($sql);
				
				if($result->num_rows>0)
				{
					$list = mysqli_fetch_array($result,MYSQLI_ASSOC);
					if($list['password'] != $hash)
						header("location: home.php?");
				}
				else
					header("location: home.php");
			
		}
	}
	else
	{
		if(isset($_SESSION['logged_in']))
		{
			$username = $_SESSION['login_user'];
		}
		else
			header("location: home.php");
	}
	
	if(isset($_POST['password1']))
	{
		
		$password = $_POST['password1'];
		$sql = "UPDATE user_info SET password='$password' WHERE username='$username'";
		$conn->query($sql);
		$_SESSION['login_user']=$username;
		$_SESSION['logged_in']=true;
		header("location: home.php");
	}
	
	

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
				
					
					<center>
					<section id="two">
																
						<article class=\"3u 12u$(xsmall) work-item\">
							<form method="post" enctype="multipart/form-data" onsubmit = "return checkPassword()" action="">
				
								<label for="password">New password:</label>
								<input type="password" name = "password1" id="password1" size="50" maxlength ="40" required><br>
								<label for="password">Confirm new password:</label>
								<input type="password" name = "password2" id="password2" size="50" maxlength ="40" required><br>
								
								<center><p  id="valid_info"></p></center>
								<input type="hidden" name = "forgot" id="forgot" value="1">
								<button type="submit" value="Submit">Change Password</button><br>
							</form>
						</article>
									
					</section>
					</center>

				
					
					
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
			
				function checkPassword()
				{
					var pass1 = document.getElementById("password1");
					var pass2 = document.getElementById("password2");
					if(pass1.value != pass2.value)
					{
						document.getElementById("valid_info").innerHTML = "Passwords do not match! :(";
						return false;
					}
					else
					{
						return true;
					}
				}
			
			</script>
			
		
                

	</body>





</html>