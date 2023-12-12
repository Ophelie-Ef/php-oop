<?php

class MaClass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = 37;
    public $prenom;
    public const PI = 3.14; //les constantes se déclarent entièrement en majuscule
    public float|int $rayon;
    static string $varStatic = 'Je suis une variable statique.';

    private $_attributPrivate; //par convention on commence un attribut privé par un underscore _
    private $_nom = 'Michel PLIK';

    protected string $varProtected = 'Je suis une variable protected';

    // public function __construct()
    // {
    //     echo 'Je suis une méthode "magique" ! <br>'; //un constructeur se lance toujours quand on instancie la classe
    // }

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

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    //     public function __destruct()
    //     {
    //         echo 'Je suis une methode magique de ' . __CLASS__ . '.<br>'; //detruct se lance dès qu'on a fini d'instancer la classe
    //     }

    //     public function getVariableProtected()
    //     {
    //         return $this->varProtected;
    //     }
}
