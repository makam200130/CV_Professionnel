<?php 

class Competence{

    public $nonMaitrise;
    public $outils;
    public $pourcentageMaitrise;

    public function __construct($nomCompetence,$outils,$pourcentageMaitrise)
    {
        $this->nomCompetence=$nomCompetence;
        $this->pourcentageMaitrise=$pourcentageMaitrise;
        $this->outils=$outils;
    }

    public function get_competence(){
        $nonMaitrise=100-$this->pourcentageMaitrise;
        echo '
        <div class="checked " id="checked ">
                        <i class="fas fa-check-square fa-2x " id="myCheck"></i>
                        <div class="properlyProject ">
                            <div class="mediumBlackText "><b> ' .$this->nomCompetence.' </b> </div>
                            <div class="simpleBlackText "> ' . $this->outils .'</div>
                            <div class="slidecontainer ">
                                <span class="theFulled " style="width:'. $this->pourcentageMaitrise.'%; "></span>
                                <span class="theEmpty " style="right:'.$nonMaitrise.'%; "></span>
                            </div>
                        </div>
                        <div class="contentStar">
                            <img src="image/star_24px.png " alt=" " class="smallStar ">
                        </div>
                    </div>';
    }
    public function get_competence_preview(){
        $nonMaitrise=100-$this->pourcentageMaitrise;
        echo '
        <div class="checked " id="checked ">
                        <i class="fas fa-check-square fa-2x " id="myCheck"></i>
                        <div class="properlyProject ">
                            <div class="mediumBlackText "><b> ' .$this->nomCompetence.' </b> </div>
                            <div class="simpleBlackText "> ' . $this->outils .'</div>
                            <div class="slidecontainer ">
                                <span class="theFulled " style="width:'. $this->pourcentageMaitrise.'%; "></span>
                                <span class="theEmpty " style="right:'.$nonMaitrise.'%; "></span>
                            </div>
                        </div>
                        <div class="contentStar">
                            <img src="../image/star_24px.png " alt=" " class="smallStar ">
                        </div>
                    </div>';
    }
}

    $allCompetences =[
        new Competence(
            "Développement front-end",
            "HTML5, SASS, VueJS, Angular, JavaFx",
            90
        ),
        new Competence(
            "Développement back-end",
            "Lavarel, Dupral 8, NodeJS, Kotlin, Java EE 7",
            75
        ),
        new Competence(
            "Développement mobile",
            "Android Kotlin, IOS Swift, Cordova, Flutter",
            80
        ),
        new Competence(
            "UI / UX Design",
            "Photoshop CC, Adobe XD, Material Design",
            65
        ),
        new Competence(
            "Base de données & Big Data",
            "Oracle 11g, PostgreSQL, Hadoop, TalendDI",
            95
        ),
        new Competence(
            "Outils / Environnements",
            "Visual Paradigm, Git, Docker, K8s, Linux",
            85
        )
        ];
?>