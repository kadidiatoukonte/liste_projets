<?php include("header.php"); ?>

<?php include("data.php"); ?>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="img-product col-md-4">
                <img class="img-fluid" src="<?php echo $products[$_GET['index']]['src'] ?>">
            </div>

            <div class="spec-product col-md-4 m-auto">
                <p class="name"><?php echo $products[$_GET['index']]['name'];?></p>
                <p class="price"><?php echo $products[$_GET['index']]['price'];?></p>
                <p class="size">Size : <?php echo $products[$_GET['index']]['size'];?> </p>
                <p class="color">Color : <?php echo $products[$_GET['index']]['color'];?></p>
                <p class="stock">Stock : <?php echo $products[$_GET['index']]['stock'];?></p>
                <p class="sum">Summary : <?php echo $products[$_GET['index']]['summary'];?></p>
            </div>

        </div>
    </div>



<?php include("footer.php"); ?>
