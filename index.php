<?php
include 'MaClass.php';
include 'MaClassHerite.php';

// $obj = new MaClass(); //creation d'un objet

// echo 'Couleur : ' . $obj->couleur . '<br>';
// echo 'Age :' . $obj->age . '<br>';

//echo 'Nom :'.$obj->_nom;      // Ne peux fonctionner : on ne peux acceder à un attribut privé en dehors de sa classe
// $obj->displayMethode("Coucou !");

// $obj->prenom = 'Bill'; //Je renseigne le prénom à l'exterieur de la classe avec mon objet

// // echo $obj->displayMethode("osef");

// $obj->rayon = 5;
// echo $obj->calculCercleAire() . '<br>';

// echo $obj->calculAireDeux(3.5) . '<br>';

// echo MaClass::$varStatic.'<br>';

// echo MaClass::staticFunc().'<br>';

// $objHerite = new MaClassHerite();

// echo $objHerite->getCouleur();

// echo $objHerite->getVariableProtected();

// echo $obj2->varProtected; //impossible avec une  var protegee

//

// $obj2 = new MaClass();

// $obj2->setNom('John Doe');

// echo $obj2->getNom();

$personne2 = new MaClassHerite();
$personne2->setVariableProtected('Un Chêne de caractère');
echo $personne2->getVariableProtected();