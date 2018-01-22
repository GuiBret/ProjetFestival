<html>
    <head>
        {include file="links.tpl" title="Festival du Film au Parc Montceau"}
    </head>
    
    <body>    
        <header>
            {include file="header.tpl"}

        </header>
        <div class='container-fluid'>
            {$film["nom_film"]}

            <h3 class='text-center titre_pres_film'>{$film['nom_film']}</h3> <br />

            <div class='row'>
                <div class='col-lg-4 hidden-xs hidden-sm hidden-md image-description-film'>
    
                    <img src='{$film["image"]}' alt='{$film["nom_film"]}' class='img-responsive img-rounded' />
    
                </div>
    
                <div class='col-xs-11 col-lg-8 col-xs-offset-1 col-lg-offset-0'>
    
    
                    <span><strong>Genre : </strong>{$film['genre']}</span> <br /> <br />
    
                    <span><strong>Acteurs : </strong>{$film["acteurs"]}</span> <br /> <br />
    
                    <p><strong>Synopsis : </strong>{$film["synopsis"]}</p> <br /> <br />
        
                    <div class="col-xs-x12 text-center">
    
                        <h4 class='text-left'>Bande-annonce :</h4>
        
                        <iframe align="left" width="50%" height="400" src="{$film['bande_annonce']}"></iframe>

                    </div>
    
                </div>
            </div>
            <div class='row resa'>
    
                <h3 class='text-center titre'>Réservation</h3>
    
                <div class='text-center'>
    
                    <a href='form_resa.php?film=" . $film["index"] . "' class='bouton'>Je réserve ! </a></div></div>
            

        
        </div>
        <footer>
            {include file="footer.tpl"}
        </footer>
    </body>
</html>