<?php require('config.php') ?>
<?php
// On envoie notre message a la BDD
$req = $bdd->prepare('INSERT INTO message (user_email, user_message) VALUES(?,?)'); // ici on ne connait pas encore les valeurs, on met donc des "?"

// il faut le recupérer avec le post
$result = $req->execute(array(
    $_POST['useremail'],
    $_POST['usermessage'],
    ));

$id = $bdd->lastInsertId();

if($result){
    header('location: apercu_message.php?id='.$id);
}
else{
    header('location: erreurs_generiques.php');
}
?>
