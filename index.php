<?php
// Afficher les nombres de 1 à 100
// Remplacer les multiples de 3 par Fizz
// Remplacer les multiples de 5 par Buzz
// Remplacer les multiples de 3 et 5 par FizzBuzz

for($nbr = 1; $nbr <= 100; $nbr++) {
    $text = '';
    if ($nbr % 3 === 0) {
       $text .= "fizz";
    }
    if ($nbr % 5 === 0) {
       $text .= "buzz";
    }
    // $affichage = ($text != "") ? $text : $nombre; // ternaire
    $affichage = $text ?: $nbr;
    echo "<p>$affichage</p>";
}
