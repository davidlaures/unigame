<?php
    session_start(); 
    if (!isset($_SESSION['login'])) {
       header ('Location: index.php');
       exit(); 
    } 

    $bdd = new PDO('mysql:host=localhost;dbname=unigamefinal;charset=utf8', 'root', '');
    




/*    if(!isset($_COOKIE['cookieDefi']) ){
        setcookie("cookieDefi", $defiObtenu, time() + 86400);
    }
if(!isset($_COOKIE['cookieLogin'])){

        setcookie("cookieLogin", $etudiantCible, time() + 86400);
    }*/
    ?>
      
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UNIGAME - Espace membre</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
      <link rel="stylesheet" type="text/css" href="css/timer.css">
    <link href="css/business-casual.css" rel="stylesheet">
      
    <script src="js/modernizr.custom.js"></script>
      

  </head>

  <body>

    <div class="text-center text-heading text-white mt-5 d-none d-lg-block"><img class="logo" src="img/logo.png"></div> <br>
  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light py-lg-4"> 
      <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none logo-responsive" href="#"><img class="image-logo-responsive" alt="logo" src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">A propos</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="lejeu.php">Le jeu</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
            </li>
            <?php 
                if (isset($_SESSION['login'])) {

            ?>
              <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="deconnexion.php">Déconnexion</a>
            </li>
              <?php }
                else {
            ?>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="inscription.php">Inscription</a>
            </li>
              <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="connexion.php">Connexion</a>
            </li>
              <?php 
                }
            ?>
          </ul>
        </div>
      </div>
    </nav>




<div id="slide1"> 
  <div class="flex-column-center">
    <h1 class="titre-slide1"><span class="game">Votre défi du jour :</span> </h1>
    <h3 class="ss-titre"> <?php echo /*$_COOKIE["cookieDefi"]*/$_SESSION['defi']; ?> </h3><br/><br/>
      <h1 class="titre-slide1"><span class="game">Cible :</span> </h1>
    <h3 class="ss-titre"> <?php echo /*$_COOKIE["cookieLogin"];*/$_SESSION['etudiant']; ?> </h3>
  </div>
    
        
      </div>
      <div id="slide5">
  <div class="para">
    <div class="flex-1">
      <p>
        <img class="aligncenter size-thumbnail" src="img/temps.png">
      </p>
      <p class="logo timer">
      <strong> TEMPS RESTANT : </strong>
      </p>
    </div>

    <div class="flex-1">
      <p>
        <img class="aligncenter size-thumbnail" src="img/meet.png">
      </p>
      <p class="accueil-logo-description">
      <strong></strong>
      </p>
    </div>

    <div class="flex-1">
      <p>
        <img class="aligncenter size-thumbnail" src="img/action.png">
      </p>
      <p class="logo action défi">  
      <strong>AVANT LE PROCHAIN DEFI..</strong>
      </p>
    </div>
    </div>
      </div>
      <div id="clock" class="clock">
      <h1 class="event_title">TON DEFI COMMENCE DANS..</h1>
      <div id="numbers">
        <span class="days"></span>
        <span class="hours"></span>
        <span class="minutes"></span>
        <span class="seconds"></span>
      </div>
      <div id="units">
        <span>Days</span>
        <span>Hours</span>
        <span>Minutes</span>
        <span>Seconds</span>
      </div>
    </div>
<div id="slide4">

  <p class="copyright" > Copyright Unigame 2017 </p>

  <div class="contactez">
    <a class="contact" href="contact.php"><span data-hover="Une question ? Contactez-nous">Une question ? Contactez-nous !</span></a>
  </div>


</div>
    


    </body>
    <script src="js/timer.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/JavaScript" src="js/script.js"></script>
    <script src="js/timer.js"></script>
</html>