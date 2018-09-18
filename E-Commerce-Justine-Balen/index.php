<?php

include("header.php");
?>
      <?php
      // Connection to the database
      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=basket_addict;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      // We recover the last 4 tickets
      $req = $bdd->query("SELECT * FROM product ORDER BY id DESC LIMIT 4");

      ?>
      <div class="container">
        <div class="row">
          <?php
          // The foreach loop for looping the products
          foreach ($req as $key => $value) { ?>
      <?php
            $reqimg = $bdd->prepare("SELECT * FROM source_img WHERE product_id = :idt");
            $reqimg->execute(array(
             'idt' => $value['id']
           ));
           $donne = $reqimg->fetchAll();
      ?>
                <div class="col-md-3">
                  <a href="product.php?index=<?php echo $value['id']; ?>" >
                    <img margin-top="100" width="100%" src="<?php echo $donne[0]['src']?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $value['name'];?></h4>
                        <p class="card-text"><?php echo $value['name'];?></p>
                        <p class="price"><?php echo $value['price'];?> €</p>
                    </div>
                  </a>
                </div>

              <?php
          }
           ?>
       </div>
      </div>

<?php
      $req->closeCursor();

      include('footer.php');
?>
