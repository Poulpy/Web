/*$(document).ready(initPage);
function initPage(){
    $("#choix").change(function(){
        $("#selection").text( $("#choix option:selected").index()+1 +
        " - " + $("#choix option:selected").text());
    });
}*/

$(document).ready(peupleSelect);
function peupleSelect(){
    // réaction à un changement de sélection sur l’élément select
    $("#choix").change(afficheVoilier);
    $.ajax({
        url: "Voiliers.xml",
        cache: false,
        dataType: "xml",
        // if we find the file
        success:  function(xml){
            // for each <nom> tag
            $(xml).find("nom").each(function() {
                option = $("<option />");
                option.append ($(this).text() );
                $("#choix").append(option);
            });
            afficheVoilier();
        },
        error: function(jqXHR,  textStatus , errorThrown){
            alert(jqXHR.status +"-"+ jqXHR.readyState +"-"
            + textStatus +"-"+ errorThrown);
        }
    });
}

function afficheVoilier() {   
    $.ajax({
        url: "Voiliers.xml",
        cache: false,
        dataType: "xml",
        // if we find the file
        success:  function(xml){
            index=$('#choix option:selected').index();
            $("#selection").text($(xml).find("nom").eq(index).text());
        },
        error: function(jqXHR,  textStatus , errorThrown){
            alert(jqXHR.status +"-"+ jqXHR.readyState +"-"
            + textStatus +"-"+ errorThrown);
        }
    });
};