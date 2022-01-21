<?php
$date_naiss_format = date_create($pernonne1->getDateNaissance());
?>
<form action="" method="post">
    <div class="contentImagefield">
        <div style="position: relative;">
            <div>Profil</div>
            <img id="previewProfilImage" class="previewProfilImage" src="../<?php echo $pernonne1->getPhotoProfil() ?>">
            <input type="file" id="imagefieldprofil" name="image" accept="image/png, image/jpeg, image/jpg" style="display: none;" onchange="chargeProfil(this);">
            <label for="imagefieldprofil" class="smallImagePicker" id="labelProfil"><i class="fas fa-camera"></i></label>
        </div>
        <div style="position: relative;">
            <div>Couverture</div>
            <img id="previewCoverImage" src="../<?php echo $pernonne1->getPhotoCouverture() ?>" class="previewProfilImage">
            <input type="file" id="imagefieldCover" name="image" accept="image/png, image/jpeg, image/jpg" style="display: none;" onchange="chargeCouverture(this);">
            <label for="imagefieldCover" class="smallImagePicker" id="labelCouverture"><i class="fas fa-images"></i></label>
        </div>
    </div>
    <div class="doubleField">
        <input type="text" name="nom" id="champEditNom" class="Monchamp" value="<?php echo $pernonne1->getNom() ?>" placeholder="Nom">
        <input type="text" name="prenom" id="champEditPrenom" class="Monchamp" value="<?php echo $pernonne1->getPrenom() ?>" placeholder="Prenom">
    </div>
    <div class="doubleField">
        <input type="text" name="metier" id="champEditMetier" class="Monchamp" value="<?php echo $pernonne1->getMetier() ?>" placeholder="Metier">
        <input type="date" name="dateNaissance" id="champEditDate" class="Monchamp" value="<?php echo date_format($date_naiss_format, 'Y-m-d') ?>" placeholder="Né le">
    </div>
    <div class="doubleField">
        <input type="text" name="regionOrigine" id="champEditRegion" class="Monchamp" value="<?php echo $pernonne1->getRegionOrigine() ?>" placeholder="Region d'origine">
        <input type="text" name="paysOrigine" id="champEditPays" class="Monchamp" value="<?php echo $pernonne1->getPaysOrigine() ?>" placeholder="Pays d'origine">
    </div>
    <div class="doubleField">
        <select type="text" name="statutMatrimonial" id="Monchamp" class="Monchamp" placeholder="Statut matrimoniale">
            <option value="0"><?php echo $pernonne1->getStatutMatrimonial() ?></option>
            <option value="1">Célibataire</option>
            <option value="2">Marié(e)</option>
            <option value="3">Divorcé(e)</option>
            <option value="1">Veuf/Veuve</option>
        </select>
        <input type="number" min="0" name="metier" id="Monchamp" class="Monchamp" value='<?php echo $pernonne1->getNombreEnfant() ?>' placeholder="Nombre d'enfant">
    </div>
    <div class="tripleField">
        <input type="text" name="regionOrigine" id="Monchamp" class="MonPetitchamp" value="<?php echo $pernonne1->getVilleResidence() ?>" placeholder="Ville de residence">
        <input type="text" name="paysOrigine" id="Monchamp" class="MonPetitchamp" value="<?php echo $pernonne1->getPaysResidence() ?>" placeholder="Pays de residence">
        <input type="text" name="paysOrigine" id="Monchamp" class="MonPetitchamp" value="<?php echo $pernonne1->getQuartier() ?>" placeholder="Quartier">
    </div>
    <div class="doubleField">
        <input type="tel" name="regionOrigine" id="Monchamp" class="Monchamp" value="<?php echo $pernonne1->getTelephone() ?>" placeholder="Telephone">
        <input type="email" name="paysOrigine" id="Monchamp" class="Monchamp" value="<?php echo $pernonne1->getMail() ?>" placeholder="Adresse mail">
    </div>
    <div class="doubleField">
        <input type="number" name="regionOrigine" id="Monchamp" class="Monchamp" value="<?php echo $pernonne1->getNombreProjet() ?>" placeholder="Nombre de projet">
        <input type="number" name="paysOrigine" id="Monchamp" class="Monchamp" value="<?php echo $pernonne1->getNombreContrat() ?>" placeholder="Nombre de contrat">
    </div>
    <div class="geolocationGroup">
        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 200px">
            <iframe src="https://maps.google.com/maps?q=douala&t=&z=13&ie=UTF8&iwloc=&output=embed" id="map-link" frameborder="0" style="border:0; border-radius:5px;" allowfullscreen></iframe>
            <!-- <iframe src="https://www.google.com/maps?ll=4.049577,9.765323&z=13&t=m&hl=fr-FR&gl=US&mapclient=embed&q=Douala" frameborder="0" style="border:0; border-radius:5px;" allowfullscreen></iframe> -->
        </div>
        <div class="properlyCoordonate">
            <div class="locationButton" id="locationButton"><i class="fas fa-map-pin" style="font-size: 2em;color:#12609E;"></i></div>
            <div class="" id="longitude"> Cliquer pour vous localiser: </div>
            <input type="text" name="paysOrigine" id="champLongitude" class="Monchamp" value="<?php echo $pernonne1->getLongituteResidence() . ' , ' . $pernonne1->getLatitudeResidence() ?>" placeholder="0.00000 ,0.00000" disabled>
        </div>
    </div>
</form>