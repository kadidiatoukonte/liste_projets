<?php require('config.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


    <?php

$req = $bdd->prepare('SELECT password FROM admins WHERE user_name = ?');
$req->execute(array($_GET['name']));

$data = $req->fetch();
if ($data == FALSE) {
    echo 'pas bon';
}
else {
    if ($data['password'] == $_GET['password']) {
        echo 'bon';
    }
    else {
        echo 'pas bon';
    }
}
?>
</body>
</html>
