<?php
    abstract class Experience{
        
        // Declare  properties
        

        public function __construct(public $intitule,public $lieu,public $description,public $date_fin ){
            
        }
        
        public abstract function getComponents();

        // creation des methodes
        
    }
?>