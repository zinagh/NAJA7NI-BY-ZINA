function verif()
{
var error='';
var titre=document.f1.titre.value.toUpperCase();
var description=document.f1.description.value.toUpperCase();
var categorie=document.f1.categorie.value;
var image=document.f1.chooseFile.value;
var prix=document.f1.prix.value;




  

    
    if (titre==""){
        error="veuillez renseigner un titre ";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    if (description==""){
        error="veuillez renseigner une description ";
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

    if (prix==""){
        error="veuillez renseigner un prix";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }



    return true;

}
