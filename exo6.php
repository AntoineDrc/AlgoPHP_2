<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>

<?php

// Création d'un tableau numérique avec les donnés à affciher : 
$tableauCivilite = [
    "Madame",
    "Monsieur",
    "Mademoiselle"
];

// Structure du menu :
echo
"<label for='Civilité'>Civilité</label>

<select name='Civilité' id='Civilité'>
    <option value=>--Choisir une option--</option>";
// Création d'une fonction qui va ajouter les choix au menu déroulant : 
function menuDeroulant($tableauAAfficher) {
foreach($tableauAAfficher as $valeur) {
    echo "
    <option value='$valeur'>$valeur</option>";
}
}
"</select>";

// Afficher le menu déroulant : 
menuDeroulant($tableauCivilite);


// Création du menu déroulant html :
?>

<!-- <label for='Civilité'>Civilité</label>

<select name='Civilité' id='Civilité'>
    <option value="">--Choisir une option--</option>

        <option value='Monsieur'>Monsieur</option>
        <option value='Madame'>Madame</option>
        <option value='Mademoiselle'>Mademoiselle</option>
</select> -->