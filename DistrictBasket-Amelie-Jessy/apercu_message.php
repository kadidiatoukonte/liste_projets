<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysql;dbname=district_basket;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT user_email, user_message FROM message WHERE id='.$_GET['id']);
$data = $req->fetch();

echo($data['user_email']. ' ' .$data['user_message']);
?>
