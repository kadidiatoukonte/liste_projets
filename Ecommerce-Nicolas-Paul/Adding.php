<?php
require('config.php');
if ($_SESSION['isConnect'] = true)
{
	$_SESSION['isConnect'] = false;
}

$req = $bdd->query('SELECT * FROM users');
$rep = $req->fetchAll();

include 'header.php';

if(isset($_SESSION['isConnect']) OR $_SESSION['isConnect'] = false): ?>
<form class="text-center margin" method="post" action="Adding.php">
	<input type="text" name="identifiant"/>
	<input type="password" name="password"/>
	<button type="submit">se connecter</button>
</form>

<?php
endif;
if (isset($_POST['identifiant']) AND isset($_POST['password'])) {
		if ($_POST['identifiant'] == $rep[0]['name'] AND $_POST['password'] == $rep[0]['password'])
		{
			$_SESSION['isConnect'] = true; ?>
			<form class="col-6 offset-3 text-center" method="post" action="answer.php" style="margin-bottom:105px; margin-top:60px;">
			<label for="name">Indiquer le nom du produit.</label>
			<input type="text" name="name"/>
			<br />

			<label for="price">Indiquer le prix du produit.</label>
			<input type="text" name="price"/>
			<br />

			<label for="picture">Indiquer le nom de l'image.</label>
			<input type="text" name="picture"/>
			<br />


			<label for="size">Indiquer les pointures disponibles</label>
			<input type="text" name="size"/>
			<br />

			<label for="color">Indiquer les couleurs disponibles</label>
			<input type="text" name="color"/>
			<br />

			<label for="description">Décrire le produit</label>
			<br />
			<input type="text" name="description"></textarea>
			<br />

			<label for="disponibility">Indiquez la disponibilité ou non du produit.</label>
			<br />
			<select name="disponibility" size="1">
				<option>Oui
				<option>Non
			</select>
			<br />
			<button type="submit">Envoyer le formulaire</button>
		</form>
		<?php } else {
		echo "<p class='text-center'>Mot de passe éronné.</p>";
	}
} else{
	echo "<p class='text-center'>vous devez vous connecter afin de pouvoir ajouter des articles.</p>";
}

	include 'footer.html';
	?>
