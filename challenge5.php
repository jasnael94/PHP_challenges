<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)]; // Choisir une arme de manière aléatoire

// Initialiser l'arme de Stevenson
$stevensonWeapon = '';

if ($opponentWeapon == 'fists') {
    $stevensonWeapon = 'gun'; // Le pistolet bat le poing
} elseif ($opponentWeapon == 'whip') {
    $stevensonWeapon = 'fists'; // Le poing bat le fouet
} elseif ($opponentWeapon == 'gun') {
    $stevensonWeapon = 'whip'; // Le fouet bat le pistolet
} else {
    $stevensonWeapon = 'fists'; // Valeur par défaut
}

// Afficher les résultats
echo "Arme de l'adversaire : $opponentWeapon\n";
echo "Arme de Stevenson : $stevensonWeapon\n";
?>

