<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

		<body>
			<!-- login for access into dashboard -->
			<?php
			include("../includes/connection.php");
			if (isset($_REQUEST['submit'])) {
				$email=$_REQUEST['email'];
				$pass=$_REQUEST['password'];
				$search="select * from login where email='$email'";        // check email from db
				$query=mysqli_query($con,$search);
				$emailcount=mysqli_num_rows($query);
				if ($emailcount) {
					$password=mysqli_fetch_array($query);
					$database_password=$password['password'];
					$_SESSION['name']=$password['name'];
					if ($database_password==$pass) {
						header("location:dashboard.php?true");             // redirect to the admin page
					}
					else{
						header("location:login.php?false");
					}
				}
			}
			?>
			<div class="container mt-5">
				<div class="row">
					<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
						<div class="card card-signin my-5">
							<div class="card-body">
								<h5 class="card-title text-center">Sign In</h5>
								<form class="form-signin" action="" method="post"  accept-charset="utf-8">
									<div class="form-label-group">
										<input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
										<label for="inputEmail">Email address</label>
									</div>
									<div class="form-label-group">
										<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
										<label for="inputPassword">Password</label>
									</div>
									<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" value="SIGN IN">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-dark text-center copy"> © Copyright 2021 <span>kids Education</span></div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<!-- Popper JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		</body>
	</html>