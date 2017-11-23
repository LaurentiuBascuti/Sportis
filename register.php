<!DOCTYPE HTML>
<!--
	author Lorenzo
-->
<html>
<body>
<!-- Modal Signup form -->
		<?php
			require('db.php');
			if(isset($_REQUEST['username'])){
				$username = stripslashes($REQUEST['username']);
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
					echo "<div class='form'>
					<h3>You are registered successfully.</h3>
					<br/>Click here to <a href='login.php'>Login</a></div>";
				}				
			}else
			{
		?>
			<div id="id02" class="modal">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
				<form class="modal-contentModalSignup animate" action="/db_test.php">
					<div class="containerModalSignup" action ="" method ="post">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>
						
						<label><b>Email</b></label>
						<input type="email" placeholder="Enter Email" name="email" required>

						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>

						<label><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
						<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

						<div class="clearfix">
							<button type="buttonModalSignup" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnModalSignup">Cancel</button>
							<button type="submit" class="signupbtnModalSignup" name="submit" value="Register">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		<?php } ?>
</body>
</html>		