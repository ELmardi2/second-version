<!DOCTYPE html>
<html lang="en">
	<head>
		<title>RefuHelp-Accueil Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Design_layout/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- navigation bar -->

			<div class="navigation-bar">
				<nav class="navigation-bar">
					<!-- Brand and toggle get grouped for better mobile display -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
           data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Mobile navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
					<a href=""><img class="logo" src="Design_layout/images/Refuhelp-Logo.png" alt="Refuhelp-Logo" width="194" height="67"></a>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="https://www.paypal.com"><img src="http://seeklogo.com/images/P/paypal-logo-C83095A82C-seeklogo.com.png" width="25" height="25"></a></li>
						<li class="active"><a href="https://www.facebook.com/"><img src="http://1img.org/wp-content/uploads/2015/09/facebook-icon-5.png" width="25" height="25"></a></li>
						<li class="active"><a href="https://twitter.com/"><img src="http://icons.iconarchive.com/icons/matiasam/ios7-style/512/Twitter-icon.png" width="25" height="25"></a></li>

						<li class="active"><a href="#">Sign Up</a></li>
						<li class="active"><a href="#">Sign In</a></li>
						<li class="active"><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</nav>
			</div>

			<!-- Welcome title -->
			<div class="welcome-am">
				<h1>Bienvenue Sur RefuHelp</h1>
			</div>

			<!-- Search box -->
			<div class="container-search">
				<div class="row" id="search-am">
					<div id="cutom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="search-query form-control" placeholder="Search">
							<span class="input-group-btn">
								<button class="btn btn-danger" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>

			</div>

			<!-- Language Translate -->

		    <div class="container-fluid lang">
		    	<div class="row am-row">
		    		<div class="col-xs-6">
		    			<h4 class="choose-lang">Choisissez Une Langue</h4>
			    			<select class="btn btn-success btn-select">
			    				<option>French</option>
			    				<option>English</option>
			    				<option>Arab</option>
			    			</select>

		    		</div>
		    		<div class="col-xs-6 ">
									<h4 class="choose-lang">En plus savoir</h4>
		    			<a href="#" class="launch-modal btn btn-success" data-modal-id="modal-video">
								<span class="glyphicon glyphicon glyphicon-play"></span>VOIR LA VIDEO</a>

		    		</div>
						<div class="container ">
						  <div class="row">
						    <div class=" col-md-12  align-self-center"><a href="./pages/main.php" class="btn btn-lg btn-success mr-btn">
						      <span class="glyphicon glyphicon-hand-right"></span>COMMENCER ICI</a>
						    </div>
						  </div>
						</div>


		    	</div>

		    </div>
	</body>
</html>
