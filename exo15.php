<h1>Exercice 15</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p>

<!-- 
    Affichage
L’adresse elan@elan-formation.fr est une adresse e-mail valide

L’adresse contact@elan est une adresse e-mail invalide
 -->

<h2>Résultat</h2>

<?php

// Création de l'e-mail à vérifier 
$mail1 = "elan@elan-formation.fr";
$mail2 = "contact@elan";

// Utilisation d'une fonction pour vérifier si l'e-mail1 est valide
if (!filter_var($mail1, FILTER_VALIDATE_EMAIL)) {
    echo $mail1 . " : N'est pas valide";
    } else {
    echo $mail1 . " : Est une adresse valide";
}

echo "<br><br>"; // Saut de ligne

// Création d'une fonction pour vérifier si l'e-mail2 est valide
if (!filter_var($mail2, FILTER_VALIDATE_EMAIL)) {
    echo $mail2 . " : N'est pas une adresse valide";
    } else {
    echo $mail2 . " : Est une adresse valide";
}