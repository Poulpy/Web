window.onload = initPage;
     
function initPage() {
    peupleChoix("Voiliers.xml");
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