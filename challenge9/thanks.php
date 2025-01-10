<?php
$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['user_name'])) {            //Vérification du nom
        $errors[] = "Le nom est obligatoire";   
    }
    

    if (empty($_POST['user_firstname'])) {           //vérification du prénom
        $errors[] = "Le prénom est obligatoire";
    }
    

    if (empty($_POST['user_email'])) {               // vérification de l'email
        $errors[] = "L'email est obligatoire";
    } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {    // vérification du format de l'email
        $errors[] = "Le format de l'email n'est pas valide";
    }
    
 
    if (empty($_POST['user_phone'])) {                 //vérification du tel
        $errors[] = "Le téléphone est obligatoire";
    }

    if (empty($_POST['subject'])) {                     //vérification du sujet
        $errors[] = "Le sujet est obligatoire";
    }
    

    if (empty($_POST['message'])) {                      //vérification du message
        $errors[] = "Le message est obligatoire";
    }

    
    if (empty($errors)) {
        $prénom = ($_POST['user_firstname']);           //vérifications si il n y a pas d'érreur
        $nom = ($_POST['user_name']);
        $sujet = ($_POST['subject']);
        $email = ($_POST['user_email']);
        $téléphone = ($_POST['user_phone']);
        $message = ($_POST['message']);
        
        echo "Merci $prénom $nom de nous avoir contacté à propos de $sujet. 
              Un de nos conseillers vous contactera soit à l'adresse $email 
              ou par téléphone au $téléphone dans les plus brefs délais pour traiter votre demande : 
              $message";
    } else {
        echo "<h2>Tous les champs son obligatoires:</h2>";   // afficher les érreurs
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" .($error) . "</li>";
        }
        echo "</ul>";
        echo "<a href='challenge9-form.php'>Retour au formulaire</a>";
    }
} 
?>