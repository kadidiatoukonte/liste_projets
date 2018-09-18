<?php require('config.php'); ?>
<?php
include("header.php");
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <title>Nous contacter | DistricBasket</title>
    <meta name="description" content="Site de vente de chaussures de Sneakers (Basket de ville)">

<div class="row mw1200 col-md-12 justify-content-center">
<form action="pages/contact/post_message.php" method="post">
  <div class="form-group" id="useremail">
    <label for="exampleFormControlInput1">Votre e-mail :</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="useremail" placeholder="nom@example.com">
  </div>
  <div class="form-group" id="usermessage">
    <label for="exampleFormControlTextarea1">Votre message :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="usermessage"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
</form>
</div>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.
<?php include('footer.php') ?>
    <?php include('script.php') ?>
