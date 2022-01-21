<?php


class Loisir{

    // public Personne $personne;
    //public $personne;
    public $imageLoisir;

   

    public function __construct($imageLoisir)
    {
         $this->imageLoisir=$imageLoisir;
    }

   

    public function getLoisir(){
        echo '
        <img src="'.$this->imageLoisir.'" alt=" " class="pleasureImage ">
        ';
    }
    public function getLoisirPreview(){
        echo '
        <img src="../'.$this->imageLoisir.'" alt=" " class="pleasureImage ">
        ';
    }

}



    $imagesLoisir=[
        new Loisir("imagecv/l2.png"),
        new Loisir("imagecv/l6.png"),
        new Loisir("imagecv/l1.png"),
        new Loisir("imagecv/l4.png"),
        new Loisir("imagecv/l5.png"),
        new Loisir("imagecv/l3.png"),
        new Loisir("imagecv/l6.png"),
        new Loisir("imagecv/l2.png"),
        new Loisir("imagecv/l4.png"),
        new Loisir("imagecv/l5.png"),
        new Loisir("imagecv/l6.png"),
        new Loisir("imagecv/l1.png")
    ];
    
?>