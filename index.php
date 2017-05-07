<!DOCTYPE html>
<html>
	<head>
		<title>RefuHelp-Accueil Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>

	    <!-- Start..navbar-->
		<nav class="navbar navbar-default" id="main_navbar">
            <div class="container-fluid">
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
                    <a class="navbar-brand" href="vtest.php"><img src="images/Refuhelp-Logo.png" alt="Refuhelp-Logo" width="194" height="67" id="logo" /></a>
                    <ul class="nav navbar-nav ">
                      <li class=""> <a href="#" class="dropdown-toggle" aria-expanded="false">Accueil</a></li>
                      <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accommondation <span class="caret"></span></a>
                                <ul class="dropdown-menu links">
                                   <li><a href="#"  data-value="transport">Uo dormir(logement)</a></li>
                                     <li><a href="#">Uo manger</a></li>
                                   <li><a href="#">UO s'habiller</a></li>
                                </ul>
                      </li>
                      <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adminstratifs <span class="caret"></span></a>
                                       <ul class="dropdown-menu links">
                                         <li><a href="#"  data-value="transport">Votre but</a></li>
                                         <li><a href="#">Type de technologie</a></li>
                                 </ul>
                        </li>
                             <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sante<span class="caret"></span></a>
                                              <ul class="dropdown-menu ">
                                                <li><a href="#"  data-value="transport">Idéas</a></li>
                                                <li><a href="#">Perioritées</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loisirs<span class="caret"></span></a>
                                                     <ul class="dropdown-menu">
                                                       <li><a href="#"  data-value="transport"></a></li>
                                                       <li><a href="#"></a></li>
                                               </ul>
                                           </li>
                                           <li><a href="#" data-value="vetement">Conexion</a></li>
                                           <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Insersion Pro<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="#"  data-value="transport"></a></li>
                                                              <li><a href="#"></a></li>
                                                      </ul>
                                                  </li>
                           <li><a href="https://www.paypal.com/fr/webapps/mpp/home"><img src="http://seeklogo.com/images/P/paypal-logo-C83095A82C-seeklogo.com.png" width="25" height="25">Faite donne</a></li>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire'</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
                        </ul>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->

        </nav><!-- /.navbar- -->



			<!-- Start Welcome title -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="welcome-am">
							<h1 align='center'>Bienvenue Sur RefuHelp</h1>
						</div>
					</div>
				</div>
			</div>
      <!-- End Welcome title -->

      <!-- Start search buttom-->
    <div class="search">
        <form class="navbar-form ">
               <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search">
                 <div class="input-group-btn">
                   <button class="btn btn-default" type="submit">
                     <i class="glyphicon glyphicon-search"></i>
                   </button>
                 </div>
               </div>
        </form>
    </div>
      <!--End search buutom-->
      <div class="container-fluid">
        <div class="row">
          <!--Start Side bar-right-->
          <div class="col-sm-8">
            <div class="right-side">
                              <div class="bs-calltoaction bs-calltoaction-default">
                                  <div class="row">
                                      <div class="col-md-9 cta-contents">
                                          <h1 class="cta-title">Accommondation</h1>
                                          <div class="cta-desc">
                                            <p>OÙ dormir....?</p>
                                              <p>OÙ manger....?</p>
                                              <p>Où s'habiller....?</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3 cta-button">
                                          <a href="hebergement.php" class="btn btn-lg btn-block btn-default"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI!</i></a>
                                      </div>
                                   </div>
                              </div>

                              <div class="bs-calltoaction bs-calltoaction-primary">
                                  <div class="row">
                                      <div class="col-md-9 cta-contents">
                                          <h1 class="cta-title">Adminstratifs</h1>
                                          <div class="cta-desc">
                                              <p>Préfecture</p>
                                              <p>OFFII</p>
                                              <p>Poli-emploi</p>
                                              <p>OFPRA</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3 cta-button">
                                          <a href="#" class="btn btn-lg btn-block btn-primary"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI!</i></a>
                                      </div>
                                   </div>
                              </div>

                              <div class="bs-calltoaction bs-calltoaction-info">
                                  <div class="row">
                                      <div class="col-md-9 cta-contents">
                                          <h1 class="cta-title">Santé</h1>
                                          <div class="cta-desc">
                                              <p>Faire demande CMU et Carte vitale</p>
                                              <p>Les hôpitaux</p>
                                              <p>les pharmacies</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3 cta-button">
                                          <a href="#" class="btn btn-lg btn-block btn-info"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI!</i></a>
                                      </div>
                                   </div>
                              </div>

                              <div class="bs-calltoaction bs-calltoaction-success">
                                  <div class="row">
                                      <div class="col-md-9 cta-contents">
                                          <h1 class="cta-title">Loisirs</h1>
                                          <div class="cta-desc">
                                              <p>Théatres gratuits</p>
                                              <p>Centres du sport</p>
                                              <p>Publiotques&média</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3 cta-button">
                                          <a href="#" class="btn btn-lg btn-block btn-success"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI!</i></a>
                                      </div>
                                   </div>
                              </div>

                              <div class="bs-calltoaction bs-calltoaction-warning">
                                  <div class="row">
                                      <div class="col-md-9 cta-contents">
                                          <h1 class="cta-title">Connexion</h1>
                                          <div class="cta-desc">
                                              <p>Avoir aide en ligne</p>
                                              <p>Contacts</p>
                                              <p>Chat avec les gens</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3 cta-button">
                                          <a href="#" class="btn btn-lg btn-block btn-warning"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI!</i></a>
                                      </div>
                                   </div>
                              </div>

                              <div class="bs-calltoaction bs-calltoaction-danger">
                                  <div class="row">
                                      <div class="col-md-9 cta-contents">
                                          <h1 class="cta-title">Insersion Professionnelle</h1>
                                          <div class="cta-desc">
                                              <p>Cours de françqis</p>
                                              <p>Formations</p>
                                              <p>Atoliers</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3 cta-button">
                                          <a href="#" class="btn btn-lg btn-block btn-danger"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI !</i></a>
                                      </div>
                                   </div>
                              </div>

                          </div>
                      </div>
                              <!--End sSide bar-right-->
            <!--Start Side bar-left-->
            <div class="col-sm-4">
            <div class="left-side">
              <div class="bs-calltoaction bs-calltoaction-primary">
                  <div class="row">
                      <div class="col-md-9 cta-contents">
                          <h1 class="cta-title">Qui sommes-nous</h1>
                      </div>
                      <div class="col-md-3 cta-button">
                          <a href="qui-sommes-nous.php" class="btn btn-lg btn-block btn-primary"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI !</i></a>
                      </div>
                   </div>
              </div>

              <div class="bs-calltoaction bs-calltoaction-info">
                  <div class="row">
                      <div class="col-md-9 cta-contents">
                          <h1 class="cta-title">Notre equipe</h1>
                      </div>
                      <div class="col-md-3 cta-button">
                          <a href="#" class="btn btn-lg btn-block btn-info"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI !</i></a>
                      </div>
                   </div>
              </div>

              <div class="bs-calltoaction bs-calltoaction-success">
                  <div class="row">
                      <div class="col-md-9 cta-contents">
                          <h1 class="cta-title">Perspective</h1>
                      </div>
                      <div class="col-md-3 cta-button">
                          <a href="#" class="btn btn-lg btn-block btn-success"><i class="fa fa-hand-pointer-o fa-2x" aria-hidden="true">ICI !</i></a>
                      </div>
                   </div>
              </div>
							<br><br><br><br><br><br>
									<div class="container">
													<div class="row">
													  <div class="col-md-8">
																	  <div class="vid">
																				  <iframe width="520" height="315" src="//www.youtube.com/embed/ac7KhViaVqc" allowfullscreen=""></iframe>
																			 </div><!--./vid -->
																	 </div><!--.col -->
														</div>
												</div>
                    </div>
              </div>
            </div>
					</div>
				</div>
      <!--End sSide bar-left-->

			<!--Start conact section-->
			<section id="contact" class="content-section text-center">
				<div class="contact-section">
						<div class="container">
							<h2>Contact nous</h2>
							<p>Soyez lebre et critiquez nous comme vous la souhaitez </p>
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="exampleInputName2">Nom</label>
											<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail2">Email</label>
											<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
										</div>
										<div class="form-group ">
											<label for="exampleInputText">votre Message</label>
										 <textarea  class="form-control" placeholder="Description"></textarea>
										</div>
										<button type="submit" class="btn btn-default">Envoyez Message</button>
									</form>

									<hr>
										<h3>Nos reseux sociaux</h3>
									<ul class="list-inline banner-social-buttons">
										<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
										<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
										<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</section>
			<!--End Contact sectiion-->

      <!--Start Side bar-->
      <!--End sSide bar-->
			<!--Start footer  page -->
		 <footer>
				<h3 align='center'>All rights reserved to RefuHelp Team copyright© --2017</h3>
		 </footer>
		 <!--End footer  page -->
	</body>
</html>
