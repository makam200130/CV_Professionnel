<div class="contentAddButton">
    <button onclick="" type="submit" name="sendEmailButton" class="btn btn-success" >Ajouter</button>
</div>
    <ul id="sortable">

        <?php
        $i = 0;
        foreach ($allCompetences as $competence) {
            $i++;
            echo '<li class="ui-state-default">
            <div class="contentGrap">
            <i class="fas fa-arrows-alt"></i>
        </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne' . $i . '" aria-expanded="false" aria-controls="flush-collapseOne' . $i . '">
         ' . $competence->nomCompetence . ' 
         </button>
         </h2>
         <div id="flush-collapseOne' . $i . '" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
           <div class="accordion-body">
                            <div class="columnField">
                                <input type="text" name="nomCompetence" id="nomCompetence" class="MonLongchamp" value=" ' . $competence->nomCompetence . ' " placeholder="Libellé de compétence">
                                <input type="text" name="detailCompetence" id="Monchamp" class="MonLongchamp" value=" ' . $competence->outils . '" placeholder="Outils1, Outils2...">
                                <input type="number" min="0" max="100" name="niveauMaitrise" id="Monchamp" class="MonLongchamp" value="' . $competence->pourcentageMaitrise . '" placeholder="Niveau de maitrise">
                            </div>
                            <div class="contentTwoButton">
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
                                <button onclick="" type="submit" name="sendEmailButton" class="btn btn-primary" >Appliquer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>';
        }
        ?>
    </ul>
    <div class="contentGrap">
        <i class="fas fa-arrow"></i>
    </div>
</form>