<?php 
    abstract class Experience{

        public $libelle ;
        public $infrastructure ;
        public $dateDebut ;

        public function __construct($libelle,$infrastructure,$dateDebut)
        {
            $this->libelle=$libelle;
            $this->infrastructure=$infrastructure;
            $this->dateDebut=$dateDebut;
        }

        public function __destruct()
        {
        }

        public abstract function getExperience();


    }  
?>