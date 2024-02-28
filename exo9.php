<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>

<h2>Résultat</h2>

<?php

// Création d'un tableau numérique avec les donnés à afficher : 
$genre = [
    "Masculin",
    "Féminin",
    "Autre"
];

// Ouverture du menu radio : 
echo
"<fieldset>
    <legend>Selection du choix :</legend>";

// Construction de la fonction permettant d'afficher le choix à cocher : 
function afficherRadio($tableauAAfficher) {
    foreach($tableauAAfficher as $valeur) {
        echo "
    <div>
        <input type='radio' id='choix' name='choix'
            value='$valeur' checked /> 
            <label for='choix'>$valeur</label>
    </div>";
    }
}

// Affichage du menu radio : 
afficherRadio($genre);

// Fermeture du menu radio : 
echo
"</fieldset>"; // IMPORTANT : Le menu se ferme APRES l'appel de la fonction, sinon les choix seront EN DEHORS du tableau ^^


// Création du menu bouton radio html :
?>

<!-- <fieldset>
        <legend>Selection du choix :</legend>
    <div>
        <input type='radio' id='choix' name='choix'
            value= checked /> 
    </div>
</fieldset> -->
