<?php include("header.php"); ?>

<?php include("data.php"); ?>

<div class="container-fluid my-5">
  <div class="row">

    <?php foreach($products as $key => $value){ ?>
      <div class="product col-md-3 col-sm-6">
        <a class="link_product" href="product.php?index=<?php echo $key; ?>">
          <img class="img-fluid" width="250" src="<?php echo $value['src'] ?>" alt="basketdunk">
          <div class="spec">
            <p><?php echo $value['name'] ?></p>
            <p class="price"><?php echo $value['price'] ?></p>
        </div>
        </a>
      </div>
    </a>
      <?php

      }

      ?>

  </div>
</div>



<?php include("footer.php"); ?>
