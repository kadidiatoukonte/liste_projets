// On gère l'affichage du menu responsive pour les écrans inférieurs ou égaux à medium (<992px)

$(".navbar-responsive").toggle();



$(".menu").click(function () {

  $(".navbar-responsive").toggle("slow");

});

//Incrementation du panier
function clic() {
compteurClics++;
document.getElementById("header").textContent = compteurClics;
}
var compteurClics = 0;
document.getElementById("achat").addEventListener("click", clic);
