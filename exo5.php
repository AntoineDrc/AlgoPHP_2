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

function creationFormulaire($nom, $prenom, $ville) {

}

?>

<!-- Création formulaire en html -->

<body>
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





    