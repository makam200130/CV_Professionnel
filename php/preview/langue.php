<div class="language " id="language ">
        <div class="mediumBlackText "><b>Langue</b></div>
        <div class="simpleGreyText " style="padding-bottom: 1%; ">Pratiquée en entreprise</div>
        <div class="contentLanguage">
        <?php
            foreach ($langues as $valeur) {
                $valeur->getLanguesPreview();
            } 
        ?>
        </div>
    </div>