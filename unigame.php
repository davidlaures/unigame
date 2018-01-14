<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>UniGame</title>
</head>

<body>

  <?php

  ini_set('display_errors','on');
	    ini_set('display_startup_errors','on');
	    error_reporting(E_ALL);

  $server = 'mysql:host=localhost;dbname=id3793433_bdd_unigame';
  		$user = 'id3793433_unigame';
  		$password = 'unigame';

          try
          {
              $bdd = new PDO($server, $user, $password);
              echo 'Connexion réussie !<br/>';
          }
          catch (PDOException $e)
          {
                  die('Erreur : ' . $e->getMessage());
          }
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



  if (isset($_POST['envoyer'])) {
    $login = $_POST['login'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $promo = $_POST['promo'];
    $date = $_POST['date'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    $sql = $bdd->prepare("INSERT INTO Etudiant(Login, First_Name, Last_Name, Promo, Birth_Date, Mail, Mdp) VALUES(:login, :nom, :prenom, :promo, :datenaissance, :mail, :mdp)");
    $sql->execute(array(
      "login" => $login,
      "nom" => $nom,
      "prenom" => $prenom,
      "promo" => $promo,
      "datenaissance" => $date,
      "mail" => $mail,
      "mdp" => $mdp
    ));

 }

  ?>


  <form action="unigame.php" method="post">
      Login<br>
      <input type="text" name="login" required><br>
      Nom<br>
      <input type="text" name="nom" required><br>
      Prénom<br>
      <input type="text" name="prenom" required><br>
      Promo<br>
      <input type="text" name="promo" required><br>
      Date de naissance<br>
      <input type="date" name="date" required><br>
      Adresse mail<br>
      <input type="email" name="mail" required><br>
      Mot de passe<br>
      <input type="password" name="mdp" required><br>

      <input type="submit" name="envoyer" value="S'inscrire" required>
  </form>
</body>

</html>
