<?php
session_start();
require('config.php');

$req = $bdd->prepare('INSERT INTO products(name, price, picture, disponibility, size, color, description) VALUES(:name, :price, :picture, :disponibility, :size, :color, :description)');

$req->execute(array(
  'name' => $_POST['name'],
  'price' => $_POST['price'],
  'picture' => $_POST['picture'],
  'disponibility' => $_POST['disponibility'],
  'size' => $_POST['size'],
  'color' => $_POST['color'],
  'description' => $_POST['description'],
  ));



$req->closeCursor();

header('Location: Adding.php');
}
else
{
	echo "Vous n'avez pas indiquer de nombre pour le prix de l'article.";
}

?>
