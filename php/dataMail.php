<?php 
session_start();
require 'classPersonne.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nom">-----<b> Curriculum Vitae  </b>----- </div>
    <div class="nom">Nom : <b> <?php echo $pernonne1->getNom() ?> </b> </div>
    <div class="nom">Prenom : <b> <?php echo $pernonne1->getPrenom() ?> </b> </div>
    <div style="margin-left: 20px; width:100%;">
                <div class="simpleText">Ne le <?php echo utf8_encode(strftime("%d %B %Y",strtotime($pernonne1->getDateNaissance()))) ?></div>
                <div class="simpleText">Originaire du <?php echo $pernonne1->getRegionOrigine(). " " . $pernonne1->getPaysOrigine() ?></div>
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
    <div style="margin-left: 20px; width:100%;">
                <div class="simpleText">Resident à <?php echo $pernonne1->getQuartier() ?></div>
                <div class="simpleText"> <?php echo $pernonne1->getVilleResidence() ?> - <?php echo $pernonne1->getPaysResidence() ?></div>
                <div class="oneLineText">
                    <div class="simpleText">Map : <?php echo $pernonne1->getLongituteResidence()." . ".$pernonne1->getLatitudeResidence() ?></div>
                </div>
                <div class="bottomLine"></div>
    </div>

    <div style="margin-left: 20px; width:100%;">
                <div class="simpleText">(+237) <?php echo $pernonne1->getTelephone() ?></div>
                <div class="thinText"> <?php echo $pernonne1->getContactMobile() ?></div>
                <div class="bottomLine"></div>
    </div>

    <div style="margin-left: 20px; width:100%;">
                <div class="simpleText"> <?php echo $pernonne1->getMail() ?></div>
                <div class="thinText"> <?php echo $pernonne1->getContactElectronique() ?></div>
    </div>

    <div class="detailOldProjet" style="display: flex;">
            <div class="contentSlideBar">
                <div class="simpleText" style=" margin-bottom: 10px;">+ <?php echo $pernonne1->getNombreProjet() ?> projets </div>
            </div>
            <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getNombreContrat() ?> contrats</div>
            <div class="thinText " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getAnneeExperience() ?> ans d'Exp</div>
    </div>
    <a href="https://webcvapp.herokuapp.com/"><button style="background-color:#12609E;border-style:none;color:white;">Cliquez ici pour voir le CV complet</button></a>
</body>
</html>
