function verif()
{
var error='';
var nom=document.f2.nom.value.toUpperCase();
var prenom=document.f2.prenom.value.toUpperCase();
var email=document.f2.email.value;
var mdp=document.f2.mdp.value;
var nvmdp=document.f2.nvmdp.value;
var nvmdp2=document.f2.nvmdp2.value;
var date=document.f2.datenaissance.value;
var numtel=document.f2.numtel.value;
var adresse=document.f2.adresse.value;
var ch; 
var maxdate="2005/01/02";
var xnom=true;
var xprenom=true;  
  
var dates = {
    convert:function(d) {
      
        return (
            d.constructor === Date ? d :
            d.constructor === Array ? new Date(d[0],d[1],d[2]) :
            d.constructor === Number ? new Date(d) :
            d.constructor === String ? new Date(d) :
            typeof d === "object" ? new Date(d.year,d.month,d.date) :
            NaN
        );
    },
    compare:function(a,b) {
      
        return (
            isFinite(a=this.convert(a).valueOf()) &&
            isFinite(b=this.convert(b).valueOf()) ?
            (a>b)-(a<b) :
            NaN
        );
    }
}
    for ( var i = 0; i < nom.length; i++ )
    {
        ch = nom.charAt(i);
            if ( (ch < 'A') || (ch > 'Z')) {            
            xnom= false;
            }
    }
  
    for ( var i = 0; i < prenom.length; i++ )
    {
        ch = prenom.charAt(i);
        if ( (ch < 'A') || (ch > 'Z')) {            
        xprenom= false;
        }
    }
    
    if ( (nom=="")||(!xnom) ){
        error="veuillez renseigner un nom correcte ";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
    }

    if( (prenom=="")||(!xprenom) ){
        error="veuillez renseigner un prenom correcte";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
    }
    
    if ( (email=="") || (!(email.includes("@"))) || (!(email.includes("."))) ) {
        error="veuillez renseigner un E-mail correcte";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
    }
  

    if(mdp==""){
        error="veuillez renseigner votre mot de passe";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
       
    }

    if(nvmdp!=nvmdp2){
        error="les nouveaux mots de passe ne correspondent pas";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
       
    }

    if(date==""){
        error="veuillez renseigner une date de naissance";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
        
    }
    if (dates.compare(maxdate,date)==-1){
        error="Vous n'avez pas l'âge minimum requis pour vous inscrire";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
    }
   


    if ( (numtel.length!=8 ) || (numtel=="") || (isNaN(numtel)) ){
        error="veuillez renseigner un numéro de téléphone correcte";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
    
      
    }

    if(adresse==""){
        error="veuillez renseigner une adresse";
        document.getElementById("erreurmodif").innerHTML = error;
        return false;
    
      
    }

    return true;

}