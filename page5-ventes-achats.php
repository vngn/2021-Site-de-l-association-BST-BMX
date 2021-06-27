<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BST BMX</title>
    <meta name="description" content="BST BMX" />

    <!-- icones -->
    <script src="https://kit.fontawesome.com/dc423ef783.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
 

        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- lightbox CSS -->
    <link rel="stylesheet" href="lightbox.css">
</head>

<body class="fond-ventes-achats">
    <div class="bloc-page">
        <?php
                require "menu.php";
            ?>
    </div>

    <section id="annonces" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-ventes-achats annonces h1black">Publications des annonces de ventes</h1>
            <hr>
            <p>Vous souhaitez donner plus de visibilité à vos annonces de ventes de matériels?</p>
            <p>Contactez nous à <span class="lien"><a
                        href="mailto:bstbmx.annonces.ventes.achats@gmail.com">bstbmx.annonces.ventes.achats@gmail.com</span></a>
                afin que nous puissions publier votre
                lien d'annonce sans frais de votre part sur notre site internet.</p>
            <hr>
            <p class="p-modal">Cliquer sur une photo pour l'agrandir</p>
            <div class="bloc-vente">
                <a class="example-image-link" href="images/vente01.png" data-lightbox="example-set4"
                    data-title="Annonce"><img class="example-image photo articles-vente" src="images/vente01.png"
                        alt="vente01" /></a>
                <a class="example-image-link" href="images/vente02.png" data-lightbox="example-set4"
                    data-title="Annonce"><img class="example-image photo articles-vente" src="images/vente02.png"
                        alt="vente01" /></a>
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

    <!-- ============================== xx. JS POUR MODAL IMAGES ============================== -->
    <script src="lightbox-plus-jquery.js"></script>
</body>

</html>