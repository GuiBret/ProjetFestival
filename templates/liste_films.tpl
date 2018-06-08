<html>
    <head>
        {include file="links.tpl" title="Les films à l'affiche"}
        <link rel="stylesheet" type="text/css" href="css/liste_films.css" />

    </head>
    <body>
        <header>
            {include file="header.tpl"}
        </header>


        <div class='container-fluid'>

            <h2 class='text-center'>Les films sélectionnés : </h2> <br />

            <p class="subtitle_list">Pour voir la description d'un film (et éventuellement de réserver des places, qui sait !), cliquez sur le nom du film sous l'affiche.</p>


                <div id="carousel-films" class="carousel slide col-12 col-md-4 offset-md-4" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#carousel-films" data-slide-to="0">
                        </li>
                        <li data-target="#carousel-films" data-slide-to="1">

                        </li>
                        <li data-target="#carousel-films" data-slide-to="2">

                        </li>
                        <li data-target="#carousel-films" data-slide-to="3">

                        </li>

                    </ul>




                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <a class="lienfilm" href="presentation_film?film=0">
                                <img src="img/film1.jpg" class="img-fluid img-rounded">
                                <div id="captionfilm"></div>
                                <h5 class="txtfilm text-center">Gran Torino</h5>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a class="lienfilm" href="presentation_film?film=1">
                                <img src="img/shutter_island.jpg" class="img-fluid img-rounded">
                                <div class="carousel-caption d-none d-md-block">
                                    <div id="captionfilm">

                                    </div>
                                    <h3 class="txtfilm">Shutter Island</h3>

                                </div>

                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="lienfilm" href="presentation_film?film=2">
                                <img src="img/liste_schindler.jpg" class="img-fluid img-rounded">
                                <div id="captionfilm"></div>
                                <h5 class="txtfilm text-center">La liste de Schindler</h5>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="lienfilm" href="presentation_film?film=3">
                                <img src="img/black_swan.jpg" class="img-fluid img-rounded">
                                <div id="captionfilm"></div>
                                <h5 class="txtfilm text-center">Black Swan</h5></a></div>
                    </div>
                    <!-- Carousel controls -->

                    <a class="carousel-control-prev hidden-md-down " href="#carousel-films" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next hidden-md-down" href="#carousel-films" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
        </div>
        <footer>
            {include file="footer.tpl" films=$films}
        </footer>

        {include file="scripts.tpl"}
        <script src="http://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
        <script src="js/liste_films.js"></script>
    </body>
</html>
