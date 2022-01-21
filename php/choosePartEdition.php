<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
require 'experience.php';
require 'classPersonne.php';
require 'classCompetence.php';
require 'classProfession.php';
require 'classLangue.php';
require 'classLoisir.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="../js/preview.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/edition.css">
    <link rel="stylesheet" href="../fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="../css/previewFinalCV.css">
    <script src="../js/preview.js" defer></script>

    <title>Edition cv</title>
</head>

<body>
    <div class="bigContentEdition">
        <div class="hereYouEdit">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-person-tab" data-toggle="tab" href="#nav-person" role="tab" aria-controls="nav-person" aria-selected="true">Profile</a>
                    <a class="nav-item nav-link" id="nav-competence-tab" data-toggle="tab" href="#nav-competence" role="tab" aria-controls="nav-competence" aria-selected="false">Comptetence</a>
                    <a class="nav-item nav-link" id="nav-prof-tab" data-toggle="tab" href="#nav-prof" role="tab" aria-controls="nav-prof" aria-selected="false">Exp Professionnelle</a>
                    <a class="nav-item nav-link" id="nav-langue-tab" data-toggle="tab" href="#nav-langue" role="tab" aria-controls="nav-langue" aria-selected="false">Langue</a>
                    <a class="nav-item nav-link" id="nav-pleasure-tab" data-toggle="tab" href="#nav-pleasure" role="tab" aria-controls="nav-pleasure" aria-selected="false">Loisirs</a>
                    <a class="nav-item nav-link" id="nav-school-tab" data-toggle="tab" href="#nav-school" role="tab" aria-controls="nav-school" aria-selected="false">Exp Academique</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <!-- edit profil -->
                <div class="tab-pane fade show active" id="nav-person" role="tabpanel" aria-labelledby="nav-person-tab">
                    <div class="contentForm">
                        <?php include 'edit/editProfil.php'; ?>
                    </div>
                </div>

                <!-- edit competence -->
                <div class="tab-pane fade" id="nav-competence" role="tabpanel" aria-labelledby="nav-competence-tab">
                    <div class="contentForm">
                        <?php include 'edit/editCompetence.php'; ?>
                    </div>

                </div>

                <!-- edit prof exp -->
                <div class="tab-pane fade" id="nav-prof" role="tabpanel" aria-labelledby="nav-prof-tab">
                    <div class="contentForm">
                        <?php include 'edit/editProfessional.php'; ?>
                    </div>
                </div>

                <!-- edit langue -->
                <div class="tab-pane fade" id="nav-langue" role="tabpanel" aria-labelledby="nav-langue-tab">
                    <div class="contentForm">
                        <?php include 'edit/editLanguage.php'; ?>
                    </div>
                </div>

                <!-- edit pleasure -->
                <div class="tab-pane fade" id="nav-pleasure" role="tabpanel" aria-labelledby="nav-pleasure-tab">
                    <div class="contentForm">
                        <?php include 'edit/editLoisir.php'; ?>
                    </div>
                </div>

                <!-- edit school -->
                <div class="tab-pane fade" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab">
                    Here EDIT School
                </div>



            </div>
        </div>
        <div class="hereYouPreview">
            <div class="bigTitle " id="bigTitle ">
                <div class="titleBar ">
                    <div class="imageText">
                        <i class="fas fa-eye" style="font-size: 2em;color:white;margin-right:20px;"></i>
                        <div>
                            <div class="titleText ">Prévisualiser l'édition</div>
                            <!-- <div class="smallWhiteText "> <i>Diplôme et formation certifiante</i></div> -->
                        </div>
                    </div>
                    <i class="fas fa-align-justify" style="font-size: 1em;color:white;"></i>
                </div>
            </div>

            <!-- Profil preview -->
            <div class="activePreview" id="profilPreview">
                <?php include 'preview/generalInfo.php'; ?>
            </div>

            <!-- Comptence preview -->
            <div class="unActivePreview" id="competencePreview">
                <?php include 'preview/competence.php'; ?>
            </div>

            <!-- prof EXp preview -->
            <div class="unActivePreview" id="professionnalPreview">
                <?php include 'preview/professionnel.php'; ?>
            </div>

            <!-- pleasure preview -->
            <div class="unActivePreview" id="pleasurePreview">
                <?php include 'preview/loisir.php'; ?>
            </div>

            <!-- Language preview -->
            <div class="unActivePreview" id="languagePreview">
                    <?php include 'preview/langue.php'; ?>
            </div>

            <!-- Language preview -->
            <div class="unActivePreview" id="academicPreview">
                PREVIEW Academic
            </div>

        </div>
    </div>
</body>

</html>