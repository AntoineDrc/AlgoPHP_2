<h1>Exercice 13</h1>

<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un 
véhicule. 
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :
</p>

<h2>Résultat</h2>

<?php

// Création d'une classe Voiture
class Voiture {
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    
    // Constructeur de la classe Voiture, appelé lors de la création d'un nouvel objet :
    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbportes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
    }

    // Création d'une méthode pour démarrer
    public function demarrer() {

    }

    // Création d'une méthode pour accelerer
    public function accelerer() {

    }

    // Création d'une méthode pour stopper
    public function stopper() {

    }
}

// Instanciation d'objet
$v1 = 