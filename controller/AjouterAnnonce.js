function verif()
{
var error='';
var titre=document.f1.titre.value.toUpperCase();
var description=document.f1.description.value.toUpperCase();
var categorie=document.f1.categorie.value;
var image=document.f1.chooseFile.value;
var prix=document.f1.prix.value;
var emplacement=document.f1.emplacement.value;
var numtel=document.f1.numtel.value;


console.log('fff'+titre);
  

    
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

    if (emplacement=="Sélectionner"){
        error="veuillez choisir votre emplacement";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }


    if ( (numtel.length!=8 ) || (numtel=="") || (isNaN(numtel)) ){
        error="veuillez renseigner un numéro de téléphone correcte";
        document.getElementById("erreur").innerHTML = error;
        return false;
    
      
    }

    return true;

}
