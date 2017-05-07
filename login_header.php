<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		 
	</head>
<?php

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

<div class="user_header" id = "user_header">

						
						<div class = "logo" >
						
							<a href="home.php" class="image avatar"><img src="images/avatar.jpg" alt="" height="100"/></a>
						</div>
						
						<div class = "title" >
							 <a href="home.php" class="image avatar"><font color = "White">Tutors from<br> University of Dhaka</font></a>
						</div>  
						
						<div class = "header_button" >
							<ul class="actions">
								
								<li>
								<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>														
								</li>							
								
								<li>
								<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>														
								</li>
							
							</ul>
						</div>
			</div>

</html>