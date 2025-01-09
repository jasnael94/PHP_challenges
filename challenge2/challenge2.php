<?php 
//Décodage des messages
$message1= "0@sn9sirppa@#?ia'jgtvryko1" ;
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj" ;
$message3="aopi?sgnirts@#?sedhtg+p9l!" ;

 //création d'une fonction qui va décoder les messages en suivant les consignes du challenge,

function decodage($message1){
$key=strlen($message1)/2 ;   //pour obtenir le chiffre clé= long(message)/2
$subStr= substr("$message1",5,$key); //sous-chaîne à partir du 6e caractère
$replaced= str_replace("@#?"," ", $subStr); //remplacement de caractère
$reversed= strrev($replaced) ; //inversement de caractère
echo $reversed ." " ;       // affichage du message décodé
}

decodage($message1);
decodage($message2); //application de la fonction "decodage" sur les messages
decodage($message3);

?>

