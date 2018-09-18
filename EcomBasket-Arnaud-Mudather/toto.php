<?php include('header.php') ?>

<?php

session_start();

    try{

    $bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', '');

    }

    catch(Exception $e){

          die('Erreur : '.$e->getMessage());

    }



// Attempt insert query execution
  // Create prepared statement
  $stmt = $bdd->prepare("INSERT INTO goods(name, price, size, color, stock, summary) VALUES (:name, :price, :size, :color, :stock, :summary)");


  $stock = 0;

  // Bind parameters to statement
  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':price', $_POST['price']);
  $stmt->bindParam(':size', $_POST['size']);
  $stmt->bindParam(':color', $_POST['color']);
  $stmt->bindParam(':stock', $stock);
  $stmt->bindParam(':summary', $_POST['summary']);


  // Execute the prepared statement
  $stmt->execute();

?>
  <p class="my-5"> Product inserted </p>

<?php
// Close connection
unset($bdd);

?>

  <?php include("footer.php"); ?>
