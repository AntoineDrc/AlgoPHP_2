<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :

$capitales = array 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays 
s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

</p>

<!-- 
    Affichage
Pays        Capitale
ALLEMAGNE   Berlin
FRANCE      Paris
ITALIE      Rome
USA         Washington
 -->
<h2>Résultat</h2>

<?php

// Création d'un tableau associatif :  
$paysCapitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];

// Trier les clés par ordre alphabétique : 
ksort($paysCapitales);

// En tête du tableau : 
echo 
"<table>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>
    </thead>";

// Création d'une boucle qui parcour les données du tableau : 
foreach ($paysCapitales as $pays => $capitales) {
    echo 
    "<tbody>
        <tr>
            <td>" . $pays . "</td>
            <td>" . $capitales . "</td>
        </tr>
    </tbody>";
}

echo 
"</table>";

// <table>
//     <tr>
//         <th>Pays</th>
//         <th>Capitale</th>
//     </tr>
//     <tr>
//         <td>France</td>
//         <td>Paris</td>
//     </tr>
//     <tr>
//         <td>aaa</td>
//         <td>aaa</td>
//     </tr>
//     <tr>
//         <td>aaa</td>
//         <td>aaa</td>
//     </tr>
// </table>
