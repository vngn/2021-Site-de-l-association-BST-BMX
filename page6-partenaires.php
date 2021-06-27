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

<body class="fond-partenaires">
    <div class="bloc-page">
        <?php
                require "menu.php";
            ?>
    </div>

    <section id="partenaires" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-partenaires partenaires h1black">Liste de nos partenaires</h1>
        </div>

        <div class="bloc-partie fond-bloc partenaire-bloc">
            <div class="row">
                <div class="col-6">
                    <h2>LC RENOV</h2>
                    <p>9 Grande Rue<br>
                        60430 Abbecourt<br>
                        Tel: 06 49 81 01 42<br>
                        <a href="https://www.facebook.com/lcrenov/"
                            target="_blank">https://www.facebook.com/lcrenov/</a>
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/lcrenov.png" alt="logo partenaire" class="logo-partenaire">
                </div>
            </div>
        </div>

        <div class="bloc-partie fond-bloc partenaire-bloc">
            <div class="row">
                <div class="col-6">
                    <h2>AU VELO</h2>
                    <p>427 Route de Paris<br>
                        60600 Breuil-le-Vert<br>
                        Tel: 03 44 50 34 10<br>
                        <a href="https://www.auvelo.com/" target="_blank">https://www.auvelo.com/</a>
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/auvelo.png" alt="logo partenaire" class="logo-partenaire">
                </div>
            </div>
        </div>

        <div class="bloc-partie fond-bloc partenaire-bloc">
            <div class="row">
                <div class="col-6">
                    <h2>BAILLEUL SUR THERAIN</h2>
                    <p>Place Maurice Segonds<br>
                        60930 Bailleul-sur-Thérain<br>
                        Tel: 03 44 07 65 49<br>
                        <a href="https://www.bailleulsurtherain.fr/"
                            target="_blank">https://www.bailleulsurtherain.fr/</a>
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/bst.jpg" alt="logo partenaire" class="logo-partenaire">
                </div>
            </div>
        </div>

        <div class="bloc-partie fond-bloc partenaire-bloc">
            <div class="row">
                <div class="col-6">
                    <h2>RIDER UNIK</h2>
                    <p>12 Chemin des Passants<br>
                        60510 Bresles<br>
                        Tel: 03 64 19 45 40<br>
                        <a href="https://www.riderunik.com/" target="_blank">https://www.riderunik.com/</a>
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/riderunik.png" alt="logo partenaire" class="logo-partenaire">
                </div>
            </div>
        </div>

        <div class="bloc-partie fond-bloc partenaire-bloc">
            <div class="row">
                <div class="col-6">
                    <h2>FUNBIKE BEAUVAIS</h2>
                    <p>47 rue saint pierre<br>
                        60000 Beauvais<br>
                        Tel: 09 81 49 86 07 <br>
                        <a href="https://www.facebook.com/funbike.beauvais/"
                            target="_blank">https://www.facebook.com/funbike.beauvais/</a>
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/funbike.png" alt="logo partenaire" class="logo-partenaire">
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="bloc-page footer">
            <?php
                require "footer.php";
            ?>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>

</html>