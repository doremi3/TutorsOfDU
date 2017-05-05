<?php


	//session_start();
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	

?>
<html>

		
	



	
		<!-- Sign up form -->
		
		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">�</span>
			<form method ="post" enctype="multipart/form-data" onsubmit = "return check_validity()" action="do_register.php">
				
				<h1><center> <strong> Sign Up </strong> </center> </h1>
				
				<fieldset>
				  <legend><span class="number">1</span>Your basic info</legend>
				  <label for="name">Name:</label>
				  <input type="text" name="name" id = "name" maxlength = "50" required><br>
                                   <p id="name_validity"></p>
				  
				  <label for="mail">Email:</label>
				  <input type="email" name="email" id="email" maxlength = "50" required><br>
                                   <p id="email_validity"></p>
                                   
                                   <label for="username">Username:</label>
				  <input type="text" name="username" id = "username" maxlength = "15" required><br>
                                   <p id="username_validity"></p>
				  
				  <label for="password">Password:</label>
				  <input type="password" name="password" id="password" maxlength = "20" required><br>
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
				  
				  <a href="forgotpassword.php" >Forgot your password?</a>
				  
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
					var error_message="";
                    var username = document.getElementById("username");
                    var email = document.getElementById("email");
                    var name = document.getElementById("name");
                    var password = document.getElementById("password");
                    var phone = document.getElementById("phone");
                   
                    
                       
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
			{
				alert(username_response+"\n\r"+email_response)
				return false;
			}
					
			
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
		
		<script src="assets/js/addInput.js" language="Javascript" type="text/javascript"></script>