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

<body class="fond-adhesions">
    <div class="bloc-page">
        <?php
                require "menu.php";
            ?>
    </div>

    <section id="adhesions" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-adhesions adhesions h1black">Adhésions annuelles</h1>
            <hr>
            <ul>
                <li>
                    Formulaire d'inscription à renseigner <a href="images/inscription2019bmx.pdf"
                        target="_blank">(cliquer sur ce lien
                        pour accéder à sa version pdf)</a>
                </li>
                <div class="bloc-adhesion">
                    <img src="images/inscription-page1.png" alt="formulaire d'inscription page 1"
                        class="image-adhesion">
                    <img src="images/inscription-page2.png" alt="formulaire d'inscription page 2"
                        class="image-adhesion">
                </div>
                <br>
                <li>
                    Protocole sanitaire à consulter <a href="images/protocole-sanitaire.pdf" target="_blank">(cliquer
                        sur ce lien
                        pour accéder à sa version pdf)</a>
                </li>
                <br>
                <li>
                    Règlement intérieur à consulter <a href="images/reglement-interieur.pdf" target="_blank">(cliquer
                        sur ce lien
                        pour accéder à sa version pdf)</a>
                </li>
            </ul>
        </div>
    </section>

    <section id="horaires" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-adhesions horaires h1black">Horaires d'ouverture</h1>
            <hr>
            <p>Le mercredi de 14h à 17h :</p>
            <ul>
                <li>premier entrainement de 14h00 à 15h15</li>
                <li>premier entrainement de 15h30 à 16h45</li>
            </ul>
            <p>Le samedi de 9h à 12h00 :</p>
            <ul>
                <li>premier entrainement de 9h00 à 10h15</li>
                <li>premier entrainement de 10h30 à 11h45</li>
            </ul>
            <p>Le dimanche en libre de 10h à 12h.</p>
            <p>Les essais :</p>
            <ul>
                <li>mercredi de 15h15 à 15h45</li>
                <li>samedi de 10h 15 à 10h45</li>
            </ul>
        </div>
    </section>

    <section id="licence" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-adhesions licence h1black">Licence</h1>
            <hr>
            <p>Tableau des tarifs licences 2020 <a href="images/tarif-licences-2020.pdf" target="_blank">(cliquer
                    sur ce lien
                    pour accéder à sa version pdf)</a>
            </p>
            <div class="bloc-licence">
                <img src="images/tarif-licences.png" alt="Tableau des tarifs licences 2020" class="image-licences">
            </div>
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