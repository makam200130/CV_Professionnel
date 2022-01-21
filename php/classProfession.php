<?php 
    $actualDate = strftime('%Y-%m-%d %H:%M:%S');

class experienceProfessionnel extends Experience{

    // public Personne $personne;
    //public $personne;
    public $dateFin;
    public $lien;
    public $detail;
   

    public function __construct($libelle,$infrastructure,$dateDebut,$dateFin,$lien,$detail)
    {
        parent::__construct($libelle,$infrastructure,$dateDebut);            
         $this->dateFin=$dateFin;
         $this->lien=$lien;
         $this->detail=$detail;
    }

   

    public function getExperience(){
        $actualDate = strftime('%Y-%m-%d %H:%M:%S');
        if($this->dateFin == $actualDate){
            echo '
                <div class="listProfessionalExp " id="listProfessionalExp ">
                <div class="mediumBlackText ">'.$this->libelle.' - <b> @'.$this->infrastructure.'</b></div>
                <div class="simpleBlueText ">De '.ucfirst(utf8_encode(strftime("%B %Y",strtotime($this->dateDebut)))).' à nos jours - '.$this->lien.'</div>
                <div class="simpleGreyText ">'.$this->detail.'</div>
                <div class="greyBottomLine "></div>
            </div>
                    ';
        }
        else{
        echo '
        <div class="listProfessionalExp " id="listProfessionalExp ">
        <div class="mediumBlackText ">'.$this->libelle.' - <b> @'.$this->infrastructure.'</b></div>
        <div class="simpleBlueText ">De '.ucfirst(utf8_encode(strftime("%B %Y",strtotime($this->dateDebut)))).' à '.utf8_encode(strftime("%B %Y",strtotime($this->dateFin))).' - '.$this->lien.'</div>
        <div class="simpleGreyText ">'.$this->detail.'</div>
        <div class="greyBottomLine "></div>
    </div>
            ';
        }
    }

    

}

    $allExperiences =[
        new experienceProfessionnel(
            "Chef des projets technologique",
            "Ets. M DE M",
            '2019-07-01 00:00:00',
            $actualDate,
            "http://mdem.cm",
            "Chef du projet annuaire-universel.cm de l'ART;"
            
        ),
        new experienceProfessionnel(
            "Fondateur & DT",
            "Startup ChickDev",
            '2015-06-01 00:00:00',
            $actualDate,
            "http://chickdev.com",
            "Réalisition de plusieurs sites web et applications web et mobiles"
        ),
        new experienceProfessionnel(
            "Enseignant",
            "Institut Universitaire de la Côte",
            '2011-10-01 00:00:00',
            $actualDate,
            "http://istdi.net",
            "Analyse, UML & MERISE; BD/SQL, ORACLE & MySQL; Dev, IOS & Android; BI & Big Data Talend DI & Hadoop, 1ere, 2ème et 4ème année"
        ),
        new experienceProfessionnel(
            "Développeur en chef",
            "Kayroual group",
            '2013-05-01 00:00:00',
            '2015-06-01 00:00:00',
            "http://khayroual.com",
            "Réalisation de multiples projets logiciels et web, Infographie..."
        ),
        new experienceProfessionnel(
            "Responsable commercial",
            "BAO Sarl",
            '2012-12-01 00:00:00',
            '2013-06-01 00:00:00',
            "http://bao-sarl.com",
            "Définition des stratégies commerciales, Contrôle de qualité, suivi..."
        ),
        new experienceProfessionnel(
            "Responsable commercial",
            "BAO Sarl",
            '2012-12-01 00:00:00',
            '2013-06-01 00:00:00',
            "http://bao-sarl.com",
            "Définition des stratégies commerciales, Contrôle de qualité, suivi..."
        )
    ];
    function date_compare($a, $b)
    {
        $t1 = strtotime($a->dateDebut);
        $t2 = strtotime($b->dateDebut);
        return $t2 - $t1;
    }    
    usort($allExperiences, 'date_compare');
    
    // $firstExperience = $allExperiences = [2];
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    //echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));

    $tableLength = sizeof($allExperiences)-1;
    $firstExperienceDate = strftime($allExperiences[$tableLength]->dateDebut); 
    $expYearOld =round((time()-strtotime($firstExperienceDate))/(3600*24*365.25));

?>