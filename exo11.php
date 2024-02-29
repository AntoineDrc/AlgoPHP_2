<h1>Exercice</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>

<!-- 
    Affichage
vendredi 23 février 2018
 -->

<h2>Résulat</h2>

<?php

// Création de la date à formater 
$dateAFormater = "2018-02-23";

// Construction de la fonction pour convertir la date 
function formaterDateFr($dateAFormater) {

// Création d'un objet DateTime à partir de la date fournie
$objetDate = new DateTime($dateAFormater);

// Création d'un formateur de date dont le format est en français
$formateurDate = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

// Affichage de la date formatée en français
echo ucfirst($formateurDate->format($objetDate));
}

// Appel de la fonction pour afficher la date formatée en FR
formaterDateFr($dateAFormater);