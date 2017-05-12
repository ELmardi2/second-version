<!DOCTYPE html>
<html lang="en">
	<head>
		<title>RefuHelp-Accueil Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>

    <!-- Start..navbar-->
    <nav class="navbar navigation-bar navbar-default">
          <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Mobile navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <a href=""><img class="logo image-responsive" src="images/Refuhelp-Logo.png" alt="Refuhelp-Logo" width="194" height="67"></a>
        <ul class="nav navbar-nav navbar-right">
          <li class=""><a href="https://www.paypal.com"><img src="http://seeklogo.com/images/P/paypal-logo-C83095A82C-seeklogo.com.png" width="25" height="25"></a></li>
          <li class=""><a href="https://www.facebook.com/refuhelp.startup?fref=ts"><img src="images/index.png" width="25" height="25"></a></li>
          <li class=""><a href="https://twitter.com/"><img src="http://icons.iconarchive.com/icons/matiasam/ios7-style/512/Twitter-icon.png" width="25" height="25"></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li class=""><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
  </div>
    </nav>
          <!-- End .navbar.-->


			<!-- Welcome title -->
			<div class="welcome-am">
				<h1 class="align-center">Bienvenue Sur RefuHelp</h1>
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
<!--End search box-->
	<!--  Start Language & vedio -->
  <div class="container">
    <div class="row mr-row">
      <div class="col-sm-4 col-md-offset-2">

          <h4 class="choose-lang">Choisissez une langue</h4>
                   <select class="btn btn-success" name="">
                       <option value="">Français</option>
                       <option value="">English</option>
                       <option value="">عربي</option>
                   </select>

      </div>
      <div class="col-sm-4 col-md-offset-2">

            <h4 class="choose-lang">En savoir plus......</h4>
         <a href="#" class="launch-modal btn btn-lg btn-success" data-modal-id="modal-video">
         <span class="glyphicon glyphicon glyphicon-play"></span>
           <span class="video-link-text">VOIR LA VIDEO</span>
         </a>

    </div>
  </div>
</div>
	<!-- End Language & vedio -->
<!--Start buttom to begin-->
<section class="mr-comm">
  <div class="container btn btn-lg btn-success mr-btn">
          <a href="./pages/main.php">
                <span class="glyphicon glyphicon-hand-right"></span>COMMENCER ICI </a>
    </div>
</section>
  <!--End  buttom to begin-->
	</body>
</html>
