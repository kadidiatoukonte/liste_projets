<?php
include("data.php");
$price = (int) $_POST['price'];
if (isset($_POST['name']) and !empty($_POST['name']) and isset($_POST['description']) and !empty($_POST['description'])
and isset($_POST['price']) and !empty($_POST['price']) and is_numeric($price) and isset($_POST['statut'][0])
and !empty($_POST['statut'][0])) {
    echo $_POST['name'] . "<br>";
    echo $_POST['description'] . "<br>";
    echo $_POST['price'] . "<br>";
    // echo $_POST['file']['type'] . "<br>";
    echo $_POST['statut'][0] . "<br>";

    $req = $bdd->prepare('INSERT INTO product(name, description, price, statut) VALUES(:name, :description, :price, :statut)');
    $req->execute(array(
    'name' => htmlspecialchars($_POST['name']),
    'description' => $_POST['description'],
    'price' => $price,
    'statut' => $_POST['statut'][0]
  ));
// header('Location: index.php');
} else {
    echo "L'ajout à la BDD est incorrect.";
}
