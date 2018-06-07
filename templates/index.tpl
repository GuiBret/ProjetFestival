<html>
    <head>
        {include file="links.tpl" title="Festival du Film au Parc Montceau"}
        <link href="css/index.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <header>
            {include file="header.tpl"}

        </header>
        <div class='container-fluid'>
            <h3 class='text-center titreindex'>Bienvenue sur le site du Festival du films !</h3> <br />

            <div class='content d-flex flex-column flex-md-row justify-content-around'>
                <div class='col-12 col-md-5 index-text'>

                        <p> Ce festival se déroulera dans le cadre idyllique du Parc Montceau, et verra la diffusion de quatre films durant les 4 jours de festival, du 5 au 8 août prochain. <br /> <br />

                        </p>
                </div>
                <div class='col-12 col-md-5 index-text'>
                    <p>Pour vous préinscrire, veuillez vous rendre sur le formulaire d'inscription dont le lien est accessible dans le menu, ou dirigez-vous vers la page de présentation d'un des films, puis cliquez sur le bouton "Je réserve". <br />
                    </p>
                </div>
            </div>

            <div class="text-center movie-list">
              <p class='soustitre_liste'>Les films en compétition seront :</p> <br />
              <ul class='filmsdiff'>
                  <li>Gran Torino (qui ouvrira le festival)</li>
                  <li>Shutter Island</li>
                  <li>La liste de Schindler</li>
                  <li>Black Swan (qui sera le film de clôture)</li>
              </ul>

            </div>

            <div>
                <div class='text-center'>
                    <p class='label-bouton-liste'>Cliquez sur le bouton ci-dessous pour voir la liste des projections : </p>
                    <a href='liste_films.php' class='bouton'>Cliquez ici !</a>
                </div>
            </div>
        </div>
        {include file="footer.tpl" films=$films}
        {include file="scripts.tpl"}
    </body>
</html>
