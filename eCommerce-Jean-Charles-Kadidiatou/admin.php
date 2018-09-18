<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Baskets For Street/Admin</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



<!-- Admin form to protect the entry to product_add page -->

  <form action="check_admin.php" method="post">

    <p>
      <label for="pseudo">Pseudo : </label>
      <input type="text" name="pseudo" required />
    </p>
    <p>
      <label for="password">Password : </label>
      <input type="password" name="password" required/>
    </p>

    <input type="submit" value="Valider" />

  </form>


<?php include("scripts.php");?>

</body>

</html>
