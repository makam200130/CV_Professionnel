<?php

    class Interet{
        
        public function __construct(public $mes_loisirs){
            
        }

        public function getConponent(){
            echo'
                <img src= " '.$this->mes_loisirs.'" alt="" class="pleasureImage">
            ';
        }

    }
     
    $allInterets = [
        new Interet("image/l2.png"),
        new Interet("image/l6.png"),
        new Interet("image/l1.png"),
        new Interet("image/l4.png"),
        new Interet("image/l5.png"),
        new Interet("image/l3.png"),
        new Interet("image/l6.png"),
        new Interet("image/l2.png")
    ];

    


    

?>

                <div class="interet">
                    <div style="font-size:21px"> <b> Points interet </b></div>
                    <div style="margin-bottom: 10px; " class="simpleGreyText">
                        Lorem ipsum dolor sit amet.</div>
                    <div class="detailsinteret">
                        <div class="scrollcorps1">
                            <div class="det1">
                                <?php
                                    foreach ($allInterets as $i){
                                        $i->getConponent();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
