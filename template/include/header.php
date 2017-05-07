<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php  getTitle() ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
       <link rel="stylesheet" href="css/jquery-ui.css">
       <link rel="stylesheet" href="css/jquery.selectBoxIt.css">
      <link rel="stylesheet" href="css/frontend.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Homepage</a>
      </div>
      <div class="collapse navbar-collapse" id="app-nav">
        <ul class="nav navbar-nav navbar-right">
                  <?php
                  foreach (getCat() as $cat) {
                    echo '<li>
                    <a href="category.php?pageid=' . $cat['ID'] . '&pagename=' . str_replace(' ', '-', $cat['name']) . '">
                    '. $cat['name'] .'
                    </a>
                    </li>';
                  }
                   ?>
        </ul>
      </div>
    </div>
  </nav>
<?php echo "Ahalllllllllllaaaaaaaaaaaaaaaaaaaaaaaaaan"; ?>
