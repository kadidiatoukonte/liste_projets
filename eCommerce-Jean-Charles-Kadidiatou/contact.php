<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Baskets For Street/contact</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<?php include("header.php");?>


<!-- Contact form -->
<main>

<h2 class="text-center mt-3 h4">Nous contacter</h2>

<form class="ml-3" action="contact_content.php" method="post">

  <p>
    <label for="email">Entrez votre adresse mail :</label></br>
    <input type="email" name="email" required>
  </p>

  <p>
    <label for="message">Entrez votre message :</label></br>
    <textarea name="message" rows="8" cols="80" required></textarea>
  </p>

  <input type="submit" value="Envoyer" />

</form>

</main>

<?php include("footer.php");?>

<?php include("scripts.php");?>

</body>

</html>
