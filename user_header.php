
<section id="one">
						<header class="major">
						<!--
							<h2>Find out the perfect home tutor for you!<br/>
							Or, Share your eligibility as a tutor.<br /> </h2>
							
						</header>
						<p>If you are searching for a home tutor then you have come to the right place. "Tutors of Dhaka University" is the place where you get to know about the most eligile private tutors from around the university. </p> <p>On the other hand, if you are willing to work as a home tutor then sign up and share your informations to get hired.</p>
						-->
						
						<ul class="actions">
							
							<li>
							<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><?php echo $_SESSION['login_user']?></button>														
							</li>							
							
							<li>
							<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log Out</button>														
							</li>
                                                        
                                         
							
						</ul>
                                                
                                                <form action="logout.php">
                                                    <input type="submit" value ="logout">
                                                </form>
					</section>



