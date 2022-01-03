<?php
    class Langue{
        
        public function __construct(public $mes_langues){
            
        }

        public function getConponent(){
            echo'
                <div class="item1">
                    <img src="image/cocher.png" alt="">
                    <div class="bigGreyText">'.$this->mes_langues.'</div>
                </div>
            ';
        }

    }
     
    $allLangues = [
        new Langue("francais"),
        new Langue("Anglais")
    ];
    
?>

<div class="langue">
    <div style="font-size:21px"><b>Langue</b></div>
    <div class="simpleGreyText"> lohdsbqhevfhavzdfzrgr</div>
    <div class="detailslangue">
        <?php
            foreach ($allLangues as $l){
                $l->getConponent();
            }
        ?>
    </div>
</div>