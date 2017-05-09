<?php


	session_start();
	$_SESSION['page']=$_GET['page'];
	$per_page=9;
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	

?>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/profile.css" />
		<title>Tutors from DU</title>
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>  
    </head>

	<?php 
                                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                                            include"user_header.php";
                                         else
                                             include"login_header.php"
                                        ?>
		<!-- Main -->
			<div class="main">

				<!-- One -->
					

				<!-- Two -->
				
					<?php
						include("config.php");
						
			
						$sql = "SELECT DISTINCT username FROM user_info WHERE isAvailable = '1' AND verified = '1' ";
				
						if(isset($_GET['department']))
						{
							$sql = $sql." AND ( ";
							$department=$_GET['department'];
							foreach ($department as $curr)
								$sql=$sql." department='$curr' OR ";
							$sql=$sql." department='$curr' ) ";
						}
						$old= $sql;
						if(isset($_GET['location']))
						{
							$sql = "SELECT DISTINCT username FROM user_location WHERE ( ";
							$location=$_GET['location'];
							foreach ($location as $curr)
								$sql=$sql." location = '$curr' OR ";
							$sql=$sql." location = '$curr' ) ";
							
							$sql=$sql." AND username IN ( ".$old." )";
						}
						
						$old= $sql;
						if(isset($_GET['course']))
						{
							$sql = "SELECT DISTINCT username FROM user_course WHERE ( ";
							$course=$_GET['course'];
							foreach ($course as $curr)
								$sql=$sql." course = '$curr' OR ";
							$sql=$sql." course = '$curr' ) ";
							
							$sql=$sql." and username IN ( ".$old." )";
						}
						
					//	echo $sql;
						$result=$conn->query($sql);
						
						$rows = $result->num_rows;
						
						$start=$per_page*($_SESSION['page']-1);
						//$start=4;
						mysqli_data_seek($result,$start);
						$cnt=0;
						
						
					?>
					<?php include"filter_sidebar.php" ?>
			
			<div class = "view">
						<h2>Some of the tutors</h2>
													
							<?php 
							$cnt=0;
							
							while($list_ini = mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
								$curr=$list_ini['username'];
								$sql = " SELECT * FROM user_info WHERE username = '$curr' ";
								$result2 = $conn->query($sql);
								
								$list = mysqli_fetch_array($result2,MYSQLI_ASSOC);
							
								$path="uploads/".$list['username'].".jpg";
								if(!file_exists($path))
									$path="uploads/default/avatar.jpg";
							
								echo "<article class=\"4u 12u$(xsmall) work-item\">";
								echo "<a href=".$path." class=\"image fit thumb\"><img src=".$path." alt=\"\"></a>";
								echo "<a href=\"profile.php?username=".$list['username']."\" >"."<font size=\"4\">".$list['name']."</font> </a>";
                                                               // echo "	<h3> ".$list['name']." </h3>";
								echo "	<p> "."<font size = \"2\" >".$list['department']."</font> </p>"	;															
								echo "</article>";
								$cnt = $cnt+1;
								//mysqli_data_seek($reslut,$cnt);
								if($cnt == $per_page )
									break;
							
							}
							
							?>
							
						
						
						<ul class="actions">
						
						
                  
							<?php 
								$page = $_SESSION['page']-1; 
								if($page>0)
								{
									echo"<a href=\"view_all.php?page=".$page."\""." class= \"button\" style = \"margin-left : 0px\" >Previous</a>";
									
								}
								
							
							?> 
								
							<?php 
								$page = $_SESSION['page']+1; 
								if($cnt+$start<$rows)
								{
									echo"<a href=\"view_all.php?page=".$page."\""." class= \"button\" style = \"margin-left : 500px\" >Next</a>";
									
								}
							
							?> 
							
				
				
				 
						</ul>
					
					</div>
				
					
					
			</div>

		<!-- Footer -->
			<?php include"footer.php" ?>
		<!-- Sign up form -->
		<?php 
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true);
                    else
                        include"login_module.php"
                     
                ?>
		
		
		
		

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