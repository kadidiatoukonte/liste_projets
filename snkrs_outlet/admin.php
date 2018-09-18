<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Espace administrateur</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  </head>

<body>

<?php
  include('header.php');
  // include('../divers/divers2.php');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=snkrs_outlet;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// to recuperate password
$reponse = $bdd->query('SELECT password FROM admin WHERE pseudo="admin"');

$donnees = $reponse->fetch();

// If you have entered the password, you have access to the admin area and you can add a product
if (password_verify($_POST['password'], $donnees['password'])) {

    echo '<div class="messageAccueil">
    <p class="text-center font-weight-bold">Bienvenue !</p>
    </div>';


    echo '<div class="row m-auto">
        <form class="border border-success mx-auto col-4 my-5 rounded " method="post" action="form.php">
        <label class="mt-3 ml-5 mr-3" for="name">Nom du produit</label>
        <input id="name" type="text" name="name" value="" required><br/>
        <label class="ml-5 mr-3" for="price">Prix </label>
        <input id="price" type="text" name="price" required><br />
        <label class="ml-5 mr-3" for="size">Pointures </label>
        <input id="size" type="text" name="size" required><br />
        <label class="ml-5 mr-3" for="color">Couleurs </label>
        <input id="color" type="text" name="color" required><br />

        <button type="submit" class="btn btn-success ml-5 mb-3">Submit</button>
      </form>
      </div>';

} else {
  echo 'accès refusé';
}

$reponse->closeCursor();

include('footer.php');
?>
