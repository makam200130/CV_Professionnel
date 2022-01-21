<div class="accordion" id="accordionExample">
<div class="contentAddButton">
    <button onclick="" type="submit" name="sendEmailButton" class="btn btn-success" >Ajouter</button>
</div>
    <?php
    $i = 0;
    $j=0;
    foreach ($allExperiences as $prof) {
        $i++;
        $j++;
        $date1=date_create($prof->dateDebut);
        $date2=date_create($prof->dateFin);
        echo ' <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne'.$i.''.$j.'" aria-expanded="false" aria-controls="flush-collapseOne'.$i.''.$j.'">
                ' . $prof->libelle . ' </button>
                </h2>
                <div id="flush-collapseOne'.$i.''.$j.'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                    
                        <div class="columnField">
                        <input type="text" name="nomCompetence" id="nomCompetence" class="MonLongchamp" value=" ' . $prof->libelle . ' " placeholder="Libellé de compétence">
                        <input type="text" name="detailCompetence" id="Monchamp" class="MonLongchamp" value=" ' . $prof->infrastructure . '" placeholder="Outils1, Outils2...">
                        <div class="doubleField">
                            <input type="date" name="dateDebut" id="Monchamp" class="Monchamp" value="' . date_format($date1,'Y-m-d') . '" placeholder="Date de debut">
                            <input type="date" name="dateFin" id="Monchamp" class="Monchamp" value="' . date_format($date2,'Y-m-d') . '" placeholder="Date de fin">
                        </div>
                        <input type="text" name="niveauMaitrise" id="Monchamp" class="MonLongchamp" value="' . $prof->lien . '" placeholder="Niveau de maitrise">
                        <input type="text" name="niveauMaitrise" id="Monchamp" class="MonLongchamp" value="' . $prof->detail . '" placeholder="Niveau de maitrise">
                        <div class="contentTwoButton">
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
                                <button onclick="" type="submit" name="sendEmailButton" class="btn btn-primary" >Appliquer</button>
                        </div>
                    </div>
                    </div>
                            </div>
                        </div>';
    }
    ?>

</div>