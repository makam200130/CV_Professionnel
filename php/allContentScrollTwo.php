<?php 
    class experienceAcademic extends Experience{

        public $detail;
       
    
        public function __construct($libelle,$infrastructure,$dateDebut,$detail)
        {
            parent::__construct($libelle,$infrastructure,$dateDebut);            
             $this->detail=$detail;
        }
    
       
    
        public function getExperience(){
            echo '
                <div class="listProfessionalExp " id="listProfessionalExp ">
                    <div class="mediumBlackText ">'.$this->libelle.' - <b> @'.$this->infrastructure.'</b></div>
                    <div class="dateSpeciality ">
                        <div class="simpleBlueText ">'.$this->dateDebut.' - </div>
                        <div class="simpleBlackText "><i>'.$this->detail.'</i> </div>
                    </div>
                    <div class="greyBottomLine "></div>
                </div>
        ';
        }
    
    }

    $academicCursus =[
        new experienceAcademic(
            "DIPET Electrotechnique",
            "ENSET de Douala",
            "Août 2012",
            "Gestion d'éclairage d'une maison (Android + Arduino)"
        ),
        new experienceAcademic(
            "Oracle Certified Associate",
            "Kentnix Sarl",
            "Mars 2009",
            "Oracle Database 11g Administration"
        ),
        new experienceAcademic(
            "Oracle SQL Certified",
            "Kentnix Sarl",
            "Décembre 2008",
            "SQL 2, SQL 3, XML"
        ),
        new experienceAcademic(
            "Licence professionnelle",
            "Douala Institute of Tech",
            "Octobre 2008",
            "Télécommunication & Réseaux"
        ),
        new experienceAcademic(
            "DEC / BTS",
            "CCNB Dieppe - Canada",
            "Septembre 2007",
            "Programmation Appliquée Pour Internet"
        ),
        new experienceAcademic(
            "Baccalauréat",
            "Lyscée Technique de Douala Bassa",
            "Juin 2005",
            "Electrotechnique, mention BIEN(major de centre)"
        )
    ];
?>
<div class="academicCursusTitle " id="academicCursusTitle ">
                <div class="titleBar ">
                    <div class="imageText ">
                        <img src="image/motarboard_30px.png " alt=" " class="geantIcon ">
                        <div>
                            <div class="titleText ">Cursus Academique</div>
                            <div class="smallWhiteText "> <i>Diplôme et formation certifiante</i></div>
                        </div>
                    </div>
                    <img src="image/menu_2_24px.png " alt=" " class="treeDots ">
                </div>
            </div>
            <div class="contentScrollTwo ">
                <div class="scrollTwo ">
                <?php
                    foreach ($academicCursus as $school) {
                        $school->getExperience();
                    }  
                ?>
                </div>
            </div>