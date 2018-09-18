<?php
session_start();


if(isset($_POST['go']) AND $_POST['go']=='send'){
  $_SESSION['panier']++;
}

header('Location: index.php')
?>
