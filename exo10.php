<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).
</p>

<h2>Résultat</h2>

<?php

// 1.Créer un "champ de texte" avec les données à entrer : "nom", "prénom", "mail", "ville"

// 2.Créer un "menu radio" renseignant sur le sexe : "homme", "femme"

// 3.Créer un "menu déroulant" renseignant sur la formation souhaitée : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet »

// 4.Créer un "bouton de validation" 





// 1.Créer un "champ de texte" avec les données à entrer : "nom", "prénom", "mail", "ville"

// Création d'un tableau numérique avec les valeurs à renseigner : 
$tableauInformation = [
    "Nom", 
    "Prenom",
    "E-mail",
    "Ville"
];

// Construction d'une fonction qui va parcourir chaque élement du tableau : 
function creationFormulaire($tableauAAfficher) {
    
// Ouverture du tableau
echo "<form>";
    
// Création de la boucle
    foreach($tableauAAfficher as $cle) {
        echo "
        <div>
            <label for='$cle'>$cle</label><br> 
            <input type='text' value= ><br>
        </div>";
    }
}

// Affichage du formulaire 
creationFormulaire($tableauInformation);




// 2.Créer un "menu radio" renseignant sur le sexe : "homme", "femme"

// Création d'un tableau numérique avec les donnés à afficher : 
$tableauSexe = [
    "Homme",
    "Femme",
];

// Ouverture du menu radio : 
echo
"<fieldset>
    <legend>Sexe :</legend>";

// Construction de la fonction menu radio
function menuRadio($tableauAAfficher) {
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
menuRadio($tableauSexe);

// Fermeture du menu radio : 
echo
"</fieldset>";


// 3.Créer un "menu déroulant" renseignant sur la formation souhaitée : « Développeur logiciel », « Designer web », « Intégrateur » ou « Chef de projet »

// Création d'un tableau numérique avec les métiers 
$tableauMetier = [
    "Développeur logiciel",
    "Designer web",
    "Integrateur", 
    "Chef de projet"
];

// Ouverture du menu :
echo
"<label for='Civilité'>Civilité</label>

<select name='Civilité' id='Civilité'>
    <option value=>--Choisir une option--</option>";

// Construction d'une fonction qui va ajouter les choix au menu déroulant : 
function menuDeroulant($tableauAAfficher) {
    foreach($tableauAAfficher as $valeur) {
        echo "
        <option value='$valeur'>$valeur</option>";
    }
    }
    
// Afficher le menu déroulant : 
menuDeroulant($tableauMetier);
    
// Fermeture du menu déroulant
"</select>";

// 4.Créer un "bouton de validation"

// Création du bouton submit
echo "
<input type='submit' value='Envoyer le formulaire' />";


// Fermeture du tableau
echo "</form>";










