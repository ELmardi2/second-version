<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up Page</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewreport">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- navigation bar -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- add header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../index.php"><img src="images/Refuhelp-Logo.png" alt="Refuhelp-Logo" width="194" height="67"></a>
				</div>
				<!-- menu items -->
				<div class="collapse navbar-collapse" id="navbar1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="dashboard.php">Users List</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<h1>Registration Page</h1>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 well">
					<form role="form" action="" method="post" name="signupform">
						<fieldset>
							<legend>Sign Up</legend>
						<div class="form-group">
							<label for="name">First Name</label>
							<input type="text" name="first_name" placeholder="Your First Name" required value="" class="form-control"/>
							<span class="text-danger"></span>
						</div>
						<div class="form-group">
							<label for="name">Last Name</label>
							<input type="text" name="last_name" placeholder="Your Last Name" required value="" class="form-control"/>
							<span class="text-danger"></span>
						</div>
						<div class="form-group">
							<label for="name">Your Country</label>
							<select name="countries">
								<option value="" title=""></option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Password</label>
							<input type="password" name="password" placeholder="Your password" required value="" class="form-control"/>
							<span class="text-danger"></span>
						</div>
						<div class="form-group">
							<label for="name">Confirm Your Password</label>
							<input type="password" name="confirm_password" placeholder="Confirm Your Password" required value="" class="form-control"/>
							<span class="text-danger"></span>
						</div>
						<div class="form-group">
							<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
							</div>
						</fieldset>
						
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					Already Registered? <a href="signin.php">Sign In Here</a>
				</div>
			</div>
		</div>

	</body>
</html>