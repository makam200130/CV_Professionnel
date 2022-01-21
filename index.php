<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV MAKAM Filiane PHP</title>
    <link rel="stylesheet" href="css/finalCV.css">
    <link rel="stylesheet" href="css/finalCVSmall.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- <script src="js/scriptPdf.js" defer></script> -->
    <script src="js/jquery.min.js" defer></script>
    <script src="js/jszip.min.js" defer></script>
    <script src="js/kendo.all.min.js" defer></script>
    <script src="js/scriptPdf.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#E8E9E9;">
    <div class="contentAll" id="contentAll">
       <?php
            include ("php/generalInfo.php") ;
            include ("php/detailProject.php");
        ?>
       <div class="rigthBigOne" id="rigthBigOne"> 
           <?php
                require "php/experience.php";
                 include ("php/allContentScroll.php");
                 include ("php/doubleDiv.php");
                 include ("php/allContentScrollTwo.php");
            ?>
       </div>
    </div>
</body>

</html>