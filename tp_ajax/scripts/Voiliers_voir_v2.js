window.onload = initPage;
     
function initPage() {
    peupleChoix("Voiliers.xml");
    document.getElementById("choix").onchange = afficheSelection;
}

function peupleChoix(url) {
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = callback_peupleChoix;
    xhr.open("GET", url);
    xhr.send(null);
}

function callback_peupleChoix() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        tabNoms = xhr.responseXML.getElementsByTagName("nom");
        div = document.getElementById("choix");// we take the form

        for (i = 0; i != tabNoms.length; i++) {
            nomVoilier = tabNoms[i].firstChild.nodeValue;
        
            elt = document.createElement("option");
            noeudTexte = document.createTextNode(nomVoilier);
        
            elt.appendChild(noeudTexte);div.appendChild(elt);
        }
    }
}

function afficheSelection () {
    // we eliminate the children
    while (n = document.getElementById("selection").firstChild)
        document.getElementById("selection").removeChild(n);

	indice = document.getElementById("choix").selectedIndex;
	nomVoilier = document.getElementById("choix").value;
    // on prend le nom du voilier en fonction du choix
	document.getElementById("selection").appendChild(document.createTextNode(indice + 1 + " - " + nomVoilier));
    
    voilier = xhr.responseXML.getElementsByTagName("voilier")[indice];
    adresse = voilier.getElementsByTagName("photo")[0].getAttribute("adresse");
    image = document.createElement("img");
    image.setAttribute('src', adresse);
    document.getElementById("selection").appendChild(image);
    
} //afficheSelection ()
