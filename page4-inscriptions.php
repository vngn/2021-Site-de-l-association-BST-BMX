<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BST BMX</title>
    <meta name="description" content="BST BMX" />

    <!-- icons -->
    <script src="https://kit.fontawesome.com/dc423ef783.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    

        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="fond-courses">
    <div class="bloc-page">
        <?php
                require "menu.php";
            ?>
    </div>

    <section id="courses" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-courses inscriptions h1white">Inscriptions courses régionales</h1>
            <hr>
            <p>Inscription des pilotes pour les courses organisées par la FFC (avec licence spécifique) ou par les
                clubs
                UNIQUEMENT possible physiquement à la piste (voir feuille d’inscription dans le bureau).</p>
            <p>Dernier délai de règlement possible 1 SEMAINE avant l’événement.</p>
            <p>Voir contact du club : <span class="lien"><a
                        href="mailto:bmxbailleulsurtherain@gmail.com">bmxbailleulsurtherain@gmail.com</span></a> ou
                <a href="https://www.facebook.com/groups/472046553278938/about/" target="_blank">
                    facebook</a> du BST BMX + insertion des documents :
            </p>
        </div>
    </section>

    <section id="stages" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-courses stages h1white">Stages</h1>
            <hr>
            <p>Le BST BMX proposera bientôt des stages d’encadrements et de perfectionnements destinés aux pilotes
                extérieurs ainsi que les pilotes du club (entrainement par Mr.Nion).
            </p>

            <p>En raison de la situation sanitaire et de l’adoption d’un protocole sanitaire stricte, nous ne
                pouvons encore définir de dates précises.</p>

            <p>Cependant une inscription reste obligatoire afin de participer au stage car les places restent
                limitées.</p>
        </div>
    </section>

    <section id="vacances" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-courses vacances h1white">Vacances sportives</h1>
            <hr>
            <p>En raison de la situation sanitaire et de l’adoption d’un protocole sanitaire stricte, nous ne
                pouvons encore définir d’évènements précis.
            </p>
        </div>
    </section>

    <div class="bloc-page footer">
        <?php
                require "footer.php";
            ?>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>

</html>