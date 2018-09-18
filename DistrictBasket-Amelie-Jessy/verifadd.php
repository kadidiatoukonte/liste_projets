<?php session_start();?>
<?php include('config.php'); ?>
<?php
// Full secure
$title = addslashes(strip_tags($_POST["article_name"]));
$desc = addslashes(strip_tags($_POST["article_desc"]));
$price = addslashes(strip_tags($_POST["article_price"]));
$disposhoes = addslashes(strip_tags($_POST["disposhoes"]));
$image = $_FILES["url_img"]['name'];

// If for protect for validate
if ($disposhoes !== "" AND $title !== "" AND $desc !== "" AND $price !== "" AND $_FILES["url_img"]['name'] !== "") {
  $alltext = $bdd->prepare("INSERT INTO articles (article_name, article_desc, article_price, disposhoes) VALUES (:title, :descrip, :price, :disposhoes)");
  $alltext->execute(array(
    'title' => $title,
    'descrip' => $desc,
    'price' => $price,
    'disposhoes' => $disposhoes
  ));
  // Take the last id insert in table for put the image with same id
  $lastid = $bdd->lastInsertId();
  $alltext = $bdd->prepare("INSERT INTO image (url_img, article_id) VALUES (:image, :lastid)");
  $alltext->execute(array(
    'image' => 'img/' . $image,
    'lastid' => $lastid
  ));
  header('location: addproduct.php?id=7894561230');
} else {
  header('location: addproduct.php?id=7894561230');
}
?>
