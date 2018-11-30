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

            elt.appendChild(noeudTexte);
            div.appendChild(elt);
        }
    }
}

function afficheSelection () {
    // we eliminate the children => erase/clear
    while (n = document.getElementById("selection").firstChild)
        document.getElementById("selection").removeChild(n);

    // we take the index of the user's choice
	indice = document.getElementById("choix").selectedIndex;
    // we take the name of the sailboat
	nomVoilier = document.getElementById("choix").value;

    // we create a table to display the informations
    table = document.createElement("table");
    table.setAttribute('border', 1);
    table.setAttribute('width', 400);

    // we take the sailboat in the file depending on the index/position
    voilier = xhr.responseXML.getElementsByTagName("voilier")[indice];
    // we take the adress of the image
    adresse = voilier.getElementsByTagName("photo")[0].getAttribute("adresse");
    image = document.createElement("img");
    image.setAttribute('src', adresse);
    image.setAttribute('width', 100);

    // first row : image ...
    row = document.createElement("tr");
    cell = document.createElement("td");
    cell.setAttribute('rowspan', 4);// to display on 4 rows
    cell.append(image);
    row.appendChild(cell);
    // ... and name of sailboat
    cell = document.createElement("td");
    cell.append(nomVoilier);
    row.appendChild(cell);
    table.appendChild(row);

    // second row : class
    row = document.createElement("tr");
    cell = document.createElement("td");
    cell.append("Classe : " + voilier.getAttribute("classe"));
    row.appendChild(cell);
    table.appendChild(row);

    // third row : mise à l'eau
    row = document.createElement("tr");
    cell = document.createElement("td");
    cell.append("Mise à l'eau : " + voilier.getAttribute("annee"));
    row.appendChild(cell);
    table.appendChild(row);

    // fourth row : architect
    row = document.createElement("tr");
    cell = document.createElement("td");
    architecte = voilier.getElementsByTagName("architecte")[0].firstChild.nodeValue;
    cell.append("Architecte : " + architecte);
    row.appendChild(cell);
    table.appendChild(row);

    // fifth row : text
    row = document.createElement("tr");
    cell = document.createElement("td");
    text = voilier.getElementsByTagName("skipper")[0];
    text = text.getElementsByTagName("texte")[0].firstChild;
    nestedText = new String();
    while (text != null) {
        if (text.nodeType == 3)
            nestedText += text.nodeValue;
        else
            nestedText += text.firstChild.nodeValue;
        text = text.nextSibling;
    }
    cell.append(nestedText);
    cell.setAttribute('colspan', 2);// the text takes 2 columns
    row.appendChild(cell);
    table.appendChild(row);

    // we insert the table
    document.getElementById("selection").appendChild(table);

} //afficheSelection ()
