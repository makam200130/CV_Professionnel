<?php
    class Cursus extends Experience{

        public function __construct(public $intitule,public $lieu,public $date_fin,public $description ){
            parent::__construct($intitule, $lieu, $description, $date_fin );
        }

        public function getComponents(){

            echo ' 
                <div class="detailscursus">
                    <div class="textblackM">'.$this->intitule.' <b>@'.$this->lieu.'</b></div>
                    <div><span class="textblue">'.$this->date_fin.'</span><i> '.$this->description.' </i></div>
                    <div class="trait1">
                        <hr color="#f0f0f0">
                    </div>
                </div>
            ';
        }
    }


    $allCursus = [
        new Cursus("DIPET 2 Electronique", "ENSET de Douala","Aouût 2016",
        "Gestion d'eclairage d'une maison (Android + Arduino)"),
        new Cursus("Oracle Cerified Associate", "Kentnix Sarl", "Mars 2009", 
        "Oracle Database 11g Administration"),
        new Cursus("Oracle SQL Certified", "Kentnix Sarl", "Décembre 2008",
        "SQL 2, SQL 3, XML"),
        new Cursus("Licence professionnelle", "Douala Institut of Tech.",
        "Octobre 2008", "Télécommunication & Réseaux"),
        new Cursus("DEC / BTS", "CCNB Dieppe - Canada","Septembre 2007",
        "Programmation Appliquée Pour Internet"),
        new Cursus("Baccalauréat", "Lycée Technique de Douala Bassa","juin 2005",
        "Electronique, mention BIEN (major de centre)"),
        new Cursus("Baccalauréat", "Lycée Technique de Douala Bassa","juin 2005",
        "Electronique, mention BIEN (major de centre)"),
        new Cursus("Baccalauréat", "Lycée Technique de Douala Bassa","juin 2005",
        "Electronique, mention BIEN (major de centre)"),
        new Cursus("Baccalauréat", "Lycée Technique de Douala Bassa","juin 2005",
        "Electronique, mention BIEN (major de centre)")
    ];
?>





<div class="cursus">
                <div class="experience" style="margin-top: 20px;">
                    <div class="entete">
                        <div class="expp">
                            <img class="taillebigIcon" src="image/cursus.png" alt="">
                            <div style="width: auto; margin-left: 8px;">
                                <div class="titreentete">cursus academique</div>
                                <div style="color: white;">bvezgfyehg</div>
                            </div>

                        </div>
                    </div>
                    <img style="margin-right: 20px;" class="taillebigIcon" src="image/menu.png" alt="">
                </div>
                <div class="cont">
                    <div class="scrollcorps">
                        <?php foreach ($allCursus as $e){
                            $e->getComponents();
                        }?>

                    </div>
                </div>

            </div>
