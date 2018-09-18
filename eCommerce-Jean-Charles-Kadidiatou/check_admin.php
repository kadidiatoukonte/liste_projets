<!-- Check if admin pseudo and password are ok and redirect -->
<?php
if ( isset($_POST['pseudo']) AND isset($_POST['password']) AND $_POST['password'] ==  "kirikou" AND $_POST['pseudo'] == "admin"){

  header('Location: product_add.php');

}else{
  echo 'Veuillez retaper pseudo et/ou mot de passe';
  header('refresh:2;url=admin.php');
}

?>
