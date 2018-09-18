<?php
include("header.php")
?>

 <form  action="verifier.php" method="post" enctype="multipart/form-data">
  <label for="name">name : </lable> <input id="name" type="text" name="name" ><br>
  <label for="price">price : </label><input type="number" name="price"></br>
  <label for="content">Content : </label><input type="text" name="content"> </br>
  <label for="dispo">dispo : </label><input type="radio" name="dispo" value="1" checked="checked">
  <label for="indispo">indispo : </label><input type="radio" name="dispo" value="0"> </br>
  <label for="image">image : </label><input type="file" name="image" > </br>
  <input  type="submit" value="Envoyer">
  </form>
  <?php


 include("footer.php");
?>
