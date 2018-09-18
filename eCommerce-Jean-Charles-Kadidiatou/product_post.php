<?php

// Database access
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=site_eCommerce;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$name = addslashes($_POST['name']);
$description = addslashes($_POST['description']);
$price = addslashes($_POST['price']);
$availability = addslashes($_POST['availability']);

// Check if product_add form answer conditions to be pushed into database

if (isset($name) AND !empty($name) AND isset($description) AND !empty($description) AND isset($price) AND !empty($price) AND isset($availability) AND !empty($availability)
AND isset($_FILES['image']) AND !empty($_FILES['image']) AND $_FILES['image']['error'] == 0) {

  // Insertion of  product informations in database
  $req = $bdd->prepare('INSERT INTO infos_articles (name, price, availability, description) VALUES(:name, :price, :availability, :description)');
  $req->execute(array(
      'name' => $name,
      'price' => $price,
      'availability' => $availability,
      'description' => $description
      ));

  // Variable creation to get the last id entered in database
  $last_id = $bdd->lastInsertId();

  if ($_FILES['image']['size'] <= 1000000){

      // Testons si l'extension est autorisée
      $infosimage = pathinfo($_FILES['image']['name']);//A variable to get the file extension
      $extension_upload = $infosimage['extension'];
      $extensions_autorisees = array('jpg', 'png');//Create array with authorized extensions

      if (in_array($extension_upload, $extensions_autorisees)){//Check if image is of good extension

      $img_name = $_FILES['image']['name'];

        // Image name insertion in database and link id_article with last id pushed in the other table
        $req = $bdd->prepare('INSERT INTO images (img_name, id_article) VALUES(:img_name, :id_article)');
        $req->execute(
          array(
            'img_name' => $img_name,
            'id_article' => $last_id
          ));
      }else {
        echo 'Le type d\'image n\'est pas bon !.';
      }
  }
  echo 'Les infos produit et image ont bien été ajoutées !.';
  header('refresh:1;url=product_add.php');
}else {
  echo 'Veuillez réessayer !.';
  header('refresh:1;url=product_add.php');
}

?>
