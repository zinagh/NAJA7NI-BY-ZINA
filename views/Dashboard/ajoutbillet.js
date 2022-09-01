function verif()
{
var error='';
var titre=document.f1.titre.value.toUpperCase();
var deslongue=document.f1.deslongue.value.toUpperCase();
var descourte=document.f1.descourte.value.toUpperCase();
var categorie=document.f1.categorie.value;
var image=document.f1.chooseFile.value;
var prix=document.f1.prix.value;





  

    
    if (titre==""){
        error="veuillez renseigner un titre ";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    if (descourte==""){
        error="veuillez renseigner une description courte";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }
    if (prix==""){
        error="veuillez renseigner un prix";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }
    if (deslongue==""){
        error="veuillez renseigner une description longue";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    if (categorie=="Sélectionner"){
        error="veuillez choisir une categorie";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    if (image==""){
        error="veuillez choisir une image";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    

    

    

    return true;

}
