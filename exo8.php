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
$url = '<img src="https://my.mobirise.com/data/userpic/764.jpg" alt="Image chien">';

// Création d'une fonction pour ouvrir l'image 4 fois : 
function repeterImage($url, $nb) {
    for($i=0; $i < $nb; $i++) {
        echo $url;
    }
}

repeterImage($url, 4);


