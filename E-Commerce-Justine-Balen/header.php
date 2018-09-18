<!doctype html>
<html class="no-js" lang="fr">

<head>

  <?php
  //take the source page
  $url = $_SERVER['PHP_SELF'];
        $pageName = substr($url, -9, -1);

        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=basket_addict;charset=utf8', 'root', '');
        }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
  ?>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php
    //display if that index contact or product
    if ($pageName == "index.ph") {
      echo "Accueil";
    } elseif ($pageName == "ntact.ph") {
      echo "Contact";
    } else {
      echo $products[$productIndex]['name'];
    }
    ?> | Basket Addict</title>
  <meta name="description" content="">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">

</head>


<body>
  <header>
    <div class="nav-container">
      <div class="navbar">
        <div class="mobileMenu"></div>
        <a href="index.php" class="left-item"><img src="img/2.png" alt="logo"></a>
        <a href="index.php" class="nav-item">Accueil</a>
        <a href="contact.php" class="nav-item">Contact</a>
        <a href="login.php" class="login" color=blue;>Login</a>
        <div class="toggleMenu">
          <span>&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
        </div>
        <a href="#" class="basketlink">
          <img src="img/basket.svg" alt="Panier" class="basket">
          <div class="baskContent">
            <p class="numBasket"><?php
            $respond = $bdd->query('SELECT count(*) as id from basket');
            $length = $respond->fetch();
            echo $length['id']; ?></p>
          </div>
        </a>

      </div>

    </div>

    <!-- Mobile Nav Section(hidden content) -->
  <div class="overlay">
      <nav class="nav">
          <a href="index.php">Accueil</a>
          <a href="contact.php">Contact</a>
          <a href="login.php" class="login" color=blue;>Login</a>

      </nav>
    </div>
  </header>
