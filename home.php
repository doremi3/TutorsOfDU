<?php

	session_start();
	$login_session=$_SESSION['login_user'];
	echo $login_session;?></h1>

?>
<html>
	<head>
		<title>Tutors of Dhaka University</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>  

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="http://www.du.ac.bd" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
					<h2><strong>Tutors of Dhaka University</strong></h2>
					
					<section id = "filter">
					
						<form action="registered.php" method="post">
		  
						<h1>Sign Up</h1>
						
						<fieldset>
						<label for="category">Subject/Category:</label>
						<select id="category" name="category">
						  <optgroup label="Science">
							<option value="Physics">Physics</option>
							<option value="chemistry">Chemistry</option>
							<option value="biology">Bilogy</option>
							<option value="mathematics">Mathematics</option>
						  </optgroup>
						  
						  <optgroup label="Commerce">
							<option value="finance">Finance</option>
							<option value="marketing">Marketing</option>
						  </optgroup>
						</select>										
						
					
						<fieldset>
						<label for="department">Department:</label>
						<select id="department" name="user_department">
						  <optgroup label="Engineering Faculty">
							<option value="computer_science_and_engineering">Computer Science and Engineering</option>
							<option value="genetics">Genetics</option>            
						  </optgroup>
						  
						  <optgroup label="Business Facutly">
							<option value="finance">Finance</option>
							<option value="marketing">Marketing</option>
						  </optgroup>
						</select>
						
						<!--
						  <label>Interests:</label>
						  <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
							<input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
						  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>
						-->
						
						</fieldset>
						<button type="submit">Filter</button>
					  </form>
					</section>
					
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
						<!--
							<h2>Find out the perfect home tutor for you!<br/>
							Or, Share your eligibility as a tutor.<br /> </h2>
							
						</header>
						<p>If you are searching for a home tutor then you have come to the right place. "Tutors of Dhaka University" is the place where you get to know about the most eligile private tutors from around the university. </p> <p>On the other hand, if you are willing to work as a home tutor then sign up and share your informations to get hired.</p>
						-->
						
						<ul class="actions">
							
							<li>
							<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>														
							</li>							
							
							<li>
							<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>														
							</li>
							
						</ul>
					</section>

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
								echo "	<a href=\"uploads/". $list['username'].".jpg \" class=\"image fit thumb\"><img src=\"uploads/".$list['username'].".jpg\" alt=\"\"></a>";
								echo "	<h3> ".$list['name']." </h3>";
								echo "	<p> ".$list['department']." </p>"	;															
								echo "</article>";
								$cnt = $cnt+1;
								if($cnt > 12 )
									break;
							
							}
							
							?>
							
							
						
						<ul class="actions">
							<li><a href="main.html" class="button">View All</a></li>
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
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; R <sup>TM</sup></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>
		
		<!-- SIGN UP FORM -->
		
		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">�</span>
					
			<form method ="post" enctype="multipart/form-data" onsubmit = "return check_validity()" action="do_register.php">
				
				<h1><center> <strong> Sign Up </strong> </center> </h1>
				
				<fieldset>
				  <legend><span class="number">1</span>Your basic info</legend>
				  <label for="name">Name:</label>
				  <input type="text" name="name" id = "name" required><br>
                                   <p id="name_validity"></p>
				  
				  <label for="mail">Email:</label>
				  <input type="email" name="email" id="email" required><br>
                                   <p id="email_validity"></p>
                                   
                                   <label for="username">Username:</label>
				  <input type="text" name="username" id = "username" required><br>
                                   <p id="username_validity"></p>
				  
				  <label for="password">Password:</label>
				  <input type="password" name="password" id="password" required><br>
                                   <p id="password_validity"></p>
                                   
                                   <label for="phone">Phone:</label>
                                   <input type="tel" name="phone" id = "phone">
                                   
                                   <label for="phone_privacy"></label>
                                   <select name = "phone_privacy" id="phone_privacy">
                                    <!--<option value=""></option>-->
                                        <option value=0 selected>Only me</option>
                                        <option value=1 >Everyone</option>
                                    </select><br>
				  
				  <label>Gender:</label>
				  <input type="radio" id="Male" value="Male" name="gender" checked><label for="Male" class="light">Male</label><br>
				  <input type="radio" id="Female" value="Female" name="gender" ><label for="Female" class="light">Female</label>
				</fieldset>
				
				<fieldset>
				  <legend><span class="number">2</span>Your profile</legend>
				  <label for="bio">Biography:</label>
                                  <textarea id="biography" name="biography"></textarea>
                                  
                  
				</fieldset>
				<fieldset>
				<label for="department">Department:</label>
				<select id="department" name="department">
				 
					<option value="Computer Science And Engineering">Computer Science and Engineering</option>
					<option value="Genetics">Genetics</option>            
				
				  
				  
					<option value="Finance">Finance</option>
					<option value="Marketing">Marketing</option>
                
				  
				</select>
                               <!--
				  <label>Interests:</label>
				  <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
					<input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
				  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>
				-->
				</fieldset>
                                
                                <fieldset>
                                    <label for="upload_image">Upload photo:</label>
                                     <input type="file" name="fileToUpload" id="fileToUpload">
                                </fieldset>
				<button type="submit" value="Submit">Sign up</button>
			  </form>	  
		</div>
		
		<!-- Login -->
		
		<div id="id02" class="modal">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">�</span>
					
			<form method ="post" enctype="multipart/form-data" onsubmit = "return login_validate()" action="login.php">
				
				<h1><center>Login</center> </h1>
				
				<fieldset>
				  
				  <label for="username">Username:</label>
				  <input type="text" id="login_username" name="username" required>				  
				  
				  <label for="password">Password:</label>
				  <input type="password" id="login_password" name="password" required><br>
				  <p id="login_validity"></p>
				  
				</fieldset>
				
				<button type="submit" name = "login">Login</button>
			  </form>	
			  
			 

		</div>
		
		
    

		
		<script>
		// Get the modal
		var modal = document.getElementById('id01');
		var modal1 = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(events) {
			if (events.target == modal1 || events.target == modal) {
				modal.style.display = "none";
				modal1.style.display = "none";
			}
		}
				
		</script>
		
		<script>
                function check_validity()
                {
                    var error=false;
                    var username = document.getElementById("username");
                    var email = document.getElementById("email");
                    var name = document.getElementById("name");
                    var password = document.getElementById("password");
                    var phone = document.getElementById("phone");
                    if(username.value.length > 15){
                        error=true;
                        document.getElementById("username_validity").innerHTML = "Length of username cannot be greater than 15 ";
                    }
                    if(email.value.length>50){
                        error=true;
                        document.getElementById("email_validity").innerHTML = "Email is too long.";
                    }
                   
                    if(password.value.length > 20){
                        error=true;
                        document.getElementById("password_validity").innerHTML = "Length of password cannot be greater than 20 ";
                    }
                     if(name.value.length >50){
                        error=true;
                        document.getElementById("name_validity").innerHTML = "Length of name cannot be greater than 50 ";
                    }
                    
                       
                    if(error==false && check_unique()==true)
                    {
                         return true;
                    }
                    return false;
            
                }
		function check_unique() 
		{		
		
			var username_response = username_validate();
			var email_response = email_validate();
			
			if(username_response == "" && email_response =="")	
			{
				
				return true;				
			}
			else
				return false;
					
			
		}

		
		
		function username_validate() 
		{
			
			var inpObj = document.getElementById("username");
			var xhttp = new XMLHttpRequest();
			var response;
			var url="username_validation.php";
			var params = "username="+inpObj.value;
			xhttp.open("POST",url,false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		
			xhttp.onreadystatechange = function()
			{
				if(this.readyState==4 && this.status ==200)
				{					
					response =xhttp.responseText;
					document.getElementById("username_validity").innerHTML = response;	
					
				}
			}
			
			
			xhttp.send(params);
			return response;
		} 
		
		function email_validate() 
		{
			
			var inpObj = document.getElementById("email");
			var xhttp = new XMLHttpRequest();
			var response;
			var url="email_validation.php";
			var params = "email="+inpObj.value;
			xhttp.open("POST",url,false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		
			xhttp.onreadystatechange = function()
			{
				if(this.readyState==4 && this.status ==200)
				{					
					response =xhttp.responseText;
					document.getElementById("email_validity").innerHTML = response;	
					
				}
			}
			
			
			xhttp.send(params);											
			return response;
		} 
		
		function login_validate() 
					{
						
						var response=login_connect_to_database();
					
						if(response == ""){
						
							return true;
						}
						else
							return false;
						
					} 
					
					function login_connect_to_database()
					{
						var usernameObj = document.getElementById("login_username");
						var passwordObj = document.getElementById("login_password");
						var xhttp = new XMLHttpRequest();
						var response;
						var url="check_login.php";
						var params = "username="+usernameObj.value+"&password="+passwordObj.value;;
						xhttp.open("POST",url,false);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					//	xhttp.setRequestHeader("Content-length", params.length);
						//xhttp.setRequestHeader("Connection", "close");
						xhttp.onreadystatechange = function()
						{
							if(this.readyState==4 && this.status ==200)
							{					
								response =xhttp.responseText;
								document.getElementById("login_validity").innerHTML = response;	
								
							}
						}
						
						
						xhttp.send(params);
						return response;
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
		
                

	</body>
</html>