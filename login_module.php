<?php

	$deptfile = fopen("department_list.txt", "r") or die("Unable to open file!");
	$deptlist = array();
	while(!feof($deptfile)) 
	{
		array_push($deptlist,fgets($deptfile));
	}
	sort($deptlist);
	fclose($deptfile);
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
				  <label for="name"><font size="4">Name:</font></label>
				  <input type="text" name="name" id = "name" maxlength = "50" required><br>
                                   
				  
				  <label for="mail"><font size="4">Email:</font></label>
				  <input type="email" name="email" id="email" maxlength = "50" required><br>
                                   <font color="red"><p id="email_validity"></p></font>
                                   
                                   <label for="username"><font size="4">Username:</font></label>
				  <input type="text" name="username" id = "username" maxlength = "15" required><br>
                                   <font color="red"><p id="username_validity"></p></font>
				  
				  <label for="password"><font size="4">Password:</font></label>
				  <input type="password" name="password" id="password" maxlength = "40" required><br>
                                   
                                   
                                   <label for="phone"><font size="4">Phone:</font></label>
                                   <input type="tel" name="phone" id = "phone">
                                   
                                   <label for="phone_privacy"></label>
                                   <select name = "phone_privacy" id="phone_privacy">
                                    <!--<option value=""></option>-->
                                        <option value=0 selected>Only me</option>
                                        <option value=1 >Everyone</option>
                                    </select><br>
				  
				  <label><font size="4">Gender:</font></label>
				  <input type="radio" id="Male" value="Male" name="gender" checked><label for="Male" class="light">Male</label><br>
				  <input type="radio" id="Female" value="Female" name="gender" ><label for="Female" class="light">Female</label>
				</fieldset>
				
				<fieldset>
				  <legend><span class="number">2</span>Your profile</legend>
				  <label for="bio"><font size="4">Biography and experience:</font></label>
                                  <textarea id="biography" name="biography"></textarea>
                                  
                  
				</fieldset>
				<fieldset>
				<label for="department"><font size="4">Department:</font></label>
				<select id="department" name="department">
				 
					
					
					<?php
								
								$deptLength = count($deptlist);
								for($i=0; $i<$deptLength; $i=$i+1)
									echo"<option value=\"".$deptlist[$i]."\">".$deptlist[$i]."</option>";
							?>
		
				  
				</select>
				
				<label for="course"><font size="4">Preferred Courses:</font></label>
						<select id="course" name="course[]" style='height: 100px;' multiple>
						  
						  
							<?php
								
								$courseLength = count($courselist);
								for($i=0; $i<$courseLength; $i=$i+1)
									echo"<option value=\"".$courselist[$i]."\">".$courselist[$i]."</option>";
							?>
						 
						</select>									
						
					
					<label for="location"><font size="4">Preferred Locations:</font></label>
						<select id="location" name="location[]" style='height: 80px;' multiple>
						  
						  
							<?php
								
								$areaLength = count($arealist);
								for($i=0; $i<$areaLength; $i=$i+1)
									echo"<option value=\"".$arealist[$i]."\">".$arealist[$i]."</option>";
							?>
						 
						</select>
						
					
					<label for="salary"><font size="4">Minimum salary per month:</font></label>
					<input type = "number" name = "salary" id = "salary">
				
                               
				</fieldset>
                                
                                <fieldset>
                                    <label for="upload_image"><font size="4">Upload photo:</font></label>
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
				  
				  <label for="username"><font size="4">Username:</font></label>
				  <input type="text" id="login_username" name="username" required>				  
				  
				  <label for="password"><font size="4">Password:</font></label>
				  <input type="password" id="login_password" name="password" required><br>
				  <font color="red"><p id="login_validity"> </p></font>
				  
				  <a href="forgotpassword.php" ><font size="5">Forgot your password?</font></a>
				  
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