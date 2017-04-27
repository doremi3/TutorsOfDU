<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
							<option value="phycis">Phycis</option>
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
					<section id="two">
						
						<p>
						<span class="image left"><img src="images/thumbs/02.jpg" alt="" height="150" width="243"/></span>
						Name: Raisa Naser <br>
						Department: Department of Applied Chemistry and Chemical Engineering <br>							
						<button onclick="document.getElementById('info').style.display='block'" style="width:auto;">View More Info</button>																															
						</p>							
						

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
				 
					<option value="computer_science_and_engineering">Computer Science and Engineering</option>
					<option value="genetics">Genetics</option>            
				
				  
				  
					<option value="finance">Finance</option>
					<option value="marketing">Marketing</option>
                
				  
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
				<input type="submit" value="Submit">
			  </form>		  
		</div>
			
		<!-- Login -->
		
		<div id="id02" class="modal">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">�</span>
					
			<form action="registered.php" method="post">
				
				<h1><center>Login</center> </h1>
				
				<fieldset>
				  
				  <label for="username">Username:</label>
				  <input type="text" id="name" name="user_name">				  
				  
				  <label for="password">Password:</label>
				  <input type="password" id="password" name="user_password">
				  
				</fieldset>
				
				<button type="submit">Login</button>
			  </form>		  
		</div>
		
		
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
                        
                        
                        
                        <script type ="text/javascript">
		
                
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
				//register_user();
				return true;				
			}
			else
				return false;
					
			
		}

		function register_user()
		{
			var username = document.getElementById("username");
			var email = document.getElementById("email");
			var name = document.getElementById("name");
			var password = document.getElementById("password");
			var phone = document.getElementById("phone");
                        var genderList = document.getElementsByName("user_sex");
                        var gender;
                        if(genderList[0].checked)
                            gender=genderList[0].value;
                        else
                            gender=genderList[1].value;
                        
                        var phone_privacy_array = document.getElementById("phone_privacy");
                        var phone_privacy = phone_privacy_array.options[phone_privacy_array.selectedIndex].value;
                        
                        var department_array = document.getElementById("department");
                        var department = department_array.options[department_array.selectedIndex].value;
                        
                       var biography = document.getElementById("biography");
                       
                       var upload_image = document.getElementById("upload_image");
                       //alert(upload_image.files[0].name);
              
			var xhttp = new XMLHttpRequest();
			var url="do_register.php";
                        
			var params = "username="+username.value+"&email="+email.value+"&name="+name.value+"&password="+password.value+"&phone="+phone.value+"&gender="+gender+"&phone_privacy="+phone_privacy+"&department="+department+"&biography="+biography.value+"&upload_image="+upload_image.files[0].name;
			xhttp.open("POST",url,false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.setRequestHeader("Content-length", params.length);
			xhttp.setRequestHeader("Connection", "close");
			xhttp.onreadystatechange = function()
			{
				if(this.readyState==4 && this.status ==200)
				{					
					response =xhttp.responseText;
                                        alert(response);
                                       
				}
			}
			
			
			xhttp.send(params);											
			
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
			xhttp.setRequestHeader("Content-length", params.length);
			xhttp.setRequestHeader("Connection", "close");
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
			xhttp.setRequestHeader("Content-length", params.length);
			xhttp.setRequestHeader("Connection", "close");
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
		
		

		</script>

	</body>
</html>