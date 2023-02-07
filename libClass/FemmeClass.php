<?php

// require 'PersonneClass.php';

class Femme extends Personne {

    private $listeSports = [];
    private $isSportive = false;

    public function faireDuSport(){
        $sport = trim(readline("Faites vous du sport (oui ou non) ? : "));
        if (in_array($sport, ['oui', 'non'])) {
            if($sport == 'oui'){
                $this->isSportive = true;
                $nombreSport = (int)trim(readline("Combien de sports ? : "));
                echo "\n";
                for ($i = 1; $i <= $nombreSport; $i++) {
                    $this->listeSports[$i] = trim(readline("Veuilez saisi le  sport $i : "));
                    echo "\n";
                }

                return $this->listeSports;
            }
        }else{
            $this->faireDuSport();
        }

    }
}

