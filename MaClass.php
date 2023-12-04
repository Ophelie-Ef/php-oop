<?php

class MaClass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = '37';
    private $_attributPrivate; //par convention on commence un attribut privé par un underscore _
    private $_nom = 'Michel PLIK';

    public function displayMethode() // méthode
    {
        echo 'Je suis une méthode.'.'<br>';
    }

}

$obj = new MaClass(); //creation d'un objet

echo 'Couleur : '.$obj->couleur.'<br>';
echo 'Age :'.$obj->age.'<br>';

//echo 'Nom :'.$obj->_nom;      // Ne peux fonctionner : on ne peux acceder à un attribut privé en dehors de sa classe

$obj->displayMethode();