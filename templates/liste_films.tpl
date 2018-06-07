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


                <div id="row grille_films" class="d-flex flex-row">

                    <div class="film col-12 col-sm-5 col-lg-2">
                        <a class="lienfilm" href="presentation_film?film=0">
                            <img src="img/film1.jpg" class="img-fluid img-rounded">
                            <div id="captionfilm"></div>
                            <h5 class="txtfilm text-center">Gran Torino</h5>
                        </a>
                    </div>
                    <div class="film col-12 col-sm-5 col-lg-2 offset-lg-1">
                        <a class="lienfilm" href="presentation_film?film=1">
                            <img src="img/shutter_island.jpg" class="img-fluid img-rounded">
                            <div id="captionfilm"></div>
                            <h5 class="txtfilm text-center">Shutter Island</h5>
                        </a>
                    </div>
                    <div class="film col-12 col-sm-5 col-lg-2 offset-lg-2">
                        <a class="lienfilm" href="presentation_film?film=2">
                            <img src="img/liste_schindler.jpg" class="img-fluid img-rounded">
                            <div id="captionfilm"></div>
                            <h5 class="txtfilm text-center">La liste de Schindler</h5>
                        </a>
                    </div>
                    <div class="film col-12 col-sm-5 col-lg-2 offset-lg-1">
                        <a class="lienfilm" href="presentation_film?film=3">
                            <img src="img/black_swan.jpg" class="img-fluid img-rounded">
                            <div id="captionfilm"></div>
                            <h5 class="txtfilm text-center">Black Swan</h5></a></div>
                </div>
        </div>
        <footer>
            {include file="footer.tpl" films=$films}
        </footer>


    </body>
</html>
