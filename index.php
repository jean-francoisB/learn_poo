<?php

class Robot
{
    private $nom;
    private $couleur;
    private $nbBras = 2;
    private $nbRoues;

    public function __construct($nouveau_nom, $nouvelle_couleur, $nouveau_nb_roues = 5)
    {
        $this->nom      = $nouveau_nom;
        $this->couleur  = $nouvelle_couleur;
        $this->nbRoues  = $nouveau_nb_roues;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nouveau_nom)
    {
        $this->nom = $nouveau_nom;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($nouvelle_couleur)
    {
        $this->couleur = $nouvelle_couleur;
    }
    
    public function getNbBras()
    {
        return $this->nbBras;
    }
    public function setNbBras($nouveau_nb_bras)
    {
        $this->nbBras = $nouveau_nb_bras;
    }

    public function getNbRoues()
    {
        return $this->nbRoues;
    }
    public function setNbRoues($nouveau_nb_roues)
    {
        $this->nbRoues = $nouveau_nb_roues;
    }

    public function initialiser()
    {
        echo "Initialisation en cours </br>";
    }
    public function faireLemenage()
    {
        echo "Cool c'est parti </br>";
    }
    public function parler()
    {
        echo "Bonjour, je m'appelle $this->nom </br>";
    }

    public function coder($langage)
    {
        echo "Faisons un peu de $langage";
    }
}

$robot0 = new Robot("Alexa","Noire",10);
$robot1 = new Robot("Siri","Rouge",15);
$robot2 = new Robot("Google","Bleue",23);
$robot3 = new Robot("ChatGPT","Blanche");

echo "Le robot0 a " . $robot0->getNbRoues() . " roues </br>";
echo "Le robot1 a " . $robot1->getNbRoues() . " roues </br>";
echo "Le robot2 a " . $robot2->getNbRoues() . " roues </br>";
echo "Le robot3 a " . $robot3->getNbRoues() . " roues </br>";
// $robot0->parler();
// $robot1->parler();
// $robot2->parler();


// $robot2->coder("kotlin");

// $robot0->setNom("ChatGPT");
// echo $robot0->getNom();

// $robot0->setNbRoues(4);
// $robot1->setNbRoues(6);
// $robot2->setNbRoues(8);

// $tab_robots = [
//     0 => $robot0,
//     1 => $robot1,
//     2 => $robot2,
// ];

// var_dump($tab_robots as $robot)
// {
//     $robot->setNbRoues(5);
// }

// var_dump($tab_robots);


