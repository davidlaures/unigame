            <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=unigamefinal;charset=utf8', 'root', '');
        }
        catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
            echo "erreur";
}

$prenom = $_POST['first_name'];
$nom = $_POST['user_name'];
$date = $_POST['birth_date'];
$mail = $_POST['user_email'];
$login = $_POST['login'];
$password = $_POST['password'];
$promo = $_POST['promo'];


try {
/*$requete = $bdd->prepare("INSERT INTO etudiant('Login', 'Mot de passe', 'Nom', 'Prénom', 'Année de naissance', 'Adresse mail', 'idPromo') VALUES(:login,:mdp,:prenom, :nom, :annee, :mail, :promo)");
$requete->bindValue(':login', $login, PDO::PARAM_STR); 
$requete->bindValue(':mdp', $prenom, PDO::PARAM_STR);
$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR); 
$requete->bindValue(':annee', $date, PDO::PARAM_STR);
$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
$requete->bindValue(':promo', $promo, PDO::PARAM_STR);

$requete->execute();*/
    
    $insert = $bdd->exec("
    INSERT INTO etudiant(Login, Mdp, Nom, Prénom, Annee, Mail, idPromo)
    VALUES ('".$login."','".$password."','".$prenom."','".$nom."','".$date."','".$mail."','".$promo."')");
    $insertLogin = $bdd->exec("
    INSERT INTO lastconnect(login)
    VALUES ('".$login."')");

    
header('Location: connexion.php');
    

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
            echo "erreur";
}
        ?>
