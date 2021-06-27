<?php
$ApiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=Bailleul-sur-Thérain&units=metric&appid=7a28ac9b054e2ff1460f3bf30e33db92&lang=fr';

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $ApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response);

$currentTime = time();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class=" container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" class="logo"></a>
        <div class="report-container bloc-meteo">
            <div class="weather-forecast">
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                    class="weather-icon" alt="meteo" />
                <span class="temperature"><?php echo $data->main->temp; ?>°C</span>
                <span>/ <a href="https://openweathermap.org/city/3035351" target="_blank" class="lien">+
                        d'infos</a></span>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="page1-infos.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Infos
                    </a>
                    <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <img src="./images/01.jpg" class="img-fluid image-nav" alt="">
                        <div class="d-flex align-items-start flex-column flex-sm-row p-3">
                            <div>
                                <a class="dropdown-item" href="page1-infos.php#news">News</a>
                                <a class="dropdown-item" href="page1-infos.php#agenda">Agenda</a>
                                <a class="dropdown-item" href="page1-infos.php#sondage">Sondage</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page1-infos.php#piste">La piste</a>
                                <a class="dropdown-item" href="page1-infos.php#coordonnees">Coordonnées</a>
                                <a class="dropdown-item" href="page1-infos.php#contact">Contact</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page1-infos.php#galerie">Galerie</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="page2-club.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Le club
                    </a>
                    <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <img src="./images/02.jpg" class="img-fluid image-nav" alt="">
                        <div class="d-flex align-items-start flex-column flex-sm-row p-3">
                            <div>
                                <a class="dropdown-item" href="page2-club.php#activites">Nos activités</a>
                                <a class="dropdown-item" href="page2-club.php#historique">Historique du club</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page2-club.php#maillots">Maillots</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page2-club.php#bureau">Le bureau</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="page3-adhesions.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Adhésion
                    </a>
                    <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <img src="./images/07.jpg" class="img-fluid image-nav" alt="">
                        <div class="d-flex align-items-start flex-column flex-sm-row p-3">
                            <div>
                                <a class="dropdown-item" href="page3-adhesions.php#adhesions">Adhésions
                                    annuelles</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page3-adhesions.php#horaires">Horaires
                                    d'ouverture</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page3-adhesions.php#licence">Licence</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="page4-inscriptions.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inscription courses
                    </a>
                    <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <img src="./images/15.jpg" class="img-fluid image-nav" alt="">
                        <div class="d-flex align-items-start flex-column flex-sm-row p-3">
                            <div>
                                <a class="dropdown-item" href="page4-inscriptions.php#courses">Courses
                                    régionales</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page4-inscriptions.php#stages">Stages</a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="page4-inscriptions.php#vacances">Vacances
                                    sportives</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="page5-ventes-achats.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vente-achat de matériels
                    </a>
                    <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <img src="./images/31.jpg" class="img-fluid image-nav" alt="">
                        <div class="d-flex align-items-start flex-column flex-sm-row p-3">
                            <div>
                                <a class="dropdown-item" href="page5-ventes-achats.php#annonces">Publications des
                                    annonces de ventes</a>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="page6-partenaires.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos partenaires
                    </a>
                    <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <img src="./images/c04.jpg" class="img-fluid image-nav" alt="">
                        <div class="d-flex align-items-start flex-column flex-sm-row p-3">
                            <div>
                                <a class="dropdown-item" href="page6-partenaires.php#partenaires">Listes et
                                    liens</a>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.facebook.com/groups/472046553278938/about/" target="_blank">
                        <i class="fab fa-facebook-square facebook-icon"></i>
                        <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>