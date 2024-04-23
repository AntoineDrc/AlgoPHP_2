<h1>Exercice 4</h1>

<p>
    A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l'URL de la page Wikipédia de la capitale adopte la forme :
    https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
</p>

<h2>Résulat</h2>

<?php

// Création d'un tableau associatif :  
$paysCapitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];

// Trier les clés par ordre alphabétique : 
ksort($paysCapitales);

// En tête du tableau : 
echo
"<table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien wiki</th>
            </tr>
        </thead>";

// Création d'une boucle qui parcourt les données du tableau : 
foreach ($paysCapitales as $pays => $capitales) {
    echo
    "
        <tr>
            <td>" . $pays . "</td>
            <td>" . $capitales . "</td>
            <td><a href='http://fr.wikipedia.org/wiki/$capitales' target='_blank' rel='noopener noreferrer'>Lien</a>
        </tr>
    ";
}

echo
"</table>";
