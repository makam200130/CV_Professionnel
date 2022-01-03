<?php 
    
    class Personnes
    {
        // Declare  properties
        
        // creation des methodes
        public function __construct(public $nom,public $prenom,public $metier,
            public $photocouverture, public $photoprofil, public $datenaissance, 
            public $origine, public $statutmatrimoniale, public $nbrenfant, 
            public $statutsante,public $residance, public $ville, public $pays, 
            public $mapping,public $codepays, public $tel, public $comptetel, 
            public $email, public $comptemail, public $nbrprojet, 
            public $nbrcontrat, public $nbrexperience){

        }
        

        public function getConponent(){
            echo'
            <div class="profile" style="background-image: url(image/fond.jpg); background-size: cover; height: 280px;">
  
            <div class="rech" style="align-content: center; justify-content: center; justify-items: center;">
            <img src="image/menu_filled_50px.png" style="width: 24px; height: 24px;" alt=""
                class="bigIcon" id="bigIcon">
            <input type="text" placeholder="Besoin d\'un chef de projet ?" class="inputSearchBar">
            <img src="image/search_50px.png" style="width: 24px; height: 24px;" alt="" class="smallIcon"
                id="smallIcon">
            <img src="image/thick_vertical_line_filled_50px.png" style="width: 24px; height: 24px;"
                alt="" class="smallIcon" id="smallIcon">
            <img src="image/delete_sign_32px.png" style="width: 24px; height: 24px;" alt=""
                class="smallIcon" id="smallIcon">
        </div>   
        <div class="photoetnom">
            <img class="tof" src="image/fond.jpg" alt="">
            <div class="nom">
                <h1>'.$this->nom .' '.$this->prenom.'</h1>
                <p style="color: white; margin-top: -30px;">'.$this->metier.'</p>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Envoyer un message</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="sendmail.php">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Adresse mail:</label>
                        <input type="text" class="form-control" id="recipient-name" name="adresse">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        
        <button class="a_masquerafficher1" id="divacacher1" style="display:none;" 
            data-bs-toggle="modal" data-bs-target="#exampleModal"> </button>
        <button class="a_masquerafficher2" id="divacacher2" style="display:none;"> 
        <a href="editons.php">editer</a> </button>

        
    </div>
    <div class="about">
        <div class="send" onClick="AfficherMasquer()" >
            <img  id style="margin-top: 15px; display: flex; margin-left: 13px; border-radius: 100%; align-self: center;"
                src="image/add.png" alt="">
        </div>
        <div class="desabout">
            <div class="birth">
                <img style="margin-right: 15px;" class="taillebigIcon" src="image/birthday_cake_24px.png"
                    alt="">
                <div class="text">
                    <div class="textgrey">Nee le '.$this->datenaissance.'</div>
                    <div class="textgrey">Originaire du '.$this->origine.' '.$this->pays.'</div>
                    <div class="textgrey">'.$this->statutmatrimoniale.' '.$this->nbrenfant.' enfants - Santé '.$this->statutsante.'</div>
                    <div class="trait">
                        <hr class="hcolor">
                    </div>
                </div>
            </div>

            <div class="birth">
                <img style="margin-right: 15px;" class="taillebigIcon"
                    src="image/location_filled_50px.png" alt="">
                <div class="text">
                    <div class="textgrey">Residant à '.$this->residance.'</div>
                    <div class="textgrey">'.$this->ville.' - '.$this->pays.'</div>
                    <div class="textgrey">Map: '.$this->mapping.'</div>
                    <div class="trait">
                        <hr class="hcolor" >
                    </div>
                </div>
            </div>

            <div class="birth">
                <img style="margin-right: 15px;" class="taillebigIcon" src="image/phone_24px.png" alt="">
                <div class="text">
                    <div class="textgrey">('.$this->codepays.') '.$this->tel.'</div>
                    <div class="textgrey">'. implode(", ",$this->comptetel).'</div>
                    <div class="trait">
                        <hr class="hcolor"  >
                    </div>

                </div>
            </div>

            <div class="birth">
                <img style="margin-right: 15px;" class="taillebigIcon" src="image/mail_filled_50px.png"
                    alt="">
                <div class="text">
                    <div class="textgrey">'.$this->email.'</div>
                    <div class="textgrey">'.implode(", ",$this->comptemail) .'</div>
                </div>
            </div>
        </div>
        <div class="projets">
            <div class="proj" id="p1">
                <div class="titretext">+'.$this->nbrprojet.' Projets</div>
                <span></span>
            </div>
            <div class="proj" id="p2">
                <div class="titretext">+'.$this->nbrcontrat.' Contrats</div>
                <span></span>
            </div>
            <div class="proj" id="p3">
                <div class="titretext">'.$this->nbrexperience.' ans d\'exp</div>
                <span></span>
            </div>
        </div>
        <div class="rouge"></div>
    </div>
            ';
        }

        
    }

    $allpersonnes = [
        new Personnes("Junior","Essono","Architecte logicieel / DevOps",
        "image/fond.jpg","image/fond.jpg","20 Octobre 1986",
        "Sud","Marié",02,"RAS","Ndogbong","Douala",
        "Cameroun","4.053276, 9.765047","237","674053983",
        array(
            "mobile",
           "telgram",
            "Whatsapp"
        ),
        "junioressono@gmail.com",
        [
            "Google+",
            "Twitter",
            "Linkedin",
            "Github"
        ],
        45,31,12)     
      ];
     

