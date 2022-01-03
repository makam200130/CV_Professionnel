<?php
    class Competence{
        public function __construct(public $nomC, public $outils, public $pourcentage){
            
        }

        public function getCompetences(){

            echo '
            <div class="competences">
                <img class="taillesmallIcon" src="image/cocher.png" alt="">
                <div class="descomp">
                    <div class="titrecomp">
                        <div class="text"><b> '.$this->nomC.' </b> </div>
                        <img class="specialicon" id="etoile" src="image/star_24px.png" alt="">
                    </div>
                    <p class="text2">'.$this->outils.'</p>
                    <div class="progresbar">
                        <div style="background: #1376ba; width: '.$this->pourcentage.'%; height: 3px;"> </div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        ';
        }
    }


    $allCompetences =[
        new Competence("Développement front-end","HTML5, SASS, VueJS, Angular, JavaFx", 90),
        new Competence("Développement back-end","Lavarel, Dupral 8, NodeJS, Kotlin, Java EE 7", 75),
        new Competence("Développement mobile","Android Kotlin, IOS Swift, Cordova, Flutter",80),
        new Competence("UI / UX Design","Photoshop CC, Adobe XD, Material Design",65),
        new Competence("Base de données & Big Data","Oracle 11g, PostgreSQL, Hadoop, TalendDI",95),
        new Competence("Outils / Environnements","Visual Paradigm, Git, Docker, K8s, Linux",85)
        
    ]
?>




<div class="performence" style="background: #FAFAFA;">
    <?php
        foreach ($allCompetences as $c) 
        {
          $c->getCompetences();
         
        } 
    ?>
                
</div>
                
