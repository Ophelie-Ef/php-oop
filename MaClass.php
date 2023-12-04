<?php

class MaClass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = '37';
    private $_attributPrivate; //par convention on commence un attribut privé par un underscore _
}

$obj = new MaClass(); //creation d'un objet
echo $obj->couleur;