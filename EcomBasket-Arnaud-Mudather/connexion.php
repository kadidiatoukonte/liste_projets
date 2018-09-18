
<?php include('header.php') ?>

<form action="adminaccess.php" method="post" class="my-5 ">
  <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" placeholder="pseudo" value="pseudo" />
  <input type="password" name="pass" value="pass" />
  <input type="submit"name="valid" value="Send" />
</form>

<?php include('footer.php') ?>
