<?php Class Personne
{
    public $nom;
    public $prenom;
    public $photoProfil;
    public $photoCouverture;
    public $metier;
    public $dateNaissance;
    public $paysOrigine;
    public $regionOrigine;
    public $statutMatrimonial;
    public $nombreEnfant;
    public $statutSante;
    public $quartier;
    public $paysResidence;
    public $villeResidence;
    public $longituteResidence;
    public $latitudeResidence;
    public $telephone;
    public $contactMobile;
    public $contactElectronique;
    public $mail;
    public $nombreProjet;
    public $nombreContrat;
    public $anneeExperience;

    public function __construct($nom,$prenom,$photoProfil,$photoCouverture,$metier,$dateNaissance,$paysOrigine,$regionOrigine,$statutMatrimonial,$nombreEnfant,
                                $statutSante,$quartier,$paysResidence,$villeResidence,$longituteResidence,$latitudeResidence,$telephone,
                                $contactMobile,$contactElectronique,$mail,$nombreProjet,$nombreContrat,$anneeExperience){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->photoProfil=$photoProfil;
        $this->photoCouverture=$photoCouverture;
        $this->metier=$metier;
        $this->dateNaissance=$dateNaissance;
        $this->paysOrigine=$paysOrigine;
        $this->regionOrigine=$regionOrigine;
        $this->statutMatrimonial=$statutMatrimonial;
        $this->nombreEnfant=$nombreEnfant;
        $this->statutSante=$statutSante;
        $this->quartier=$quartier;
        $this->paysResidence=$paysResidence;
        $this->villeResidence=$villeResidence;
        $this->longituteResidence=$longituteResidence;
        $this->latitudeResidence=$latitudeResidence;
        $this->telephone=$telephone;
        $this->contactMobile=$contactMobile;
        $this->contactElectronique=$contactElectronique;
        $this->mail=$mail;
        $this->nombreProjet=$nombreProjet;
        $this->nombreContrat=$nombreContrat;
        $this->anneeExperience=$anneeExperience;
    }

    public function __destruct(){
        
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return ucfirst($this->nom);
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return ucfirst($this->prenom);
    }

    public function setPhotoProfil($photoProfil){
        $this->photoProfil = $photoProfil;
    }
    public function getPhotoProfil(){
        return $this->photoProfil;
    }

    public function setPhotoCouverture($photoCouverture){
        $this->photoCouverture = $photoCouverture;
    }
    public function getPhotoCouverture(){
        return $this->photoCouverture;
    }

    public function setMetier($metier){
        $this->metier = $metier;
    }
    public function getMetier(){
        return $this->metier;
    }

    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }
    public function getDateNaissance(){
        return $this->dateNaissance;
    }

    public function setPaysOrigine($paysOrigine){
        $this->paysOrigine = $paysOrigine;
    }
    public function getPaysOrigine(){
        return $this->paysOrigine;
    }

    public function setRegionOrigine($regionOrigine){
        $this->regionOrigine = $regionOrigine;
    }
    public function getregionOrigine(){
        return $this->regionOrigine;
    }

    public function setStatutMatrimonial($statutMatrimonial){
        $this->statutMatrimonial = $statutMatrimonial;
    }
    public function getstatutMatrimonial(){
        return $this->statutMatrimonial;
    }

    public function setNombreEnfant($nombreEnfant){
        $this->nombreEnfant = $nombreEnfant;
    }
    public function getNombreEnfant(){
        return $this->nombreEnfant;
    }

    public function setStatutSante($statutSante){
        $this->statutSante = $statutSante;
    }
    public function getStatutSante(){
        return $this->statutSante;
    }

    public function setQuartier($quartier){
        $this->quartier = $quartier;
    }
    public function getQuartier(){
        return $this->quartier;
    }

    public function setPaysResidence($paysResidence){
        $this->paysResidence = $paysResidence;
    }
    public function getpaysResidence(){
        return $this->paysResidence;
    }

    public function setVilleResidence($villeResidence){
        $this->villeResidence = $villeResidence;
    }
    public function getVilleResidence(){
        return $this->villeResidence;
    }

    public function setLongituteResidence($longituteResidence){
        $this->longituteResidence = $longituteResidence;
    }
    public function getLongituteResidence(){
        return $this->longituteResidence;
    }

    public function setLatitudeResidence($latitudeResidence){
        $this->latitudeResidence = $latitudeResidence;
    }
    public function getLatitudeResidence(){
        return $this->latitudeResidence;
    }

    public function setTelephone($telephone){
        $this->telephone = $telephone;
    }
    public function getTelephone(){
        return $this->telephone;
    }

    public function setContactMobile($contactMobile){
        $this->contactMobile = $contactMobile;
    }
    public function getContactMobile(){
        return $this->contactMobile;
    }

    public function setContactElectronique($contactElectronique){
        $this->contactElectronique = $contactElectronique;
    }
    public function getContactElectronique(){
        return $this->contactElectronique;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }
    public function getMail(){
        return $this->mail;
    }

    public function setNombreProjet($nombreProjet){
        $this->nombreProjet = $nombreProjet;
    }
    public function getnombreProjet(){
        return $this->nombreProjet;
    }

    public function setnombreContrat($nombreContrat){
        $this->nombreContrat = $nombreContrat;
    }
    public function getNombreContrat(){
        return $this->nombreContrat;
    }

    public function setanneeExperience($anneeExperience){
        $this->anneeExperience = $anneeExperience;
    }
    public function getanneeExperience(){
        return $this->anneeExperience;
    }
}

$pernonne1 =new Personne("MAKAM","Filiane",'image/prof1.jpg','imagecv/fond.jpg',"Programmeur web / mobile",'30-07-2001',"Cameroun","Ouest","Célibataire",
                                0,"RAS","PK8","Cameroun","Douala","2.0906348","9.9677974","657 390 667",
                                "Télégram, Whatsapp, Mobile","Gmail, Twitter, Linkedin, Github","makamfiliane01@gmail.com",
                                10,03,02);
?>