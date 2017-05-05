

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
					<a href="home.php" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
					<h2><strong>Tutors of Dhaka University</strong></h2>
					
					<section id = "filter">
					
						<form action="view_all.php" method="get">
		  
						<!--<h1>Sign Up</h1>-->
						<input type="hidden" name="page" value="1">
						<fieldset>
						<label for="category">Subject/Category:</label>
						<select id="category" name="category">
						  <optgroup label="Science">
							<option value="Physics">Physics</option>
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
						<select id="department" name="department">
						  <optgroup label="Engineering Faculty">
							<option value="Computer Science and Engineering">Computer Science and Engineering</option>
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
