//Page ajout.html
function verif(){
 if(!isNumInscription()){
   alert('Le numero de inscription doit etre compose de des chifres et de largeur maximal de 6 chifres');
   return false;
 }
 
 if(!isNomCommenceParMaj()){
   alert('Nom commence obligatorement par une lettre en majuscule.');
   return false;
 }
 
  if(!isValidPrenom()){
   alert('Prenom doit etre non vide et composé uniquement par des lettre.');
   return false;
 }

 if(!isValidEmail()){
   alert('Email doit contenir @ et .');
   return false;
 }
 
  if(!isValidSex()){
   alert('Sexe non choisir');
   return false;
 }
 
  if(!isValidSection()){
   alert('Choisr un section');
   return false;
 }
 
   if(!isValidCommentaire()){
   alert('Commentaire est requis');
   return false;
 }
 
return true;
}

function isNumInscription(){

 if(isNaN(f.T1.value)){
   return false;
 }
 
  if((f.T1.value + "").length !=6){
   return false;
 }
 return true;
}


function isNomCommenceParMaj(){
  nom = f.T2.value+"";//Converting To string in case of first letter is not a number
  if(nom.charAt(0).toUpperCase() != nom.charAt(0)){
	  return false;
  }
  
  return true;
}

function isValidPrenom(){
  prenom = f.T3.value;
  prenom = prenom.toUpperCase();
  isValidPrenom = true;
  if(prenom == ""){
  	return false;
  }
 for(chr = 0;chr < prenom.length;chr++){
    if(prenom.charAt(chr) < 'A' || prenom.charAt(chr) > 'Z'){
      isValidPrenom = false;
    }
    
 }
 

return isValidPrenom ;
  
}

function isValidEmail(){
 email = f.T4.value;

 if(email.indexOf('.') == -1 || email.indexOf('@') == -1 ){
   return false;
 }
 
 return true;

}


function isValidSex(){

 
 if(!f.R1[0].checked && !f.R1[1].checked) {
 
   return false;
 }
 return true;

}


function isValidSection(){
  if(f.D1.value == 'Section'){
    return false;
  }
  return true;

}


function isValidCommentaire(){
 
   if(f.S1.value == ""){
     return false;
   }
  return true;

}
//Page supprimer.html

function verif2(){

 if(!isNumInscription()){
   alert('Le numero de inscription doit etre compose de des chifres et de largeur maximal de 6 chifres');
   return false;
 }
 
 return true;
}


