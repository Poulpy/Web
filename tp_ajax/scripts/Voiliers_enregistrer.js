window.onload = event_handler;

function event_handler() {
    document.getElementById("enregistrer").onclick = requeteEnregistrement;
}


function requeteEnregistrement() {
    xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = callback_requeteEnregistrement;

    xhr.open('POST', 'php/Voiliers_enregistrer.php');
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // we initialize the request
    tabInput = document.getElementsByTagName("input");
    var requete = 'nom=' + tabInput[0].value;
    requete += '&classe=' + tabInput[1].value;
    requete += '&annee=' + tabInput[2].value;
    requete += '&adresse=' + tabInput[3].value;
    requete += '&architecte=' + tabInput[4].value;
    requete += '&longueur=' + tabInput[5].value;
    requete += '&nomskipper=' + tabInput[6].value;
    requete += '&description=' + tabInput[7].value;
    
    xhr.send(requete);
}

function callback_requeteEnregistrement() {
    tabInput = document.getElementsByTagName("input");

    if (xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr.responseText);
        var requete = 'nom=' + tabInput[0].value;
        requete += '&classe=' + tabInput[1].value;
        requete += '&annee=' + tabInput[2].value;
        requete += '&adresse=' + tabInput[3].value;
        requete += '&architecte=' + tabInput[4].value;
        requete += '&longueur=' + tabInput[5].value;
        requete += '&nomskipper=' + tabInput[6].value;
        requete += '&description=' + tabInput[7].value;
        document.getElementById("selection").appendChild(document.createTextNode(requete));
    }
}
