<h1>Exercice 5</h1>

<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.

Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>

<h2>Résultat</h2>

<?php

// Tableau associatif qui contient le label/Clé(Nom) et sa valeur(Delubriac):
$tableauInfos = [
    "Nom" => "Delubriac",
    "Prénom" => "Antoine",
    "Ville" => "Strasbourg"
];

// Création d'une fonction qui va parcourir chaque élement du tableau : 
function creationFormulaire($tableauAAfficher) {
    echo "<form>"; // Ici on ouvre le tableau 
    foreach($tableauAAfficher as $cle => $valeur) {
            echo "
            <label for='$cle'>$cle</label><br> 
            <input type='text' value='$valeur'><br>";        
        }
        echo "</form>";
}

// Création du tableau : 
creationFormulaire($tableauInfos);

?>

<!-- Création formulaire en html -->

<!-- <body>
    <h2>Formulaire</h2>
    <form>
        <label for="fname">Nom :</label><br>
        <input type="text" value="monNom"><br>
        <label for="lname">Prénom :</label><br>
        <input type="text" value="monPrenom"><br>
        <label for="ville">Ville</label><br>
        <input type="text" value="maVille">
    </form>
</body>
-->