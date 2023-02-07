<?php
/**
 * Cette classe definit les attributs et méthodes d'une personne
 */
class Personne {

    public $nom;
    public $prenom;
    public $age;
    public $taille;
    private $sexe;
    public $adresse ='';
    public $nationalite ='';
    private $activites =[];

    public $isHungry = true;

    public $plat;

    /**
     * Le constrcuteur de la classe Personne
     * @param mixed $n
     * @param mixed $p
     * @param mixed $a
     * @param mixed $t
     * @param mixed $s
     */
    public function __construct($n, $p, $a, $t, $s)
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->age = $a;
        $this->taille = $t;
        $this->sexe = $s;
    }
        
    /**
     * Cette méthode permettant d'afficher les informations d'une personne

     * @return void
     */
    public function descrire()
    {
        echo "-------------------------------------\n";
        echo "----- Nom :  $this->nom   \n";
        echo "----- Prenom :  $this->prenom  \n";
        echo "----- Age :  $this->age  ans            \n";
        echo "----- Taille : $this->taille  m             \n";
        echo "----- Sexe : $this->sexe               \n";
        if(strlen($this->adresse) > 0) echo "----- Adresse : $this->adresse               \n";
        if($this->nationalite !==  '') echo "----- Nationalité :  $this->nationalite               \n";
        echo "-------------------------------------\n";
    }

    /**
     * Cette fonction retourne le sexe d'une personne

     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($s){
        $this->sexe = $s;
    }

    public function getActivities(){
        return implode(",", $this->activites);
    }

    public function setActivites(...$activities)
    {
        array_push($this->activites,$activities);
    }

    public function avoirFaim(){
        $heure =  date('H');

        if($this->isHungry){
            switch ($heure){
                case $heure >= 6 && $heure <= 9:
                    echo date('H:i:s') . " C'est l'heure du petit dejeuner. \n";
                    echo "Je veux manger " . $this->plat;
                    break;
                case $heure >= 12 && $heure <= 16:
                    echo date('H:i:s') . " C'est l'heure du dejeuner. \n";
                    echo "Je veux manger " . $this->plat;
                    break;
                case $heure >= 16 && $heure <= 18:
                    echo date('H:i:s') . " C'est l'heure du gouté. \n";
                    echo "Je veux manger " . $this->plat;
                    break;
                case $heure >= 20 && $heure <= 22:
                    echo date('H:i:s') . " C'est l'heure du diner. \n";
                    echo "Je veux manger " . $this->plat;
                    break;
                default:
                    echo date('H:i:s') . " Faut boire l'eau";
                    break;
            }
        }
    }

    public function tomberMalade(){

        $constanteTemperature = 37;
        $listeMaladies = ["palu", "grippe", "migraine"];
        
        echo "Bonjour $this->nom $this->prenom \n";
        echo "Comment allez vous ? \n";
        
        $temperature = readline("Quelle est votre temperature ? : ");

        if ($temperature >= $constanteTemperature) {
        
            echo "Votre temperature est très élevée. \n";
        
            $douleur = trim(readline("Votre mal ?: "));
            // $douleur = trim($mal);

            if (in_array($douleur,$listeMaladies))
            {
                switch ($douleur){
                    case "palu":
                        echo "Prenez Artefan";
                        break;
                    case "migraine":
                        echo "Prenez des paracetamoles";
                        break;
                    case "grippe":
                        echo "Prenez des Ferverse";
                        break;
                    default:
                        echo "Vas voir un spécialiste";
                        break;
                }

            }

        }

    }

}


// - Une méthode tomberMalade 
