<h1>Exercice 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<!-- 
    Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE
 -->

<h2>Résultat</h2>

<?php

// Texte à convertir : 
$monText = "Mon texte en majuscule et en rouge";
$monText2 = "Mon texte 2";

// Création de la fonction pour mettre en majuscule :
function convertirMajRouge($text) {
    echo '<span style="color: red;">' . mb_strtoupper($text, "UTF-8") . "</span><br>";
}

convertirMajRouge($monText);