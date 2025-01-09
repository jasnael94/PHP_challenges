<?php 
//La biographie de Robert Stevenson 
$books["Heather Ale"]='1890';
$books["My Shadow"]='1885';      /*titre est la clé et année valeur  */
$books["The Swing"]='1991';

asort($books); /*  fonction pour trier la variable en ordre croissant */

 foreach ($books as $title => $year){ //application de la boucle
    echo $year . "-" . $title ."\n" ;
 }
?>