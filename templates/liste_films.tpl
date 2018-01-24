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
        
            <p>Pour voir la description d'un film (et éventuellement de réserver des places, qui sait !), cliquez sur le nom du film sous l'affiche.</p>
        
        
                <div id="row grille_films">
    
                    <div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-0 ">
                        <a class="lienfilm" href="presentation_film.php?film=0"> 
                            <img src="img/film1.jpg" class="img-responsive img-rounded">
                            <div id="captionfilm"></div>
    
                            <h5 class="txtfilm text-center">Gran Torino</h5>
            
        
                        </a>
    
    
                    </div>
                    <div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-1"><a class="lienfilm" href="presentation_film.php?film=1"> <img src="img/shutter_island.jpg" class="img-responsive img-rounded"><div id="captionfilm"></div><h5 class="txtfilm text-center">Shutter Island</h5></a></div><div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-3 "><a class="lienfilm" href="presentation_film.php?film=2"> <img src="img/liste_schindler.jpg" class="img-responsive img-rounded"><div id="captionfilm"></div><h5 class="txtfilm text-center">La liste de Schindler</h5></a></div><div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-4"><a class="lienfilm" href="presentation_film.php?film=3"> <img src="img/black_swan.jpg" class="img-responsive img-rounded"><div id="captionfilm"></div><h5 class="txtfilm text-center">Black Swan</h5></a></div>    
        
                </div>
            
        
 
                
    
        </div>
        
    
        <footer>
            {include file="footer.tpl" films=$films}
        </footer>
        

    </body>
</html>



