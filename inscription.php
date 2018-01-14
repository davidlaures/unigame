<!DOCTYPE html>
<html>

    
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Unigame - Inscription</title>
        <link rel="stylesheet" type="text/css" href="css/inscription.css" /> 
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
    <header>

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
    </header>


  <!-- Corps de la page -->
    <form class="frame" method="post" action="verif.php">
      <div class="letter">
        <label for="name">Nom :</label><br />
        <input type="text" id="name" name="user_name"><br />
      </div>

      <div class="letter">
        <label for="first_name">Prénom :</label><br />
        <input type="text" id="first_name" name="first_name"><br />
      </div>

      <div class="letter">
        <label for="birth_date">Date de naissance :</label><br />
        <input type="text" id="birth_date" name="birth_date"><br />
      </div>
       
      <div class="letter">          
        <label for="mail">Email :</label><br />
        <input type="email" id="mail" name="user_email"><br />
      </div>

      <div class="letter">
        <label for="login">Login :</label><br />
        <input type="text" id="login" name="login"/><br />
      </div>

      <div class="letter">
        <label for="password">Mot de passe :</label><br />
        <input type="password" id="password" name="password"/><br />
      </div>

        <div class="letter">
        <label for="promo">Promo :</label><br />
        <input type="text" id="promo" name="promo"/><br />
      </div>
        
      <div class="letter">
        <label for="img">Image de profil</label><br />
        <button type="submit">Importer une image</button><br />
      </div>
        


      <div class="click">
        <label class="cocher"><input id="checkbox" type="checkbox"/>   Autoriser les notifications</label>  
      </div>

      <div class="bouton">
<!--
        <a href="#"><span data-hover="Créer mon compte">Créer mon compte</span></a>
-->

          <input data-hover="Créer mon compte" type="submit" id="submit" name="submit" value="Créer mon compte">
      </div>
    </form>
        


      
    <!-- Footer de la page -->
        <footer> &copy; 2017 Unigame </footer>

    </body>
</html>