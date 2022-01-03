<?php
    require "classexperience.php";
    class Experienceprofessionnelle extends Experience{

        public function __construct( $intitule, $lieu,public $date_debut, $date_fin,  public $lien, $description)
        {
            
            parent::__construct($intitule, $lieu, $description, $date_fin );

        }

        public function getComponents(){
            echo'
            <div class="details">
            <div class="textblackM">'.$this->intitule.' - <b> @'.$this->lieu.'</b></div>
             <div class="textblue">De '.$this->date_debut.' à '.$this->date_fin.' - '.$this->lien.'</div>
            <div class="simpleGreyText">'.$this->description.'</div>
            <div class="trait">
                 <hr color="#f0f0f0">
            </div>
        </div>
            ';
        }


    }



    $allExperience = [
        new Experienceprofessionnelle("chef de projet technologiques " ,"@Ets.M DE M", "De juillet 2019", 
        "ce jour","http//mdem.cm", "chef du projet annuaire-universel.cm de l'ART "),
        new Experienceprofessionnelle("fondateur &DT ","-@Startup chickDev","juin 2015","ce jour",
        "http//chickdev.cm","realisation de plusieurs sites web et applications web et mobiles "),
        new Experienceprofessionnelle("Enseignant ","-@Institut universitaire de la cote","octobre 2011",
        "ce jour","http//istdi.net","Analyse UML & MERISE,BD/SQL ORACLE &MYSQL,DEV, IOS & Android,   BI &Big Data Talennd DI & Hadoop,
        1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee "),
        new Experienceprofessionnelle("Developpeur en chef " ,"-@Karyroual group","Mai 2013","juin 2015",
        "http//khayroual.com","realisation de multiples projets logiciels et  web,infographie "),
        new Experienceprofessionnelle("responsable commercial " ,"-@BAO Sarl","Decembre 2012","juin 2013",
        "http//bao.sarl.com","definition des strategies commerciales ,controle de quqlite ,suivi... "),
        new Experienceprofessionnelle("responsable commercial " ,"-@BAO Sarl","Decembre 2012","juin 2013",
        "http//bao.sarl.com","definition des strategies commerciales ,controle de quqlite ,suivi... "),
        new Experienceprofessionnelle("responsable commercial " ,"-@BAO Sarl","Decembre 2012","juin 2013",
        "http//bao.sarl.com","definition des strategies commerciales ,controle de quqlite ,suivi... "),
        new Experienceprofessionnelle("responsable commercial " ,"-@BAO Sarl","Decembre 2012","juin 2013",
        "http//bao.sarl.com","definition des strategies commerciales ,controle de quqlite ,suivi... ")
    ];
  
?>


<div class="experiences">
    <div class="partie1">
        <div class="experience">
            <div class="entete">
                <div class="expp">
                    <img class="taillebigIcon" src="image/experiences.png" alt="">
                    <div style="width: auto; margin-left: 8px;">
                        <div class="titreentete">experience professionnel</div>
                        <div style="color: white;" class="">bvezgfyehg</div>
                    </div>

                </div>
            </div>
            <img style="margin-right: 20px;" class="taillebigIcon" src="image/menu.png" alt="">
        </div>
        <div class="cont">
            <div class="scrollcorps">
                <?php foreach ($allExperience as $e){
                   $e->getComponents();
                }?>
                
                

            </div>
        </div>

    </div>
</div>
