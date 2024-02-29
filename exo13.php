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
public function __construct($marque, $modele, $nbPortes,) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbPorte = $nbPortes;
    $this->vitesseActuelle = 0;
    $this->etatDuMoteur = false;
    }

// Création d'une méthode pour démarrer
    public function demarrer() {
        $this->etatDuMoteur = true;
    echo "Le véhicule " . $this->marque . " " . $this->modele . " " . "démarre<br>";
    }

// Création d'une méthode pour accelerer
    public function accelerer($vitesse) {
    if($this->etatDuMoteur) {
        $this->vitesseActuelle =+ $vitesse;
        echo "Le véhicule " . $this->marque . " " . $this->modele . " accélère de " . $this->vitesseActuelle . " km / h<br>";
    } else {
        echo "Le véhicule " . $this->marque . " " . $this->modele . " veut accélèrer de " . $vitesse . "<br>";
        echo "Pour accélèrer, il faut démarrer le véhicule " . $this->marque . " " . $this->modele . " !<br>";
    }
}


// Création d'une méthode pour stopper
public function stopper() {
    $this->vitesseActuelle = 0;
    $this->etatDuMoteur = false;
    echo "Le véhicule " . $this->marque . " " . $this->modele . " est stoppé<br>";
}

// Création d'une méthode qui va nous donner la vitesse
public function getVitesse() {
    echo "La vitesse du véhicule " . $this->marque . " " . $this->modele . " est de : " . $this->vitesseActuelle . " km / h<br>";
}

// Création d'une méthode pour récuperer les informations
public function getInfo() {
    echo "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele . "<br>";
    echo "Nombre de portes : " . $this->nbPorte . "<br>";
    if($this->etatDuMoteur) {
        echo "Le véhicule " . $this->marque . " est" . " démarré<br>";
    } else {
        echo "Le véhicule " . $this->marque . " est" . " à l'arrêt<br>";
    }
    echo "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km / h<br>";
    }
}

// Instanciation d'objet
$v1 = new Voiture("Peugeot", "408", 5,);
$v2 = new Voiture("Citroën", "C4", 3,);

// Test appel fonction : 
$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->getVitesse();
$v2->getVitesse();
echo "<br>";
$v1->getInfo();
echo "<br>";
$v2->getInfo();