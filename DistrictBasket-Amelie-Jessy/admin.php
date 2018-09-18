<?php
include("header.php");
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <title>Administration | DistricBasket</title>
    <meta name="description" content="Site de vente de chaussures de Sneakers (Basket de ville)">

    <?php include('header.php') ?>

<div class="row mw1200 col-12 mx-auto">
<h1 style="padding-top:90px">Page d'administration</h1>
        <div class="col-md-12 article-form mx-auto pb-3">
            <p>Authentification réussie </p>
        <form action="" method="post">
            <p>Ajouter un produit :</p>
            <label for="article_name" class="product-add"> Nom de l'article: </label><input type="text" name="article_name" />
            <label for="desc" class="product-add"> Description de l'article: </label><input type="text" name="desc" />
            <label for="size" class="product-add"> Taille de l'article: </label><input type="text" name="size" />
            <label for="color" class="product-add"> Couleur de l'article: </label><input type="text" name="color" />
            <input type="submit" value="Valider" />
        </form>

        </div>
    </div>

    <?php include('footer.php') ?>
    <?php include('script.php') ?>
