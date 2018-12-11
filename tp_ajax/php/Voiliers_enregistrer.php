<?php
if (isset($_POST['nom']))
{
    if (!empty($_POST['nom']))
    {
        $fname = "../Voiliers.xml";
        echo $_POST['nom'];
        if (!file_exists($fname))
        {
            $racine = new SimpleXMLElement("<voiliers></voiliers>");
        }
        else
        {
            $racine = simplexml_load_file($fname);
        }
        $voilier = $racine->addChild("voilier");
        $voilier->addAttribute("classe", $_POST['classe']);
        $voilier->addAttribute("annee", $_POST['annee']);
        $voilier->addChild("nom", $_POST['nom']);
        $voilier->addChild("architecte", $_POST['architecte']);
        $photo = $voilier->addChild("photo");
        $photo->addAttribute("adresse", $_POST['adresse']);
       
        
        $skipper = $voilier->addChild("skipper");
        $skipper->addChild("nom_skipper", $_POST['nomskipper']);
        $skipper->addChild("texte", $_POST['description']);
        

        
        $nfile = fopen($fname, "w");
        
        
        fwrite($nfile, $racine->asXML());
        fclose($nfile);
    }
}
?>