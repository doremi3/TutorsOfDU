<?php

	session_start();

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
					<section id="two">
						
					<!--	<p>
						<span class="image left"><img src="images/thumbs/02.jpg" alt="" height="150" width="243"/></span>
						Name: Raisa Naser <br>
						Department: Department of Applied Chemistry and Chemical Engineering <br>							
						<button onclick="document.getElementById('info').style.display='block'" style="width:auto;">View More Info</button>																															
						</p>	--!>					
						

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
			
			
		<!-- Individual's Identities -->
		
		<div id="info" class="modal">
			<span onclick="document.getElementById('info').style.display='none'" class="close" title="Close Modal">�</span>
							
				<form action="registered.php" method="post">
				
				<center> <span class="image left"><img src="images/thumbs/02.jpg" alt="" height="150" width="243"/></span></center>
				
				<h2> Name: Raisa Naser </h2>
				<h5> Department: Department of Applied Chemistry and Chemical Engineering</h5>
				<br> <br>
				
				<h5> Interests: Math, Physic, Chemistry, Biology </h5>
				<h5> Location: Shantinagar </h5>
			
				<button type="submit">Send Message</button>
			  </form>
				  
		</div>
		
		<?php 
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true);
                    else
                        include"login_module.php"
                     
                ?>
		
		
		<script>
		// Get the modal
		var modal = document.getElementById('info');
		var modal1 = document.getElementById('id01');
		var modal2 = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(events) {
			if (events.target == modal1 || events.target == modal || events.target == modal2) {
				modal.style.display = "none";
				modal1.style.display = "none";				
				modal2.style.display = "none";
			}
		}				
		</script>
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>