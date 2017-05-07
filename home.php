<?php


	session_start();
	$_SESSION['page']=0;
	/*$login_session=$_SESSION['login_user'];
	echo $login_session;</h1>*/
	

?>
<html>
    <head>
		<title>Tutors from DU</title>
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
                                             include"login_header.php"
                                        ?>
		<!-- Main -->
			<section class="main">

				<!-- One -->
					

				<!-- Two -->
				
					<?php
						include("config.php");
						$sql = "SELECT username,name,department FROM user_info WHERE isAvailable = '1' AND verified = 1";
						$result = mysqli_query($conn,$sql);
						
						$rows = $result->num_rows;
						
						
						$cnt=0;
						
						
					?>
					
					<?php include"filter_sidebar.php" ?>
				
					<div class = "view">
						<h2>Some of the tutors</h2>
													
							<?php 
							$cnt=0;
							
							while($list = mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
								$path="uploads/".$list['username'].".jpg";
								if(!file_exists($path))
									$path="uploads/default/avatar.jpg";
							
								echo "<article class=\"4u 12u$(xsmall) work-item\">";
								echo "<a href=".$path." class=\"image fit thumb\"><img src=".$path." alt=\"\"></a>";
								echo "<a href=\"profile.php?username=".$list['username']."\" >"."<font size=\"4\">".$list['name']."</font> </a>";
                                                               // echo "	<h3> ".$list['name']." </h3>";
								echo "	<p> ".$list['department']." </p>"	;															
								echo "</article>";
								$cnt = $cnt+1;
								if($cnt == 3 )
									break;
							
							}
							
							?>
							
						
						
						<ul class="actions">
                                                    <a href=<?php $page = $_SESSION['page']+1; echo"view_all.php?page=".$page ?> class="button">View All</a>
						</ul>
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
		
		
		
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
		
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
                        
                        <script type ="text/javascript">
		
                

</html>