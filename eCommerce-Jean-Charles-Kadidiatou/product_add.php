<?php

session_start();

 ?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Baskets For Street/product_add</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


  <!-- Add product in database form -->

  <p class="h3">Ajout de produit en base de données : </p>

  <form class="mt-3 ml-3 mb-5" action="product_post.php" method="post" enctype="multipart/form-data">

    <p>
      <label for="name">Nom produit : </label>
      <input type="text" name="name" required/>
    </p>

    <p>
       <label for="description" >Description : </label>
       <textarea name="description" required></textarea>
    </p>

    <p>
        <label for="price">Prix : </label>
        <input type="text" name="price" required/>
    </p>

    <p>
        <label for="availability">Disponibilité : </label>
        <input type="text" name="availability" required/>
    </p>

    <p>
        Image produit (jpg / png):
        <input type="file" name="image" required/>

    </p>

    <input type="submit" value="Envoyer" />

  </form>


<?php include("scripts.php");?>

</body>

</html>
