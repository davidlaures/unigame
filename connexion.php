<!DOCTYPE html>
<html>

    <?php

    
    if (isset($_POST['connexion']) && $_POST['connexion'] == 'Je me connecte') {
   if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['mdp']) && !empty($_POST['mdp']))) {
       
       $bdd = new PDO('mysql:host=localhost;dbname=unigamefinal;charset=utf8', 'root', '');
       
       $sql = "SELECT * FROM etudiant WHERE Login='".$_POST['login']."' AND Mdp ='".$_POST['mdp']."' ";
       $req = $bdd->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
       $reponse = $req->fetch();
       
       if ($reponse[0] == $_POST['login'] && $reponse[1] == $_POST['mdp']) {
           echo "gg";
         session_start();
         $_SESSION['login'] = $_POST['login'];
           $sql = "SELECT libDefi FROM defis ORDER BY RAND() LIMIT 1";
    $req = $bdd->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
    $reponse = $req->fetch();
    $defiObtenu = $reponse[0];

   /* $etudiant = "SELECT login FROM etudiant ORDER BY RAND() LIMIT 1";*/
    $etudiant = "SELECT login FROM etudiant WHERE login not in (select login from etudiant WHERE login ='".$_SESSION['login']."') ORDER BY RAND() LIMIT 1";
    $req2 = $bdd->query($etudiant) or die('Erreur SQL !<br />'.$etudiant.'<br />'.mysql_error());
    $resultat = $req2->fetch();
    $etudiantCible = $resultat[0];

    $lastconnect = "SELECT login FROM lastconnect";
$req3 = $bdd->query($lastconnect) or die('Erreur SQL !<br />'.$lastconnect.'<br />'.mysql_error());
    $resultat3 = $req3->fetch();
    $lastConnected = $resultat3[0];
    $_SESSION['defi'] = $defiObtenu;
$_SESSION['etudiant'] = $etudiantCible;
         header('Location: membre.php');
         exit();
      }
      // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
      else {
         $erreur = true;
}
   }
    }
       ?>
  
    
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
    <form class="frame" method="post" action="connexion.php">
      <div class="letter">
        <label for="name">Login :</label><br />
        <input type="text" id="login" name="login"><br />
      </div>

      <div class="letter">
        <label for="first_name">Mot de passe :</label><br />
        <input type="password" id="mdp" name="mdp"><br />
      </div>
        

      <div  class="bouton">

          <input data-hover="Créer mon compte" type="submit" id="submit" name="connexion" value="Je me connecte">
        </div>
        <?php
        if(isset($erreur)){
            if ($erreur == true){
                echo '<b>Compte non reconnu.</b>';
            }
        }
        ?>
    </form>
        


      
    <!-- Footer de la page -->
        <footer> &copy; 2017 Unigame </footer>

    </body>
</html>