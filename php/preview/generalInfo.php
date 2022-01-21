<div class="properlyView">
    <div class="generalInfo">
        <div class="backgroundPhoto" id="backgroundPhoto" style="background: url('../<?php echo $pernonne1->getPhotoCouverture() ?>');background-size: cover;">
            <!-- <img src="image/download5.jpg" alt="" class="theBackgroundPhoto" id="theBackGroundPhoto"> -->
            <div class="searchBar" id="searchBar">
                <img src="../image/menu_filled_50px.png" alt="" class="bigIcon" id="bigIcon">
                <input type="search" placeholder="Besoin d'un chef de projet ?" class="inputSearchBar">
                <img src="../image/search_50px.png" alt="" class="smallIcon" id="smallIcon">
                <img src="../image/thick_vertical_line_filled_50px.png" alt="" class="smallIcon" id="smallIcon">
                <img src="../image/delete_sign_filled_50px.svg" alt="" class="smallIcon" id="smallIcon">
            </div>
            <div class="personnalInfo" id="personnalInfo">
                <img id="fullPreviewProfilPicture" src="../<?php echo $pernonne1->getPhotoProfil() ?>" alt="" class="profilePhoto">
                <div style="margin-left: 20px;">
                    <div style="display: flex;justify-content:space-evenly;">
                        <div class="nom" id="nomText"> <b> <?php echo $pernonne1->getNom() . ' '; ?> </b> </div>
                        <div class="nom" id="prenomText"> <b> <?php echo ' ' . $pernonne1->getPrenom(); ?> </b> </div>
                    </div>
                    <div class="simpleText" id="metierText"><?php echo $pernonne1->getMetier() ?></div>
                </div>
            </div>
        </div>
        <div class="coordonate" id="coordonate">
            <div class="birthday" id="birthday">
                <img src="../image/birthday_cake_24px.png" alt="" class="bigIcon">
                <div style="margin-left: 20px; width:100%;">
                    <div class="simpleText" id="dateNaissText">Ne le <?php echo utf8_encode(strftime("%d %B %Y", strtotime($pernonne1->getDateNaissance()))) ?></div>
                    <div class="simpleText" style="display: flex;justify-content:flex-start;"> <div id="regionOriginText"><?php echo 'Originaire du '.$pernonne1->getRegionOrigine().' ' ?></div>
                        <div class="simpleText" id="paysOriginText"><?php echo '-'.$pernonne1->getPaysOrigine() ?></div>
                    </div>
                    <div class="simpleText"><?php echo $pernonne1->getStatutMatrimonial() ?>,
                        <?php
                        if ($pernonne1->getnombreEnfant() < 1) {
                            echo "Pas d'enfant";
                        } elseif ($pernonne1->getNombreEnfant() == 1) {
                            echo $pernonne1->getNombreEnfant() . " enfant";
                        } else {
                            echo $pernonne1->getNombreEnfant() . " enfants";
                        }
                        ?>
                        - Sante <?php echo $pernonne1->getStatutSante() ?></div>
                    <div class="bottomLine"></div>
                </div>
            </div>

            <div class="address" id="address">
                <img src="../image/location_filled_50px.png" alt="" class="bigIcon">
                <div style="margin-left: 20px; width:100%;">
                    <div class="simpleText">Resident à <?php echo $pernonne1->getQuartier() ?></div>
                    <div class="simpleText"> <?php echo $pernonne1->getVilleResidence() ?> - <?php echo $pernonne1->getPaysResidence() ?></div>
                    <div class="oneLineText">
                        <div class="simpleText">Map : </div>
                        <div class="thinText"> <?php echo $pernonne1->getLongituteResidence() . " . " . $pernonne1->getLatitudeResidence() ?></div>
                    </div>
                    <div class="bottomLine"></div>
                </div>
            </div>

            <div class="telephone" id="telephone">
                <img src="../image/phone_24px.png" alt="" class="bigIcon">
                <div style="margin-left: 20px; width:100%;">
                    <div class="simpleText">(+237) <?php echo $pernonne1->getTelephone() ?></div>
                    <div class="thinText"> <?php echo $pernonne1->getContactMobile() ?></div>
                    <div class="bottomLine"></div>
                </div>
            </div>
            <div class="mail" id="mail">
                <img src="../image/filled_message_24px.png" alt="" class="bigIcon">
                <div style="margin-left: 20px; width:100%;">
                    <div class="simpleText"> <?php echo $pernonne1->getMail() ?></div>
                    <div class="thinText"> <?php echo $pernonne1->getContactElectronique() ?></div>
                </div>
            </div>
        </div>

        <div class="oldProject" id="oldProject">
            <div class="detailOldProjet">
                <div class="contentSlideBar">
                    <div class="simpleText" style=" margin-bottom: 10px;">+ <?php echo $pernonne1->getNombreProjet() ?> projets </div>
                </div>
                <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getNombreContrat() ?> contrats</div>
                <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getAnneeExperience() ?> ans d'Exp</div>
            </div>
        </div>
        <div class="contentRedBar">
            <div class="redBar "></div>
        </div>
    </div>
</div>