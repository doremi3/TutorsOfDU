
<?php
								$address="profile.php?username=".$_SESSION['login_user'];
							?>
							
<?php
								$username = $_SESSION['login_user'];
								include"config.php";
								$sql = "SELECT verified FROM user_info WHERE username = '$username'";
								$result = $conn->query($sql);
								$list = mysqli_fetch_array($result,MYSQLI_ASSOC);
								if($list['verified']==0)
									echo "<center> <font color=\"red\">Please confirm your email address. Otherwise your profile will remain invisible to others.</font></center>";
							?>

<div class="user_header" id = "user_header">

						
						<div class = "logo" >
						
							<a href="home.php" class="image avatar"><img src="images/avatar.jpg" alt="" height="100"/></a>
						</div>
						
						<div class = "title" >
							 <a href="home.php" class="image avatar"><font color = "White">Tutors from<br> University of Dhaka</font></a>
						</div>  
						
						<br>
						<div style="float: right;">
							
								<a href="home.php" class="button special">Home</a>
								
								<a href=<?php echo $address; ?> class="button special" >Profile</a>
												
								<a href="logout.php" class="button special" >Log Out</a>
							</div>
			</div>































<?php
/*
********************************88
<section id="one">
						<header class="major">
						<!--
							<h2>Find out the perfect home tutor for you!<br/>
							Or, Share your eligibility as a tutor.<br /> </h2>
							
						</header>
						<p>If you are searching for a home tutor then you have come to the right place. "Tutors of Dhaka University" is the place where you get to know about the most eligile private tutors from around the university. </p> <p>On the other hand, if you are willing to work as a home tutor then sign up and share your informations to get hired.</p>
						-->
						
						<ul class="actions">
						
						
							
						<!--	<li>
							<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><?php echo $_SESSION['login_user']?></button>														
							</li>							
							
							<li>
							<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log Out</button>	
													
							</li> -->
							
							<?php
								$address="profile.php?username=".$_SESSION['login_user'];
							?>
							<div>
							
								<a href="home.php" class="button">Home</a>
								
								<a href=<?php echo $address; ?> class="button" ><?php echo $_SESSION['login_user'] ?></a>
												
								<a href="logout.php" class="button" >Log Out</a>
							</div>
                                                        
                                         
							
						</ul>
						<?php
								$username = $_SESSION['login_user'];
								include"config.php";
								$sql = "SELECT verified FROM user_info WHERE username = '$username'";
								$result = $conn->query($sql);
								$list = mysqli_fetch_array($result,MYSQLI_ASSOC);
								if($list['verified']==0)
									echo "Please confirm your email address. Otherwise your profile will remain invisible to others.";
							?>
							
                                                
					</section>


*/
?>
