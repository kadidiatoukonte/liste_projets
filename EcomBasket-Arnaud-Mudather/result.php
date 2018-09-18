<?php include('header.php') ?>

<?php

if(isset($_POST['valid']) AND !empty($_POST['valid'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mess = $_POST['mess'];

    echo '<br /><br />' . '<br />Salut <br />'. $firstname.' '. $lastname.' . <br/>';
    echo '<br/>Ce message :' . " ' ". $mess. ' '. "'" . ' a été envoyé.<br />';

} else {
  
  echo "veuillez renseigner les champs";

}


?>

  <?php include('footer.php') ?>
