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
<html>
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
				
				<form method="post">
					<section class = "header_info" >
					
					<div class = "profile_pic" >
					<div class="3u"><span class="image fit"><img src= <?php echo $path; ?> alt="" /></span>  </div>
					
					
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
					<input type="password" placeholder = "Leave it empty if you do not want to change." name="new_password" maxlength="40">
					
					<p> <font size="5">Email</font>
					<input type="email" value = <?php echo $list['email']; ?> id = "email" name = "email" maxlength="50" >
					
					<p> <font size="5"> About me</font>
					<textarea name = "bio" placeholder = <?php echo $list['biography']; ?> > </textarea>
					
					<p> <font size="5"> Preferred subjects: </font>
					<select id="course" name="course" style='height: 140px;' multiple>
						  
						 <?php
							
							$courseLength = count($courselist);
							for($i=0; $i<$courseLength; $i=$i+1)
								echo"<option value=\"".$courselist[$i]."\">".$courselist[$i]."</option>";
						?>
						 
					</select>									
					
					<p> <font size="5"> Preferred locations: </font>
					<select id="location" name="location" style='height: 140px;' multiple>
						  
						 <?php
								
							$areaLength = count($arealist);
							for($i=0; $i<$areaLength; $i=$i+1)
								echo"<option value=\"".$arealist[$i]."\">".$arealist[$i]."</option>";
						?>
						 
					</select>
					<p> <font size="5"> Minimum expected salary per month:
					<input type = "number" name = "salary" id = "salary">
					<p> <font size="5">Your current password:
					<input type = "password" name = "curr_password" id = "curr_password" maxlength="40" required>
					<button type="submit" value="submit" name="submit" >Save Changes</button>
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
		
			function sendMessage()
			{

				var inpname = document.getElementById("name");
				var inpto = document.getElementById("to");
				var inpemail = document.getElementById("email");
				var inpmessage = document.getElementById("message");
				var xhttp = new XMLHttpRequest();
				var response;
				var url="send_message.php";
				var params = "to="+inpto.value+"&name="+inpname.value+"&email="+inpemail.value+"&message="+inpmessage.value;
				xhttp.open("POST",url,false);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
				xhttp.onreadystatechange = function()
				{
					if(this.readyState==4 && this.status ==200)
					{					
						response =xhttp.responseText;
						//alert(response);
						document.getElementById("success").innerHTML = "Message has been sent! :)";
						
						
					}
				}
				
				xhttp.send(params);
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

























