<?php
  //email and content retire html code
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);

  //if email not empty and here, display email
  if (isset($email) AND ! empty($email)) {
?>

  <p>E-mail : <?php echo $email; ?></p>

<?php

  } else {
    //if not return to contact.php
    header('Location: contact.php');
  }
  //if content not empty and here, display email
  if (isset($content) AND ! empty($content)) {
?>

  <p>Message: <?php echo $content; ?></p>

<?php
  } else {
    //if not return to contact.php
    header('Location: contact.php');
  }
 ?>
