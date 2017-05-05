<?php


	session_start();
	$_SESSION['page']=$_GET['page'];
	$per_page=8;
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	

?>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>  
    </head>

	<?php include"filter_sidebar.php" ?>
		<!-- Main -->
			<div id="main">

				<!-- One -->
					<?php 
                                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                                            include"user_header.php";
                                         else
                                             include"login_header.php"
                                        ?>

				<!-- Two -->
				
					<?php
						include("config.php");
						if(isset($_GET['category']))
							$category[]=$_GET['category'];
						if(isset($_GET['department']))
							$department=$_GET['department'];
						else
							$department="";
						$sql = "SELECT username,name,department FROM user_info WHERE isAvailable = '1'";
						if(isset($_GET['category']))
						{
							$category[]=$_GET['category'];
						}
						if(isset($_GET['department']))
						{
							$department=$_GET['department'];
							 $sql=$sql."and department='$department'";
						}
						$result = mysqli_query($conn,$sql);
						
						$rows = $result->num_rows;
						
						$start=$per_page*($_SESSION['page']-1);
						//$start=4;
						mysqli_data_seek($result,$start);
						$cnt=0;
						
						
					?>
					<section id="two">
						<h2>Some of the tutors</h2>
													
							<?php 
							$cnt=0;
							
							while($list = mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
							
								$path="uploads/".$list['username'].".jpg";
								if(!file_exists($path))
									$path="uploads/default/avatar.jpg";
							
								echo "<article class=\"3u 12u$(xsmall) work-item\">";
								echo "<a href=".$path." class=\"image fit thumb\"><img src=".$path." alt=\"\"></a>";
								echo "<a href=\"profile.php?username=".$list['username']."\" >".$list['name']."</a>";
                                                               // echo "	<h3> ".$list['name']." </h3>";
								echo "	<p> ".$list['department']." </p>"	;															
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
					</section>

				
					
					
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