
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Baskets For Street/product_page</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include("links.php");?>

</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php include("header.php");?>

  <?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=site_eCommerce;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }

  $index = $_GET['index'];

  $req = $bdd->query('SELECT p.img_name image_name, p.id_article article_id, i.name article_name, i.price article_price, i.availability article_availability, i.description article_description
  FROM infos_articles i
  INNER JOIN images p
  ON p.id_article = i.id
  WHERE p.id_article = ' . $index . '

  ');

  $donnees = $req->fetch()

  ?>

  <main>
    <div class="container">
      <div class="productImageAndDetails my-5 row col-12 mx-auto">

          <div class="productImage col-12 col-lg-6  mx-auto mb-3">
              <p class="productName my-0 d-lg-none text-center font-weight-bold"><?php echo $donnees['article_name'];?></p>
              <img class="d-block mx-auto productDetailsImage" src="<?php echo 'img/' . $donnees['image_name'];?>" alt="basket_homme.jpg">
          </div>

          <div class="productDetails col-12 col-lg-6  mx-auto">
              <p class="text-center d-none d-lg-block font-weight-bold mt-2 mb-4"><?php echo $donnees['article_name'];?></p>

              <p class="mx-auto d-flex justify-content-between">
                <label for="color" class="font-weight-bold">Choisissez votre couleur :</label>
                <select name="color" id="color">
                    <option value="black">Noir</option>
                    <option value="red">Rouge</option>
                    <option value="green">Vert</option>
                    <option value="blue">Bleu</option>
                </select>
              </p>

              <p class="mx-auto d-flex justify-content-between">
                <label for="size" class="font-weight-bold">Choisissez votre pointure :</label>
                <select name="size" id="size">
                    <option value="45">45</option>
                    <option value="40">40</option>
                    <option value="35">35</option>
                    <option value="30">30</option>
                </select>
              </p>

              <p><span class="price font-weight-bold">Prix : </span><?php echo $donnees['article_price'];?></p>

              <p><span class="availability font-weight-bold">Disponibilité : </span><?php echo $donnees['article_availability'];?></p>

              <p class="description text-nowrap">
              <span class="font-weight-bold">Descriptif : </span><?php echo $donnees['article_description'];?>
              </p>
              <p><button id="achat" type="button" class="btn btn-outline-dark">Ajouter au panier</button></p>
        </div>
      </div>
    </div>
  </main>


  <?php include("footer.php");?>

  <?php include("scripts.php");?>

</body>

</html>
