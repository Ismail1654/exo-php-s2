<?php

function my_strrev($str) {
    // On récupère la longueur de la chaîne
    $length = strlen($str);

    // On crée une nouvelle chaîne vide qui contiendra le résultat
    $result = "";

    // On parcourt la chaîne à l'envers
    $i = $length - 1;
    while ($i >= 0) {
        // On ajoute chaque caractère à la nouvelle chaîne
        $result = $result . $str[$i];
        $i = $i - 1;
    }

    // On renvoie la chaîne inversée
    return $result;
}
echo my_strrev("Bonjour le monde !");

