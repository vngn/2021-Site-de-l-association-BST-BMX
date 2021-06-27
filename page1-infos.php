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

<body class="fond-infos">
    <div class="bloc-page">
        <?php
                require "menu.php";
            ?>
    </div>

    <section id="news" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos news h1white">News</h1>
            <hr>
            <p>Nouvelle compétition organisée le 12/09/2021 au BST BMX dans le cadre des compétitions de coupe
                d’automne Hauts de France.
            </p>
        </div>
    </section>

    <section id="agenda" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos agenda h1white">Agenda</h1>
            <hr>
            <p>Agenda des activités du club :

                <iframe
                    src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FParis&amp;src=ZnIuZnJlbmNoI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%230B8043"
                    class="agenda-online" frameborder="0" scrolling="no"></iframe>
            </p>
        </div>
    </section>

    <section id="sondage" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos sondage h1white">Sondage</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque semper, elit id ullamcorper mollis,
                risus nisl gravida lorem, dictum pellentesque tellus mauris fringilla libero. Nam molestie dui eu
                molestie cursus. Proin eget velit vitae nunc varius ullamcorper in ac sapien. Aliquam consectetur in
                sem
                vitae scelerisque. Nullam accumsan aliquet neque, et pellentesque purus malesuada ac. Pellentesque
                interdum nisi a tortor lacinia efficitur. Quisque fermentum arcu tempus ipsum fermentum, in rutrum
                tortor aliquam. Mauris massa risus, sollicitudin a molestie sit amet, condimentum eu dolor. Nam
                ultricies vel metus in rhoncus. Nunc tempor arcu sed nisl commodo molestie. Aliquam erat volutpat.
                Aenean id lacinia est, at gravida nisi. Nulla vehicula magna id metus cursus, non dictum nisi
                hendrerit.

                Fusce vel lacus interdum, lobortis mauris non, euismod felis. Phasellus vitae pulvinar lectus. Donec
                viverra, felis vel accumsan convallis, velit mi bibendum erat, id laoreet erat dolor consectetur
                tortor.
                Vestibulum at dictum enim. Nam interdum in ligula sit amet lobortis. Nunc quis massa elit. Nullam
                sapien
                justo, tempor ac turpis ac, imperdiet viverra metus. Praesent rutrum magna at lectus tempor
                ultricies.
                Donec pellentesque fermentum gravida. Nulla facilisi. Suspendisse cursus pharetra nulla sit amet
                tincidunt.
            </p>
        </div>
    </section>

    <section id="piste" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos piste h1white">La piste</h1>
            <hr>
            <p class="p-modal">Cliquer sur une photo pour l'agrandir</p>
            <div class="photos-piste">
                <a class="example-image-link" href="images/piste01.jpg" data-lightbox="example-set"
                    data-title="La piste"><img class="example-image photo" src="images/piste01.jpg" height=108 px
                        alt="photo de la piste" /></a>
                <a class="example-image-link" href="images/piste02.jpg" data-lightbox="example-set"
                    data-title="La piste"><img class="example-image photo" src="images/piste02.jpg" height=108 px
                        alt="photo de la piste" /></a>
                <a class="example-image-link" href="images/piste03.jpg" data-lightbox="example-set"
                    data-title="La piste"><img class="example-image photo" src="images/piste03.jpg" height=108 px
                        alt="photo de la piste" /></a>
                <a class="example-image-link" href="images/piste04.jpg" data-lightbox="example-set"
                    data-title="La piste"><img class="example-image photo" src="images/piste04.jpg" height=108 px
                        alt="photo de la piste" /></a>
                <a class="example-image-link" href="images/piste05.png" data-lightbox="example-set"
                    data-title="La piste"><img class="example-image photo" src="images/piste05.png" height=108 px
                        alt="photo de la piste" /></a>
                <a class="example-image-link" href="images/piste06.png" data-lightbox="example-set"
                    data-title="La piste"><img class="example-image photo" src="images/piste06.png" height=108 px
                        alt="photo de la piste" /></a>
            </div>
        </div>
    </section>

    <section id="coordonnees" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos contact h1white">Coordonnées</h1>
            <hr>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.6301929268698!2d2.228182015692838!3d49.378069979341845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7ad9cb4528c91%3A0x98dc46fdb99b93a0!2sBMX%20OISE%20%22BST%20BMX%22%20Bailleul-sur-Th%C3%A9rain!5e0!3m2!1sfr!2sfr!4v1618661633279!5m2!1sfr!2sfr"
                class="google-map" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <section id="contact" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos contact h1white">Contact</h1>
            <hr>
            <p>Pour nous contacter :</p>
            <p>- <a href="mailto:bmxbailleulsurtherain@gmail.com">bmxbailleulsurtherain@gmail.com</span></a></p>
            <p>- <a href="https://www.facebook.com/groups/472046553278938" target="_blank">notre page facebook</a>
            </p>
        </div>
    </section>

    <section id="galerie" class="id">
        <div class="bloc-partie fond-bloc">
            <h1 class="fond-titres-infos galerie h1white">Galerie</h1>
            <hr>
            <p class="p-modal">Cliquer sur une photo pour l'agrandir</p>
            <div class="photos-galerie">
                <a class="example-image-link" href="images/01.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/01.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/02.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/02.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/03.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/03.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/04.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/04.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/05.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/05.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/06.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/06.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/07.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/07.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/08.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/08.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/09.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/09.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/10.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/10.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/11.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/11.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/12.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/12.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/13.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/13.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/14.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/14.jpg" height=108 px
                        alt="photo de la galerie" /></a>
                <a class="example-image-link" href="images/15.jpg" data-lightbox="example-set2"
                    data-title="Galerie"><img class="example-image photo" src="images/15.jpg" height=108 px
                        alt="photo de la galerie" /></a>
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

    <!-- ============================== xx. JS POUR MODAL IMAGES ============================== -->
    <script src="lightbox-plus-jquery.js"></script>
</body>

</html>