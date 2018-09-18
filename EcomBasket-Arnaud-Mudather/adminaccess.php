
<?php

  session_start();

try{

$bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', '');

}

catch(Exception $e){

      die('Erreur : '.$e->getMessage());
}

?>

<?php


//  Récupération de l'utilisateur et du mdp
$req = $bdd->query('SELECT pseudo, pass FROM admin');
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = $_POST['pass'] === $resultat['pass'];
$isPseudoCorrect = $_POST['pseudo'] === $resultat['pseudo'];

if($isPasswordCorrect AND $isPseudoCorrect === true){

  header('Location: addproduct.php');

} else {

  echo "Accès refusé, Refus de l'identifiant ou MDP";

}

?>
