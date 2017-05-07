<html>
<?php


	session_start();
	include"config.php";
	if(isset($_GET['username']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_SESSION['login_user']) && $_SESSION['login_user']==$_GET['username']);
	else
		header("location: home.php");
	
	$deptfile = fopen("department_list.txt", "r") or die("Unable to open file!");
	$deptlist = array();
	while(!feof($deptfile)) 
	{
		array_push($deptlist,fgets($deptfile));
	}
	sort($deptlist);
	fclose($deptfile);
	
	$areafile = fopen("area_list.txt", "r") or die("Unable to open file!");
	$arealist = array();
	while(!feof($areafile)) 
	{
		array_push($arealist,fgets($areafile));
	}
	sort($arealist);
	fclose($areafile);
	
	$coursefile = fopen("course_list.txt", "r") or die("Unable to open file!");
	$courselist = array();
	while(!feof($coursefile)) 
	{
		array_push($courselist,fgets($coursefile));
	}
	sort($courselist);
	fclose($coursefile);
	

?>
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
				
				<form method="post" enctype="multipart/form-data" onsubmit = "return check_validity_again()" action="update_profile.php">
					<section class = "header_info" >
					
					<div class = "profile_pic" >
					<div class="3u"><span class="image fit"><img src= <?php echo $path; ?> alt="" width = "250" height="250"  /></span>  </div>
					
					
						<div class = "changepp" >
							<fieldset>
                                    <label for="upload_image">Change photo:</label>
                                     <input type="file" name="fileToUpload" id="fileToUpload">
                                </fieldset>
							
						</div>
					
	
					</div>
					<div class="basic_info">
					<br>
					<a href = "profile.php?username=<?php echo $_SESSION['login_user']; ?>" >
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
					<br><br>
					
					<section class = "info" >
					
					<p> <font size="5">Change Password</font>
					<input type="password" placeholder = "Leave it empty if you do not want to change." name="new_password" id="new_password" maxlength="40">
					
					<p> <font size="5">Email</font>
					<input type="email" value = <?php echo $list['email']; ?> id = "email" name = "email" maxlength="50" required>
					
					<p> <font size="5"> About me</font>
					<textarea name = "bio" ><?php echo $list['biography']; ?> </textarea>
					
					<p> <font size="5"> Add to preferred subjects: </font>
					<select  name="add_course[]" style='height: 140px;' multiple>
						  
						 <?php
							
							$courseLength = count($courselist);
							for($i=0; $i<$courseLength; $i=$i+1)
							{
								$cl = $courselist[$i];
								$lgn_usr = $_SESSION['login_user'];
								
								$sql = "SELECT * FROM user_course WHERE course = '$cl'";
								$result = $conn->query($sql);
								
								
								echo"<option value=\"".$courselist[$i]."\">".$courselist[$i]."</option>";
							}
							
						?>
						 
					</select>	

					<p> <font size="5"> Remove from preferred subjects: </font>
					<select  name="del_course[]" style='height: 140px;' multiple>
						  
						 <?php
							
							
								$cl = $courselist[$i];
								$lgn_usr = $_SESSION['login_user'];
								
								$sql = "SELECT * FROM user_course WHERE username = '$username'";
								$result=$conn->query($sql);
								while($list = mysqli_fetch_array($result,MYSQLI_ASSOC))
									echo"<option value=\"".$list['course']."\">".$list['course']."</option>";
							
						?>
						 
					</select>						
					
					<p> <font size="5"> Add to preferred locations: </font>
					<select name="add_location[]" style='height: 140px;' multiple>
						  
						 <?php
								
							$areaLength = count($arealist);
							for($i=0; $i<$areaLength; $i=$i+1)
								echo"<option value=\"".$arealist[$i]."\">".$arealist[$i]."</option>";
						?>
						 
					</select>
					
					</select>						
					
					<p> <font size="5"> Remove from preferred locations: </font>
					<select name="del_location[]" style='height: 140px;' multiple>
						  
						 <?php
								$cl = $arealist[$i];
								$lgn_usr = $_SESSION['login_user'];
								
								$sql = "SELECT * FROM user_location WHERE username = '$username'";
								$result=$conn->query($sql);
								while($list = mysqli_fetch_array($result,MYSQLI_ASSOC))
									echo"<option value=\"".$list['location']."\">".$list['location']."</option>";
							
						?>
						 
					</select>
					<?php
						$sql = "SELECT * FROM user_salary WHERE username = '$username'";
						$result = $conn->query($sql);
						$list = mysqli_fetch_array($result,MYSQLI_ASSOC);						
					?>
					
					<p> <font size="5"> Minimum expected salary per month:
					<input type = "number" name = "salary" min="0" max="100000" id = "salary" value = <?php echo $list['salary'] ?>  >
					<p> <font size="5">Your current password:
					<input type = "password" name = "curr_password" id = "curr_password" maxlength="40" required>
					<p> <font size="4" color="red" id="message" > </font> </p>
					<button type="submit" value="submit" name="submit" >Save Changes</button>
					<?php
						$sql = "SELECT * FROM user_info WHERE username = '$username'";
						$result = $conn->query($sql);
						$list = mysqli_fetch_array($result,MYSQLI_ASSOC);						
					?>
					<input type = "hidden" value = <?php echo $list['username']; ?> name="usr" >
					<input type="hidden" value = <?php echo $list['email']; ?> id = "old_email" >
					<input type="hidden" value = <?php echo $list['password']; ?> id = "old_password" >
					</section>
					
					
					
				</form>	
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
			
			
			function check_validity_again()
			{
				if(matchPassword()==false)
				{
					document.getElementById("message").innerHTML = "Password is wrong!";
					return false;
				}
				var oldEmail = document.getElementById("old_email").value;
				var newEmail = document.getElementById("email").value;
				if(oldEmail==newEmail)
					return true;
				var xhttp = new XMLHttpRequest();
				var response;
				var url="email_validation.php";
				var params = "email="+newEmail;
				xhttp.open("POST",url,false);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
				xhttp.onreadystatechange = function()
				{
					if(this.readyState==4 && this.status ==200)
					{					
						response =xhttp.responseText;
						
						
					}
				}
				
				
				xhttp.send(params);	
				if(response != "")
				{
					document.getElementById("message").innerHTML = response;
					return false;
				}
				
				return true;
			}
			
			function matchPassword()
			{
				
				var currPass = document.getElementById("curr_password").value;
				var oldPass = document.getElementById("old_password").value;
				var xhttp = new XMLHttpRequest();
				var response;
				var url="match_password.php";
				var params = "curr_password="+currPass+"&old_password="+oldPass;
				xhttp.open("POST",url,false);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.onreadystatechange = function()
				{
					if(this.readyState==4 && this.status ==200)
					{					
						response =xhttp.responseText;
						
						
					}
				}
				
				xhttp.send(params);	
				if(response=="valid")
					return true;
				else if(response=="invalid")
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

























