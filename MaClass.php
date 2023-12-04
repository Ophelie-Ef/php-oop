<?php

class MaClass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = 37;
    public $prenom;
    public const PI = 3.14; //les constantes se déclarent entièrement en majuscule
    public int $rayon;

    private $_attributPrivate; //par convention on commence un attribut privé par un underscore _
    private $_nom = 'Michel PLIK';

    public function displayMethode($value) // méthode
    {
        //echo 'Je suis une méthode.'.'<br>';
        // echo 'Je suis une méthode qui affiche '.$value;
        return $this->prenom . ' aime la couleur ' . $this->couleur;
    }

    public function calculCercleAire()
    {
        return self::PI * $this->rayon * $this->rayon;
    }

    public function calculAireDeux($ray)
    {
        return self::PI*$ray*$ray;
    }
}

$obj = new MaClass(); //creation d'un objet

// echo 'Couleur : ' . $obj->couleur . '<br>';
// echo 'Age :' . $obj->age . '<br>';

//echo 'Nom :'.$obj->_nom;      // Ne peux fonctionner : on ne peux acceder à un attribut privé en dehors de sa classe
// $obj->displayMethode("Coucou !");

$obj->prenom = 'Bill'; //Je renseigne le prénom à l'exterieur de la classe avec mon objet

// echo $obj->displayMethode("osef");

$obj->rayon = 5;
echo $obj->calculCercleAire().'<br>';

echo $obj->calculAireDeux(5);
