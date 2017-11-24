<!DOCTYPE HTML>
<!--
	author Lorenzo
-->
<html>
	<head>
		<title>Sportis</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.php">Sportis</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="shop.html">Shop</a></li>
						<li><a href="register.php" class="button">Sign Up</a></li>
					</ul>
				</nav>
			</header>
		
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Sportis</h2>
					<p>"Sports do not build character. They reveal it" - Heywood Broun</p>
					<ul class="actions">
						<li><button onclick ="document.getElementById('id02').style.display='block'" style="width:auto;" class="button big special">Sign Up</a></li>
						<li><a href="#elements" class="button big alt">Learn More</a></li>
					</ul>
				</div>
			</section>
		
		<!-- Modal Signup form -->
		<?php
			require('db.php');
			if(isset($_REQUEST['username'])){
				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($con,$username); 
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($con,$email);
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con,$password);
				$trn_date = date("Y-m-d H:i:s");
				$query = "INSERT into `users` (username, password, email, trn_date)
				VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
				$result = mysqli_query($con,$query);
				if($result)
				{	
					echo '<div class="modalsucces">';
					echo '	<div class="modal-contentsucces">';
					echo '		<div class="modal-headersucces">';
					echo '			<h2>Registration successfully!</h2>';
					echo '		</div>';
					echo '		<div class="modal-bodySucces">';
					echo '			<p><center>Now you can <a href="index.php">login.</center></p>';
					echo '		</div>';
					echo '		<div class="modal-footersucces"></div>';
					echo '	</div>';
					echo '</div>';
					
				}
			}else
			{
		?>
			<div id="id02" class="modal">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">x</span>
				<form class="modal-contentModalSignup animate" action="" method ="post">
					<div class="containerModalSignup" action ="" method ="post">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>
						
						<label><b>Email</b></label>
						<input type="email" placeholder="Enter Email" name="email" required>

						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						
						<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

						<div class="clearfix">
							<button type="buttonModalSignup" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnModalSignup">Cancel</button>
							<button type="submit" class="signupbtnModalSignup" name="submit" value="Register">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		<?php } ?>

		<!-- Modal Login form 
			<div id ="id01" class="modal">
				<form class = "modal-content animate" action = "/action_page.php">
					<div class = "imgcontainer">
						<span onclick = "document.getElementById('id01').style.display='none'" class = "close" title = "Close Modal">&times;</span>
						<img src = "img_avatar2.png" alt ="Avatar" class="avatar">
					</div>
					
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter username" name="uname" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter password" name="psw" required>
						<button type="submit">Login</button>
					</div>
					
					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						<span class="psw">Forgot <a href="#">password?</a></span>
					</div>
				</form>
			</div>
			</div>-->
		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Sports</h2>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/basket.jpg" alt="" /></a>
								<h3>Basketball</h3>
								<p>Basketball is a team sport. Two teams of five players each try to score by shooting a ball through a hoop elevated 10 feet above the ground. The game is played on a rectangular floor called the court, and there is a hoop at each end. ... The team with the ball is called the offense.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/tenis.jpg" alt="" /></a>
								<h3>Tennis</h3>
								<p>Tennis is a racket sport that can be played individually against a single opponent (singles) or between two teams of two players each (doubles). Each player uses a tennis racket that is strung with cord to strike a hollow rubber ball covered with felt over or around a net and into the opponent's court.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/ski.jpg" alt="" /></a>
								<h3>Skiing</h3>
								<p>Skiing can be a means of transport, a recreational activity or a competitive winter sport in which the participant uses skis to glide on snow. Many types of competitive skiing events are recognized by the International Olympic Committee (IOC), and the International Ski Federation (FIS).</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/fotbal.jpg" alt="" /></a>
								<h3>Football</h3>
								<p>A clearly defined area in which to play the game. Scoring goals or points by moving the ball to an opposing team's end of the field and either into a goal area, or over a line. ... Players being required to move the ball—depending on the code—by kicking, carrying, or hand-passing the ball.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h2>Mountain hiking</h2>
								<a href="#" class="image fit"><img src="images/hiking.jpg" alt="" /></a>
								<p>Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). The term bushwalking is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927. In New Zealand a long, vigorous walk or hike is called tramping.[2] It is a popular activity with numerous hiking organizations worldwide, and studies suggest that all forms of walking have health benefits.</p>
							</section>
						</div>
						<!--<div class="4u">
							<section>
								<h3>Magna massa blandit</h3>
								<p>Feugiat amet accumsan ante aliquet feugiat accumsan. Ante blandit accumsan eu amet tortor non lorem felis semper. Interdum adipiscing orci feugiat penatibus adipiscing col cubilia lorem ipsum dolor sit amet feugiat consequat.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3>Ante sed commodo</h3>
								<ul class="alt">
									<li><a href="#">Erat blandit risus vis adipiscing</a></li>
									<li><a href="#">Tempus ultricies faucibus amet</a></li>
									<li><a href="#">Arcu commodo non adipiscing quis</a></li>
									<li><a href="#">Accumsan vis lacinia semper</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>	-->		
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container"><!--
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>Accumsan</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
								<div class="6u">
									<h3>Faucibus</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="6u">
							<h2>Aliquam Interdum</h2>
							<p>Blandit nunc tempor lobortis nunc non. Mi accumsan. Justo aliquet massa adipiscing cubilia eu accumsan id. Arcu accumsan faucibus vis ultricies adipiscing ornare ut. Mi accumsan justo aliquet.</p>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>-->
					<ul class="copyright">
						<li>&copy; Lorenzo. All rights reserved.</li>
						<li>Design: Laurentiu Bascuti</a></li>
						<li>Images: Google</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>