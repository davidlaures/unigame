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

    <title>UNIGAME - Le jeu</title>

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

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
          <img class="card-img img-fluid w-100" src="img/bg.jpg" alt="">
          <div class="card-img-overlay bg-overlay">
            <h2 class="card-title text-shadow text-white text-uppercase mb-0">Le Jeu</h2>
            <p class="lead card-text text-shadow text-white w-50 d-none d-lg-block">UniGame est un jeu amusant et absurde mettant en relation les étudiants de MMI à l'IUT Bordeaux-Montaigne. Tous les jours, chaque participant reçoit une nouvelle notification par mail contenant un gage à réaliser dans la journée avec quelqu'un désigné au hasard. 24h plus tard, la personne visée reçoit également une notification afin de valider si le gage a été réalisé. 
Nous projetons cependant de faire évoluer le jeu progressivement dans le temps. En effet, bientôt il sera possible de cumuler des points et défier les autres étudiants de la promo afin d'être au sommet du podium, et remporter des badges à collectionner. Lorsque la collection de badges sera complète, nous décernerons un prix.</p>
          </div>
        </div>
      </div>

    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Unigame 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
