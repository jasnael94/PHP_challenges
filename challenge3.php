<?php 
//La biographie de Robert Stevenson 
$books["Heather Ale"]='1890';
$books["My Shadow"]='1885';
$books["The Swing"]='1991';

asort($books);

 foreach ($books as $title => $year){ //application de la boucle
    echo $year . "-" . $title ."\n" ;
 }
?>