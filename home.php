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
					<section id="two">
						<h2>Some of the tutors</h2>
													
							<?php 
							$cnt=0;
							
							while($list = mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
							
								
							
								echo "<article class=\"3u 12u$(xsmall) work-item\">";
								echo "<a href=\"uploads/". $list['username'].".jpg \" class=\"image fit thumb\"><img src=\"uploads/".$list['username'].".jpg\" alt=\"\"></a>";
								echo "<a href=\"profile.php?username=".$list['username']."\" >".$list['name']."</a>";
                                                               // echo "	<h3> ".$list['name']." </h3>";
								echo "	<p> ".$list['department']." </p>"	;															
								echo "</article>";
								$cnt = $cnt+1;
								if($cnt == 8 )
									break;
							
							}
							
							?>
							
						
						
						<ul class="actions">
                                                    <a href="view_all.php" class="button">View All</a>
						</ul>
					</section>

				<!-- Three -->
					<!-- <section id="three">
						<h2>Get In Touch</h2>
						<p>Want to send us some feedback/suggestion or report any bug?</p>
						<div class="row">
							<div class="8u 12u$(small)">
								<form method="post" action="#">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
										<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
										<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
									</div>
								</form>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
							<div class="4u$ 12u$(small)">
								<ul class="labeled-icons">
									<li>
										<h3 class="icon fa-home"><span class="label">Address</span></h3>
										CSE Department<br />
										University of Dhaka<br />
										Bangladesh
									</li>
									<li>
										<h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
										0185-2808950
									</li>
									<li>
										<h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
										<a href="#">tutorsofdu@gmail.com</a>
									</li>
								</ul>
							</div>
						</div>
					</section> -->
					
					
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