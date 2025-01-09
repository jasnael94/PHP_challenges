<?php
$firstname = ($_POST['user_firstname']) ;
$name = ($_POST['user_name']);
$sujet = ($_POST['subject']);
$email = ($_POST['user_email']);
$téléphone = ($_POST['user_phone']);
$message = ($_POST['message']);



echo("Merci $prenom $name de nous avoir contacté à propos de $sujet.

Un de nos conseiller vous contactera soit à l'adresse $email ou par téléphone au $téléphone dans les plus brefs délais pour traiter votre demande : 

'$message'") ; 

?>