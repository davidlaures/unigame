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

    <title>UNIGAME - À Propos</title>

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
      
    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">À Propos - 
          <strong>UNIGAME</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="img/bg.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <p>Ce jeu a été créé et developpé par une équipe d'étudiant en deuxième année d'études de DUT MMI (Métiers du Multimédia et de l'Internet).</p>
            <p><strong>Développement Front / Design :</strong> Milène MICOTON, Guillaume PHILIP, Clara PILLAULT et Mickael PORTIER</p>
            <p><strong>Développement Back :</strong> David Laures, Clement RENAUD, Thomas HAWKINS</p>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Notre 
          <strong>Equipe</strong>
        </h2>
        <hr class="divider">
        <div class="row">
         <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="img/milene.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Milène MICOTON
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="img/david.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">David Laures
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/guigui.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Guillaume PHILIP
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/clara.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Clara PILLAULT
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/clement.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Clement RENAUD
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/mickael.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Mickael PORTIER
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="img/thomas.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Thomas HAWKINS
                </h4>
              </div>
            </div>
          </div>
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
