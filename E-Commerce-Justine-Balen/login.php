<!doctype html>
<html class="no-js" lang="">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">

</head>
<body>
  <?php
  include("header.php");
  ?>
			<!-- //MOT DE PASS -->
			<div class="container">
				<form action="login_post.php" method="post" class="admin">
					<label for="name"  class="name">Name</label><br>
					<input type="name" name="name"> <br>
				  <label for="password"  class="password">Password</label> <br>
					<input type="password" name="password"> <br>
				  <input type="submit" value="valider">
				</form>
			</div>

      <?php
      include("footer.php");
      ?>

</body>
</html>
