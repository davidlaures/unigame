<?php 

session_start() 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UNIGAME - Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
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

      <?php 
                if (isset($_SESSION['login'])) {

            ?>
      <div class="boutons defi">
      <a href="membre.php" class="inscrire"><span data-hover="Mon défi">Mon défi</span></a>
      </div>
      <?php 
                }
            ?>
      
<div id="slide1"> 
  <div class="flex-column-center">
    <h1 class="titre-slide1"> <span class="Uni">Uni</span><span class="game">Game</span> </h1>
    <h3 class="ss-titre"> Le défi et la rencontre réunis </h3>
  </div>
</div>


<div id="slide2">
  <div class="para">
    <div class="flex-1">
      <p>
        <img class="aligncenter size-thumbnail" src="img/jeu.png">
      </p>
      <p class="accueil-logo-description">
      <strong>Relevez des défis insolites</strong>
      </p>
    </div>

    <div class="flex-1">
      <p>
        <img class="aligncenter size-thumbnail" src="img/meet.png">
      </p>
      <p class="accueil-logo-description">
      <strong>Provoquez des rencontres inoubliables</strong>
      </p>
    </div>

    <div class="flex-1">
      <p>
        <img class="aligncenter size-thumbnail" src="img/ubm.png">
      </p>
      <p class="accueil-logo-description">
      <strong>Tout cela dans l'enceinte de l'IUT Bordeaux Montaigne..</strong>
      </p>
    </div>
    
  </div>
<?php 
                if (!isset($_SESSION['login'])) {

            ?>
  <div class="boutons">
    <a href="inscription.php" class="inscrire"><span data-hover="Inscrivez-vous">Inscrivez-vous</span></a>
    <a href="connexion.php" class="inscrire"><span data-hover="Connectez-vous">Connectez-vous</span></a>
  </div>
    <?php 
                }
            ?>
</div>

<div id="slide3">

  <p class="copyright"> Copyright Unigame 2017 </p>

  <div class="contactez">
    <a class="contact" href="contact.php"><span data-hover="Une question ? Contactez-nous">Une question ? Contactez-nous !</span></a>
  </div>


</div>
  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/JavaScript" src="js/script.js" </script>

  </body>

</html>
