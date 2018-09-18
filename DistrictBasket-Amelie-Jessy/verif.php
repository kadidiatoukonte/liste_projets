<?php require('config.php') ?>
<?php
$req = $bdd->query("SELECT * FROM admins");
$data = $req->fetchAll();

foreach ($data as $key => $value){
    if($_POST['name'] !== $value['user_name'])
        {
            header('Refresh: 3; URL=connect.php');
            echo("Accès refusé");
        }
        else
        {
          if ($_POST['mdp'] !== $value['password']) {
            header('Refresh: 3; URL=connect.php');
            echo("Accès refusé");
          }
          else {
            header('Refresh: 3; URL=addproduct.php?id=7894561230');
            echo("acces autorisé");

          }
        }
}
?>
