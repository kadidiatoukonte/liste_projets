<?php include('header.php') ?>


<form action="result.php" method="post" enctype="multipart/form-data" class="my-5">

                          <p>Veuillez taper votre prénom :</p>
                            <input type="text" name="firstname" />

                          <p>Veuillez taper votre nom :</p>
                            <input type="text" name="lastname" />

                            <p>Veuillez taper votre email :</p>
                              <input type="text" name="email" />

                            <p>Veuillez saisir votre message :</p>
                              <textarea type="text" name="mess" /></textarea>

                              <p>Formulaire d'envoi de fichier :</p>
                                <input type="submit"name="valid" value="Envoyer le formulaire" />
             </form>

  <?php include('footer.php') ?>
