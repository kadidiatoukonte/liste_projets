<?php require("config.php") ?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title>Ajout | DistricBasket</title>
  <meta name="description" content="Site de vente de chaussures de Sneakers (Basket de ville)">
<?php  if ($_GET['id'] == 7894561230) { ?>
  <?php include('header.php') ?>

  <?php
  ?>

  <form class="pt-5" action="verifadd.php" method="post" enctype="multipart/form-data">
    <label class="pt-5" for="name">Nom:</label>
    <input id="name" type="text" name="article_name" value=""><br>
    <label for="desc">Description:</label>
    <input id="desc" type="text" name="article_desc" value=""><br>
    <label for="price">Prix:</label>
    <input id="price" type="text" name="article_price" value=""><br>
    <p>Disponible :</p>
    <input id="dispo" type="radio" name="disposhoes" value="Disponible" checked="checked"> <label for="dispo">Disponible</label>
    <input id="nodispo" type="radio" name="disposhoes" value="Non Disponible"> <label for="nodispo">Non Disponible</label><br>
    <label for="image">Image:</label>
    <input type="file" name="url_img"><br>
    <input type="submit" name="" value="Valider">
  </form>
  <?php include('footer.php') ?>
  <?php include('script.php') ?>
<?php } else {
  header('location: index.php');
} ?>
