<?php

class MaClass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = 37;
    public $nom;
    public $prenom;
    public const PI = 3.14; //les constantes se déclarent entièrement en majuscule
    public float|int $rayon;
    static string $varStatic = 'Je suis une variable statique.';

    // private $_attributPrivate; //par convention on commence un attribut privé par un underscore _
    // private $_nom = 'Michel PLIK';

    // public function __construct()
    // {
    //     echo 'Je suis une méthode "magique" ! <br>'; //un constructeur se lance toujours quand on instancie la classe
    // }

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

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

    public function calculAireDeux(float|int $ray): float|int
    {
        return self::PI * $ray * $ray;
    }

    static function staticFunc()
    {
        return 'Methode Statique affichant une variable statique : ' . self::$varStatic;
    }

    public function __destruct()
    {
        echo 'Je suis une methode magique de ' . __CLASS__ . '.<br>'; //detruct se lance dès qu'on a fini d'instancer la classe
    }
}

$obj = new MaClass($nom, $prenom); //creation d'un objet

// echo 'Couleur : ' . $obj->couleur . '<br>';
// echo 'Age :' . $obj->age . '<br>';

//echo 'Nom :'.$obj->_nom;      // Ne peux fonctionner : on ne peux acceder à un attribut privé en dehors de sa classe
// $obj->displayMethode("Coucou !");

$obj->prenom = 'Bill'; //Je renseigne le prénom à l'exterieur de la classe avec mon objet

// echo $obj->displayMethode("osef");

$obj->rayon = 5;
echo $obj->calculCercleAire() . '<br>';

echo $obj->calculAireDeux(3.5) . '<br>';

echo MaClass::$varStatic . '<br>';

echo MaClass::staticFunc() . '<br>';
