<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/edit.css">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script src="view/style.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">
            <img src="image/cvlogo" width="27px" height="27px" alt=""> 
        </a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" 
        aria-expanded="true" aria-label="Toggle navigation">
        <img class="fas fa-bars text-white" src="image/menu.png" alt="">
        <i class="fas fa-bars text-white" background="image/menu.png"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link  " id="accel" href="#accel"><i class="fas fa-tachometer-alt"></i>acceuil</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " id="prof" href="#prof"><i class="far fa-address-book"></i>informations personnelle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="comp" href="#comp"><i class="far fa-clone"></i>competences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="expProf" href="#expProf"><i class="far fa-calendar-alt"></i>experiences professionelle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="pointInt" href="#pointInt"><i class="far fa-chart-bar"></i>points interets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="lang" href="#lang"><i class="far fa-copy"></i>langue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="expAc" href="#expAc"><i class="far fa-copy"></i>experiences academique</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="containtNav">
    <div class="accel">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab ipsam nisi praesentium sapiente dicta 
        id minus temporibus modi commodi rem. At eos quia corrupti sequi amet eveniet tenetur dolorum libero!
    </div>
    <div class="prof" style="display: none;">profile</div>
    <div class="comp" style="display: none;" >comp</div>
    <div class="expProf" style="display: none;">profe</div>
    <div class="pointInt" style="display: none;" >point interet</div>
    <div class="lang" style="display: none;" >langue</div>
    <div class="expAc" style="display: none;">academique</div>
    </div>
</body>
</html>