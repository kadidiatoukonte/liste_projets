
<?php include('header.php');?>

 <main class="contact">

   <section>
     <h1>Donnez nous votre avis !</h1>
     <form action="result.php" class="form-group" method="post">
       <label for="email">E-mail</label>
       <input type="email" name="email" class="form-control" value="" required>

       <label for="content">Message</label>
       <textarea name="content" class="form-control" required></textarea>

       <input type="submit" class="btn" name="envoyer" value="Envoyer">
     </form>
   </section>

 </main>

<?php include('footer.php'); ?>
