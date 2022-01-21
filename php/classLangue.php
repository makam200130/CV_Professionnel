<?php 
class Langue{

    // public Personne $personne;
    //public $personne;
    public $nomLangue;

   

    public function __construct($nomLangue)
    {
         $this->nomLangue=$nomLangue;
    }

   

    public function getLangues(){
        echo '
            <div class="checkLanguage ">
                <img src="image/checked_checkbox_24px.png " alt=" ">
                <div class="bigGreyText ">'.$this->nomLangue.'</div>
            </div>
            ';
    }
    public function getLanguesPreview(){
        echo '
            <div class="checkLanguage ">
                <img src="../image/checked_checkbox_24px.png " alt=" ">
                <div class="bigGreyText ">'.$this->nomLangue.'</div>
            </div>
            ';
    }

}


$langues=[
    new Langue('Français'),
    new Langue('Anglais')
];
?>