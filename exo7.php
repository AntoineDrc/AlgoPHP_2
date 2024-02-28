<h1>Exercice 7</h1>

<p>
Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat</h2>

<?php

// Création d'un tableau numérique avec les cases à cocher : 
$tableauChoix = [
    "Choix 1",
    "Choix 2",
    "Choix 3"
];

// Structure du menu : 
echo "
<fieldset>
    <legend>Faites votre choix</legend>";

// Création d'une fonction qui va afficher les choix : 
function checkbox($choix) {
    foreach($choix as $cle) {
        echo "
        <div>
        <input type='checkbox' id='choix' name='choix'>
        <label for='choix'>$cle</label>
    </div>";
    }
}
"</fieldset> -->";

// Afficher le menu avec les choix : 
checkbox($tableauChoix);

// Création de la structure en html :
?>

<!-- <fieldset>
    <legend>Faites votre choix</legend>

    <div>
        <input type='checkbox' id='choix' name='choix'>
        <label for='choix'></label>
    </div>
</fieldset> -->