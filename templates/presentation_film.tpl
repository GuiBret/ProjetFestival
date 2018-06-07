<html>
    <head>
        {include file="links.tpl" title="Festival du Film au Parc Montceau"}
        <link rel="stylesheet" type="text/css" href="css/presentation_film.css" />
    </head>

    <body>
        <header>
            {include file="header.tpl"}

        </header>
        <div class='container-fluid'>
            <h3 class='text-center titre_pres_film'>{$film['nom_film']}</h3> <br />

            <div class='row'>
                <div class='col-lg-4 hidden-md-down image-description-film'>

                    <img src='{$film["image"]}' alt='{$film["nom_film"]}' class='img-fluid img-rounded' />

                </div>

                <div class='col-12 col-lg-8 offset-1 offset-lg-0'>


                    <span><strong>Genre : </strong>{$film['genre']}</span> <br /> <br />

                    <span><strong>Acteurs : </strong>{$film["acteurs"]}</span> <br /> <br />

                    <p><strong>Synopsis : </strong>{$film["synopsis"]}</p> <br /> <br />

                    <div class="col-12">

                        <h4 id="bandeannonce">Bande-annonce :</h4>

                        <iframe align="left" class="col-12 col-lg-6 offset-lg-2" src="{$film['bande_annonce']}"></iframe>

                    </div>

                </div>
            </div>
            <div class='resa'>

                <h3 class='text-center titre'>Réservation</h3>

                <div class='text-center'>

                    <a href='form_resa?film={$film["index"]}' class='bouton'>Je réserve ! </a></div></div>



        </div>
        <footer>
            {include file="footer.tpl"}
        </footer>
    </body>
</html>
