<h1>Exercice 14</h1>

<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
</p>

<h2>Résultat</h2>

<?php

// Création d'une classe voiture 
class Voiture {
    private $marque;
    private $modele;
    
// Constructeur de la classe Voiture, appelé lors de la création d'un nouvel objet :
public function __construct($marque, $modele) {
    $this->marque = $marque;
    $this->modele = $modele;
    }

// Création d'une méthode pour récuperer les informations
public function getInfo() {
    echo "<br>Nom et modèle du véhicule : " . $this->marque . " " . $this->modele;
    }
}

// Instanciation d'objet dans la classe 
$v1 = new Voiture("Peugeot","408");


// ***********************************************************************************************************************************


// Création d'une classe voiture éléctrique AVEC L'HERITAGE !!!
class VoitureElec extends Voiture {
    private $autonomie;

// Constructeur de la classe Voiture, appelé lors de la création d'un nouvel objet :
public function __construct($marque, $modele, $autonomie) {
    parent::__construct($marque,$modele);
    $this->autonomie = $autonomie;
    }

// Création d'une méthode pour récuperer les informations
public function getInfo() {
    parent::getInfo();
    echo " ";
    echo $this->autonomie;
    }
}

// Instanciation d'objet dans la classe 
$ve1 = new VoitureElec("BMW","I3",100);

// Appel et affichage de la méthode getInfo
$v1->getInfo();
echo "<br>";
$ve1->getInfo();
