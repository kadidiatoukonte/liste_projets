<?php require('config.php') ?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title>Accueil | DistricBasket</title>
  <meta name="description" content="Site de vente de chaussures de Sneakers (Basket de ville)">

<?php include('header.php') ?>

<?php
  $shoestable = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 4');

  echo "<div class='row mw1200 col-12 mx-auto'>";
  foreach ($shoestable as $key => $value) {
    // See the image of the product pear the id of the product
    $shoesimg = $bdd->prepare('SELECT * FROM image WHERE article_id = :takeid');
    $shoesimg->execute(array(
      'takeid' => $value['id']
    ));


    $shoesimg = $shoesimg->fetchAll();

    echo "<div class='col-10 col-sm-6 col-md-3 col-lg-3 mx-auto pb-3'>
      <a href='detail.php?product=" . $value['id'] . "'>
        <div class='card'>
        <img class='card-img-top' alt='Shoe Picture' src='" . $shoesimg[0]['url_img'] . "'>
        <ul class='list-group'>
            <li class='list-group-item'>" . $value['article_name'] . "</li>
            <li class='list-group-item'>" . $value['article_desc'] . "</li>
            <li class='list-group-item'>" . $value['article_price'] . '€' . "</li>
          </ul>
        </div>
      </a>
    </div>";
  }
  echo "</div>";
?>

  <?php include('footer.php') ?>
  <?php include('script.php') ?>
