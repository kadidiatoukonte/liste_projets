<?php require("config.php"); ?>
<?php
// Take the table articles and only take the id same as product (url)
$shoestable = $bdd->prepare('SELECT * FROM articles WHERE id = :idverif');
$shoestable->execute(array(
  'idverif' => $_GET['product']
));
$shoestable = $shoestable->fetchAll();
// Take the table image and only take the article_id (same id as shoestable id) compare with product (url)
$shoesimg = $bdd->prepare('SELECT * FROM image WHERE article_id = :idverifimg');
$shoesimg->execute(array(
  'idverifimg' => $_GET['product']
));
$shoesimg = $shoesimg->fetchAll();
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title><?php echo $shoestable[0]['article_name']; ?> | DistricBasket</title>
  <meta name="description" content="<?php echo $shoestable[0]['article_desc']; ?>">

  <?php
  include("header.php");
  ?>
  <?php

      echo "<div class='container containerfordetail pt-5'>
          <div class='row pt-5'>
              <div class='forimg col-10 col-sm-6 col-md-6 col-lg-6 mx-auto'>
                <img class='sizeimg' alt='Image du produits détailler' src='" . $shoesimg[0]['url_img'] . "'>
              </div>
              <div class='desc pl-3 col-10 col-sm-6 col-md-6 col-lg-6 mx-auto'>
                <h1>" . $shoestable[0]['article_name'] . "</h1>
                <p>" . $shoestable[0]['article_desc'] . "</p>
                <p>Prix: " . $shoestable[0]['article_price'] . '€' . "</p>
                <p>" . $shoestable[0]['disposhoes'] . "</p>
              </div>
          </div>
        </div>";

?>

  <?php include("footer.php"); ?>
  <?php include('script.php') ?>
