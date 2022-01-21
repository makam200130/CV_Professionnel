<form action="" method="post">
<div class="contentAddButton">
    <button onclick="" type="submit" name="sendEmailButton" class="btn btn-success" >Ajouter</button>
</div>
    <ul id="sortable">

        <?php
        $i = 0;
        $j=0;
        $k=0;
        $m=0;
        foreach ($imagesLoisir as $pleasure) {
            $i++;
            $j++;
            $k++;
            $m++;
            echo '<li class="ui-state-default">
            <div class="contentGrap">
            <i class="fas fa-arrows-alt"></i>
        </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne' . $i . '' . $j . '' . $k . '' . $m . '" aria-expanded="false" aria-controls="flush-collapseOne' . $i . '' . $j . '' . $k . '' . $m . '">
         ' . $pleasure->imageLoisir . ' 
         <img id="smallCirclePleasure' . $i . '' . $j . '' . $k . '' . $m . '" class="smallCirclePleasure" >
         </button>
         </h2>
         <div id="flush-collapseOne' . $i . '' . $j . '' . $k . '' . $m . '" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
           <div class="accordion-body">
                            <div class="columnField">
                                <div class="contentImagePicker">
                                    <img id="previewLoisirImage' . $i . '" class="previewProfilImage" src="../' . $pleasure->imageLoisir . '">
                                    <input type="file" id="imagefieldloisir' . $i . '" name="image" accept="image/png, image/jpeg, image/jpg" style="display: none;" onchange="chargeLoisir' . $i . '(this);">
                                    <label for="imagefieldloisir' . $i . '" class="smallImagePicker2" id="labelLoisir' . $i . '"><i class="fas fa-camera"></i></label>
                                </div>
                            </div>
                            <div class="contentTwoButton">
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
                                <button onclick="" type="submit" name="sendEmailButton" class="btn btn-primary" >Appliquer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>';
            echo '<script>
            function chargeLoisir' . $i . '(input) {
            var url = input.value;
            // var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files || input.files[0]) {
                var reader = new FileReader();
                document.getElementById("labelLoisir' . $i . '").className = "smallImagePicker2";
                document.getElementById("previewLoisirImage' . $i . '").className = "previewProfilImage";
                reader.onload = function(e) {
                    $("#previewLoisirImage' . $i . '").attr("src", e.target.result);
                    $("#indexLoisir' . $i . '").attr("src", e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
        
            } else {
                $("#previewLoisirImage1").attr("src", "../image/error_30px.png");
            }
        }
        </script>';
        }
        ?>
    </ul>
    <div class="contentGrap">
        <i class="fas fa-arrow"></i>
    </div>
</form>
