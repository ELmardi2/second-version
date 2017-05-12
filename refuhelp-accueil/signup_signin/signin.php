<!DOCTYPE html>
<html>
	<head>
		<title>Sign In Page</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" >
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="css/style.css" type="text/css">
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
						<li class="active"><a href="signup.php">Sign Up</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- body -->
		<div class="container">
			<h1>Login Page</h1>	
			<div class="row">
				<div class="class="col-md-4 col-md-offset-4 well">
					<form role="form" action="" method="post" name="signinform" >
						<fieldset>
							<legend>Signin</legend>
							<div class="form-group">
								<label for="name">Last Name</label>
								<input type="text" name="last_name" placeholder="Your Last Name" required class="form-control" />
							</div>

							<div class="form-group">
								<label for="name">Password</label>
								<input type="password" name="password" placeholder="Your Password" required class="form-control" />
							</div>

							<div class="form-group">
								<input id="signin" type="submit" name="signin" value="Signin" class="btn btn-primary" />
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>