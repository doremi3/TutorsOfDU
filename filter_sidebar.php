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

	

		<!-- Header -->
			
				<div class="filter">
			<!--		<a href="home.php" class="image avatar"><img src="images/avatar.jpg" alt="" /></a> -->
					<h2><strong>Find the right tutor for you!</strong></h2>
					
					<section id = "filter">
					
						<form action="view_all.php" method="get">
		  
						<!--<h1>Sign Up</h1>-->
						<input type="hidden" name="page" value="1">
						
						<label for="course"><font size="5">Course:</font></label>
						<select id="course" name="course[]" style='height: 80px;' multiple>
						  
						  
							<?php
								
								$courseLength = count($courselist);
								for($i=0; $i<$courseLength; $i=$i+1)
									echo"<option value=\"".$courselist[$i]."\">".$courselist[$i]."</option>";
							?>
						 
						</select>									
						
					
					<label for="location"><font size="5">Location:</font></label>
						<select id="location" name="location[]" style='height: 80px;' multiple>
						  
						  
							<?php
								
								$areaLength = count($arealist);
								for($i=0; $i<$areaLength; $i=$i+1)
									echo"<option value=\"".$arealist[$i]."\">".$arealist[$i]."</option>";
							?>
						 
						</select>
						
						<label for="department"><font size="5">Department:</font></label>
						<select id="department" name="department[]" style='height: 80px;' multiple>
						  
						  
							<?php
								
								$deptLength = count($deptlist);
								for($i=0; $i<$deptLength; $i=$i+1)
									echo"<option value=\"".$deptlist[$i]."\">".$deptlist[$i]."</option>";
							?>
						 
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
</html>		
