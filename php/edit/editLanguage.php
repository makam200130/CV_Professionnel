<form action="" method="post">
<div class="contentAddButton">
    <button onclick="" type="submit" name="sendEmailButton" class="btn btn-success" >Ajouter</button>
</div>
        <?php
        $i = 0;
        $j=0;
        $k=0;
        foreach ($langues as $l) {
            $i++;
            $j++;
            $k++;
            echo '
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne' . $i . '' . $j . '' . $k . '" aria-expanded="false" aria-controls="flush-collapseOne' . $i . '' . $j . '' . $k . '">
         ' . $l->nomLangue . ' 
         </button>
         </h2>
         <div id="flush-collapseOne' . $i . '' . $j . '' . $k . '" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
           <div class="accordion-body">
                            <div class="columnField">
                                <input type="text" name="nomCompetence" id="nomCompetence" class="MonLongchamp" value=" ' . $l->nomLangue . ' " placeholder="Langue">
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
</form>