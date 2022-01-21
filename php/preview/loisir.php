<div class="interestPoint " id="interestPoint ">
        <div class="mediumBlackText "><b>Point d'interêt</b></div>
        <div class="simpleGreyText " style="padding-bottom: 1%; ">Simple passe-temps pour se faire un peu plaisir</div>
        <div class="listeImageInteret ">
        <?php
            $indexLoisir=0;
            foreach ($imagesLoisir as $valeur) {
                $indexLoisir ++;
                echo ' <img src="../'.$valeur->imageLoisir.'" id="indexLoisir'.$indexLoisir.'" alt=" " class="pleasureImage">';
            }
        ?>
        </div>
    </div>