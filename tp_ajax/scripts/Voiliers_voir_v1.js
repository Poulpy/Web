window.onload = initPage;
     
function initPage() {
    document.getElementById("choix").onchange = afficheSelection;
   // element avec id "choix", qui change, affiche la selection
}
function afficheSelection () {
	indice = document.getElementById("choix").selectedIndex;
	nomVoilier = document.getElementById("choix").value;
    // on prend le nom du voilier en fonction du choix
	document.getElementById("selection").appendChild(document.createTextNode(indice + 1 + " - " + nomVoilier));
} //afficheSelection ()
