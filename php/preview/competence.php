<div class="detailProject" id="detailProject ">
            <?php
                // foreach ($allCompetences as list($nomCompetence, $outils, $pourcentageMaitrise)) {
                    // echo 'La clé ' . $cle . ' contient la valeur ' . $valeur . "\n";
                    // echo '[' . $allCompetenceCle . ', ' . $cle . '] = ' . $valeur . "\n";
                foreach($allCompetences as $competence){
                        $competence->get_competence_preview();
                }
            ?>
</div>