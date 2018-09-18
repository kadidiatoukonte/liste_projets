<?php session_start(); ?>
<?php
 // Login to the database
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=basket_addict;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$name = addslashes(strip_tags($_POST['name']));
$price = (int) $_POST['price'];
$dispo = $_POST['dispo'];
$content = addslashes(strip_tags($_POST['content']));

// Inserting the message using a prepared query
if(!empty($name) AND !empty($price) AND  !empty($content) AND isset($_FILES['image']) AND $_FILES['image']['error'] == 0){

 $req = $bdd->prepare("INSERT INTO product (name, price, dispo, content) VALUES (:name, :price, :dispo, :content)");
 $req->execute(array(
   'name'=>$name,
   'price'=>$price,
   'dispo'=>$dispo,
   'content'=>$content
 ));

 $product_id = $bdd->lastInsertId();

   // Let's test if the file is not too big
 if ($_FILES['image']['size'] <= 1000000)

 {
   // Let's test if the extension is allowed

   $infosfichier = pathinfo($_FILES['image']['name']);

   $extension_upload = $infosfichier['extension'];

   $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

   if (in_array($extension_upload, $extensions_autorisees))

   {

     $image = $_FILES['image']['name'];
     $req = $bdd->prepare("INSERT INTO source_img (src, product_id ) VALUES ( :image, :product_id)");
     $req->execute(array(
       'image'=>$_FILES['image']['name'],
       'product_id'=>$product_id
     ));
   }
 }
 header('location:login_post.php');
}
 header('location:login_post.php');












  // header('location: index.php');
?>
