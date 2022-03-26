<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/Login-font.css">
	<link rel="stylesheet" type="text/css" href="css/Login-main.css">
<!--===============================================================================================-->
</head>
<body>
<form method="POST">
	<div class="limiter">
	<div class="container-login100" style="background: #a64bf4;
  background: -webkit-linear-gradient(right, #8f48d1, #4f2580, #4c238d, #600ebd);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-49">
						Sign up
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Full name</span>
						<input class="input100" type="text" name="fullname" placeholder="Type your full name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>	
							<button type="text" value="sign-up" name="sign-up" class="login100-form-btn">
								<a href="">sign up</a>
										
					</div>

				 
					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Already have account?
						</span>

						<a href="login.php" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</form>

	<?php 
            include ('connect.php') ;
            if(isset($_POST['sign-up']))
            {
			$fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
			
            $sql = "INSERT INTO users VALUES (NULL, '$fullname' ,  '$username' , '$password',2)";
			$result = mysqli_query($connect, $sql);
            if($result){
				echo "<script>alert('Account has been created successfully!')</script>";
                echo "<script>window.open('login.php','_self')</script>";
				 }
				 else{
				  echo"<script>alert('insertfail')</script>";
				  echo "<script>window.open('sign-up.php','_self')</script>";
				 }
			  }
    ?>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>