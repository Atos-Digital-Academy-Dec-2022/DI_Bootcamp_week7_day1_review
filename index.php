<?php

require 'libClass/PersonneClass.php';
require 'libClass/FemmeClass.php';

system("clear");


// $personne = new Personne("Dian", "Michelle", 25, '1.70', "F");

// // $personne->descrire();
// $personne->adresse = "Berklin";
// $personne->taille = "1.72";

// // $personne->descrire();
// $personne->plat = "Alloco";
// // $personne->avoirFaim();
// $personne->tomberMalade();


function save($object){
    $file = "personne.txt";
    $info = " Contact \n";
    $info .= "Nom : ". $object->nom. "\n" ;
    $info .= "Prenom : ". $object->prenom. "\n" ;
    $info .= "Age : ". $object->age. "\n" ;
    $info .= "Adresse : ". $object->adresse. "\n" ;
    $info .= "taille : ". $object->taille. "\n" ;
    $info .= "-------------------------------------- \n" ;

    if(file_put_contents($file, $info,FILE_APPEND)){
        echo "Informations enregistrées avec succès\n";
        var_dump(file_get_contents($file));
    }
    
}

function init()
{
    echo "Bonjour; veuillez entrez vos informations : \n";
    $nom = readline('Nom : ');
    $pn = readline('Prenom : ');
    $a = readline('age : ');
    $t = readline('taille : ');
    $s = readline('Sexe : ');



    $p = new Femme($nom, $pn, $a, $t, $s);
    $p->descrire();
    $p->plat = "Alloco";
    $p->avoirFaim();
    echo "\n\n";
    $p->tomberMalade();
    echo "\n\n";

    $listeSports = $p->faireDuSport();
    // echo "\n\n";
    save($p);

}


init();