<h1>Exercice 8</h1>
<p>
    Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.
    Exemple :
    repeterImage($url,4);
</p>

<h2>Résultat</h2>

<?php

// Création du lien à cliquer :
$urlADupliquer = '<img src="https://my.mobirise.com/data/userpic/764.jpg" alt="Image chien">';

// Construction d'une fonction pour ouvrir l'image 4 fois : 
function repeterImage($urlADupliquer, $nbDeFois)
{
    for ($i = 0; $i < $nbDeFois; $i++) {
        echo $urlADupliquer;
    }
}

repeterImage($urlADupliquer, 4);
