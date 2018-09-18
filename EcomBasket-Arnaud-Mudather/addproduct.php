  <?php include("header.php"); ?>


        <form action="toto.php" method="post" enctype="multipart/form-data" class="my-5">

                          <p>Veuillez taper le nom du produit:</p>
                            <input type="text" name="name" />

                          <p>Veuillez taper le prix :</p>
                            <input type="number" name="price" />

                            <p>Veuillez taper la taille:</p>
                              <input type="number" name="size" />

                            <p>Veuillez rentrer la couleur:</p>
                              <input type="text" name="color" />

                            <p>Veuillez décrire le produit :</p>
                              <input type="text" name="summary" />

                            <p>Valider :</p>
                              <input type="submit" name="valid" value="Envoyer le formulaire" />
             </form>

             <?php include("footer.php"); ?>
