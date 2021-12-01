<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/index.css">
    <title>CVProfessionel</title>
</head>
<body>
    <div class="conteneur">
        <?php 
            include "profile.php";
            include "competences.php"; 
        ?>
        <div class="conteneur2">
            <?php 
                include "experience.php";
                include "interetetlangue.php";
                include "cursus.php"; 
            ?>
        </div>
    </div>
</body>

</html>