?>



<div class="personnel">
    <script  type="text/javascript">
    function AfficherMasquer()
    {
        divInfo1 = document.getElementById('divacacher1');
        divInfo2 = document.getElementById('divacacher2');
        
        if (divInfo1.style.display == 'none' && divInfo2.style.display == 'none' ){
            divInfo1.style.display = 'block';
            divInfo2.style.display = 'block';
        }
        else{
            divInfo1.style.display = 'none';
            divInfo2.style.display = 'none';
        }

    }                                        
</script>  
<?php
                                    foreach ($allpersonnes as $i){
                                        $i->getConponent();
                                    }
                                ?>

<!-- <div class="profile" style="background-image: url(image/fond.jpg); background-size: cover; height: 280px;"> -->
<!-- <script  type="text/javascript">
    function AfficherMasquer()
    {
                            divInfo1 = document.getElementById('divacacher1');
                            divInfo2 = document.getElementById('divacacher2');
                            
                            if (divInfo1.style.display == 'none' && divInfo2.style.display == 'none' ){
                                divInfo1.style.display = 'block';
                                divInfo2.style.display = 'block';
                            }
                            else{
                                divInfo1.style.display = 'none';
                                divInfo2.style.display = 'none';
                            }
                        }                                        
</script>                 -->
    <!-- <div class="rech" style="align-content: center; justify-content: center; justify-items: center;">
                        <img src="image/menu_filled_50px.png" style="width: 24px; height: 24px;" alt=""
                            class="bigIcon" id="bigIcon">
                        <input type="text" placeholder="Besoin d'un chef de projet ?" class="inputSearchBar">
                        <img src="image/search_50px.png" style="width: 24px; height: 24px;" alt="" class="smallIcon"
                            id="smallIcon">
                        <img src="image/thick_vertical_line_filled_50px.png" style="width: 24px; height: 24px;"
                            alt="" class="smallIcon" id="smallIcon">
                        <img src="image/delete_sign_32px.png" style="width: 24px; height: 24px;" alt=""
                            class="smallIcon" id="smallIcon">
                    </div>
                    <div class="photoetnom">
                        <img class="tof" src="image/fond.jpg" alt="">
                        <div class="nom">
                            <h1>Junior Essono</h1>
                            <p style="color: white; margin-top: -30px;">Lorem ipsum dolor sit amet consec</p>
                        </div>
                    </div>
                    
                    <div class="a_masquerafficher1" id="divacacher1" style="display:none;">
                            
                    </div>
                    <div class="a_masquerafficher2" id="divacacher2" style="display:none;">
                            
                    </div>
                </div>
                <div class="about">
                    <div class="send" onClick="AfficherMasquer()" >
                        <img  id style="margin-top: 15px; display: flex; margin-left: 13px; border-radius: 100%; align-self: center;"
                            src="image/add.png" alt="">
                    </div>
                    <div class="desabout">
                        <div class="birth">
                            <img style="margin-right: 15px;" class="taillebigIcon" src="image/birthday_cake_24px.png"
                                alt="">
                            <div class="text">
                                <div class="textgrey">Nee le 30 octobre 1986</div>
                                <div class="textgrey">Originaire du sud cameroun</div>
                                <div class="textgrey">Marié 02 enfants - Santé RAS</div>
                                <div class="trait">
                                    <hr color="#eef1f3">
                                </div>
                            </div>
                        </div>

                        <div class="birth">
                            <img style="margin-right: 15px;" class="taillebigIcon"
                                src="image/location_filled_50px.png" alt="">
                            <div class="text">
                                <div class="textgrey">nee le 30 octobre 1986</div>
                                <div class="textgrey">originaire du sud cameroun</div>
                                <div class="textgrey">marié 02 enfants - Santé RAS</div>
                                <div class="trait">
                                    <hr color="#eef1f3">
                                </div>
                            </div>
                        </div>

                        <div class="birth">
                            <img style="margin-right: 15px;" class="taillebigIcon" src="image/phone_24px.png" alt="">
                            <div class="text">
                                <div class="textgrey">nee le 30 octobre 1986</div>
                                <div class="textgrey">originaire du sud cameroun</div>
                                <div class="trait">
                                    <hr color="#eef1f3">
                                </div>

                            </div>
                        </div>

                        <div class="birth">
                            <img style="margin-right: 15px;" class="taillebigIcon" src="image/mail_filled_50px.png"
                                alt="">
                            <div class="text">
                                <div class="textgrey">nee le 30 octobre 1986</div>
                                <div class="textgrey">originaire du sud cameroun</div>
                            </div>
                        </div>
                    </div>
                    <div class="projets">
                        <div class="proj" id="p1">
                            <h4 class="titretext">+45 Projets</h4>
                            <span></span>
                        </div>
                        <div class="proj" id="p2">
                            <h4 class="titretext">+31 Contrats</h4>
                            <span></span>
                        </div>
                        <div class="proj" id="p3">
                            <h4 class="titretext">12 ans d'exp</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div style="background: red; width: 115px; height: 2px; margin-top: -2px;"></div> -->
            </div>