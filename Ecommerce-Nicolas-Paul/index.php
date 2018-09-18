<?php
//connenction bdd//
require('config.php');

//Select all from table product//
$req = $bdd->query('SELECT id, name, price, picture FROM products ORDER BY id LIMIT 0,4');
$rep = $req->fetchAll();
//include header page//
    include 'header.php';
?>

    <section>
      <div class="container">
        <div class="row margin">


          <?php
          //display information for each article//
            foreach ($rep as $key => $value) {
              echo "<div class='mx-auto col-md-6 col-lg-2 d-flex flex-column text-center description-index border-FF4200 mx-2'>";
              echo "<a href='prod.php?index=$key'>";
              echo "<img class='Imgsheet size-img' src='img/" . $value['picture'] . "' alt='photo sneakers'><br />";
              echo $value['name'] . '<br />';
              echo $value['price'];
              echo "</a></div>";
            };


            $req->closeCursor();

          ?>
        </div>
      </div>
    </section>
  </div>
    <?php
    //including footer page//
      include 'footer.html';
    ?>
