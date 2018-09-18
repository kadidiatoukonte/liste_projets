<?php session_start();
$title =  array
(
  'nameHTML' => '<a href="index.php"><h1 class="title text-center"><span class="pacifico">E</span>-shoes</h1>
            <p class="slogan text-center">Prends ton pied</p></a>',
  'name' => 'E-shoes'
);
if(isset($_POST['go']) AND $_POST['go']=='send'){
  $_SESSION['panier']++;
}
?>
<!doctype html>
  <html lang="FR">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo  $title['name']?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <div class="page">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-783C02 fixed">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

          <span><img class="Hamburger_icon" src="img/Hamburger_icon.svg.png" alt=""></span>

          <div class="">
            <?php echo $title['nameHTML']; ?>
          </div>

        </button>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

          <div class="navbar-nav logo-medium">
            <input class="nav-item nav-link active desktop connexion" type="button" value="connexion" onclick="self.location.href='Adding.php'">

            <div class="col-9 desktop mx-5">
              <?php echo $title['nameHTML']; ?>
            </div>
            <p class="text-white"><?php echo $_SESSION['panier'];?></p>
            <img class="panier m-2" src="img/panier-CSLH.png" alt="panier">
            <a class=" nav-item nav-link active font-weight-bold text-white col-1" href="index.php">Acceuil<span class="sr-only">(current)</span></a>
            <input class="nav-item nav-link active col-6 d-lg-none connexion" type="button" value="connexion" onclick="self.location.href='Adding.php'">
          </div>
        </div>
       </nav>
      </header>
