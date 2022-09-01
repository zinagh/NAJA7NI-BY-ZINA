function verif()
{
var error='';
var nom=document.f1.nom.value.toUpperCase();
var prenom=document.f1.prenom.value.toUpperCase();
var email=document.f1.email.value;
var mdp=document.f1.mdp.value;
var mdp2=document.f1.mdp2.value;
var date=document.f1.datenaissance.value;
var numtel=document.f1.numtel.value;
var adresse=document.f1.adresse.value;
var ch1=document.f1.sexe[0].checked;
var ch2=document.f1.sexe[1].checked;
var ch3=document.f1.sexe[2].checked;
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
            if ( ( (ch < 'A') || (ch > 'Z') ) && (ch!=' ')) {            
            xnom= false;
            }
    }
  
    for ( var i = 0; i < prenom.length; i++ )
    {
        ch = prenom.charAt(i);
        if ( ( (ch < 'A') || (ch > 'Z') ) && (ch!=' ')) {            
        xprenom= false;
        }
    }
    
    if ( (nom=="")||(!xnom) ){
        error="veuillez renseigner un nom correcte ";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    if( (prenom=="")||(!xprenom) ){
        error="veuillez renseigner un prenom correcte";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }
    
    if ( (email=="") || (!(email.includes("@"))) || (!(email.includes("."))) ) {
        error="veuillez renseigner un E-mail correcte";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }
  

    if(mdp==""){
        error="veuillez renseigner un mot de passe";
        document.getElementById("erreur").innerHTML = error;
        return false;
       
    }

    if (mdp2==""){
        error="veuillez confirmer votre mot de passe";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }

    if(mdp!=mdp2){
        error="les mots de passe ne correspondent pas";
        document.getElementById("erreur").innerHTML = error;
        return false;
       
    }

    if(date==""){
        error="veuillez renseigner une date de naissance";
        document.getElementById("erreur").innerHTML = error;
        return false;
        
    }
    if (dates.compare(maxdate,date)==-1){
        error="Vous n'avez pas l'âge minimum requis pour vous inscrire";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }
   
    if ( (!ch1) && (!ch2) && (!ch3) ) { 
        error="veuillez selectionner votre sexe";
        document.getElementById("erreur").innerHTML = error;
        return false;
    }


    if ( (numtel.length!=8 ) || (numtel=="") || (isNaN(numtel)) ){
        error="veuillez renseigner un numéro de téléphone correcte";
        document.getElementById("erreur").innerHTML = error;
        return false;
    
      
    }

    if(adresse==""){
        error="veuillez renseigner une adresse";
        document.getElementById("erreur").innerHTML = error;
        return false;
    
      
    }

    return true;

}

   


/*function verif1()
{
var error='';
    
    
    
    
    
    
    
        for ( var i = 0; i < nom.value.length; i++ )
        {
            ch = nom.value.charAt(i);
            if (   
            !(ch >= 'A' && ch <= 'Z') &&      
            !(ch >= 'a' && ch <= 'z'))             
            x= false;
        }
      
    
    if(x==false){
        error="Veuillez saisir un nom alphabetique";
    }
    
    
    for ( var i = 0; i < prenom.value.length; i++ )
    {
        ch = prenom.value.charAt(i);
        if (   
        !(ch >= 'A' && ch <= 'Z') &&      
        !(ch >= 'a' && ch <= 'z'))             
        x= false;
    }
    
    
    if(x==false){
    error="Veuillez saisir un prénom alphabetique";
    }
    
    
    
    
    
    if(!adresse.value){
        error="veuillez renseigner une adresse";
    
      
    }
    if(!numtel.value){
        error="veuillez renseigner un numéro de téléphone";
      
        
    }
    
   
    
    if(!date.value){
        error="veuillez renseigner une date de naissance";
        
    }
    if(!mdp2.value){
        error="veuillez ressaisir le mot de passe";
        
    }
    if(!mdp.value){
        error="veuillez renseigner un mot de passe";
       
    }
    if(!email.value){
        error="veuillez renseigner un E-mail";
    }
    if(!prenom.value){
        error="veuillez renseigner un prenom";
    }
    if(!nom.value){
        error="veuillez renseigner un nom";
    }
    if(numtel.value.length!=8 ){
        error="veuillez renseigner un numéro de téléphone correcte";
    
      
    }
    if(isNaN(numtel.value)){
        error="veuillez renseigner un numéro de téléphone correcte";
    }
    if(mdp.value!=mdp2.value){
        error="les mots de passe ne se correspondent pas";
    
    }
    if(error){
        
       
    }else {
        alert('inscription réussie');
    }


} */






