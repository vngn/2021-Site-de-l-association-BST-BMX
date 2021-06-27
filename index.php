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

<body class="fond-accueil">
    <div class="bloc-page">
        <?php
                require "menu.php";
            ?>
    </div>

    <div>
        <video class="video" controls autoplay="true" loop muted>
            <source src="images/video.mp4" type="video/mp4">
        </video>
    </div>

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