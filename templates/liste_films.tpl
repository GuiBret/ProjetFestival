<html>
    <head>
        {include file="links.tpl" title="Les films à l'affiche"}
    </head>
    <body>
        <header>
            {include file="header.tpl"}
        </header>
        
    
        <div class='container-fluid'>
        
            <h2 class='text-center'>Les films sélectionnés : </h2> <br />
        
            <p>Pour voir la description d'un film (et éventuellement de réserver des places, qui sait !), cliquez sur le nom du film sous l'affiche.</p>
        
            <div id='row grille_films'>
        
                <div id="row grille_films">
    
    
                    <div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-0 ">
    
    
                        <a class="lienfilm" href="presentation_film.php?film=0"> 
        
    
                            <img src="img/film1.jpg" class="img-responsive img-rounded">
            
        
                            <div id="captionfilm"></div>
            
            
            
        
                            <h5 class="txtfilm">Gran Torino</h5>
            
        
                        </a>
    
    
                    </div>
                    <div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-1 col-xs-push-2"><a class="lienfilm" href="presentation_film.php?film=1"> <img src="img/shutter_island.jpg" class="img-responsive img-rounded"><div id="captionfilm"></div><h5 class="txtfilm">Shutter Island</h5></a></div><div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-3 "><a class="lienfilm" href="presentation_film.php?film=2"> <img src="img/liste_schindler.jpg" class="img-responsive img-rounded"><div id="captionfilm"></div><h5 class="txtfilm">La liste de Schindler</h5></a></div><div class="film col-xs-12 col-sm-5 col-lg-2 col-lg-push-4 col-xs-push-2"><a class="lienfilm" href="presentation_film.php?film=3"> <img src="img/black_swan.jpg" class="img-responsive img-rounded"><div id="captionfilm"></div><h5 class="txtfilm">Black Swan</h5></a></div>    
        
                </div>
            
        
            </div>
                
    
        </div>
        
    
        <footer>
            {include file="footer.tpl"}
        </footer>
        

    </body>
</html>



