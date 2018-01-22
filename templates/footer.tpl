<div class='footer panel-footer img-rounded'>
    

    <div class='row row-footer'>

        <div class='col-xs-12 col-md-4 txtfooter'>
   
            <span>Festival du Cinéma en Plein Air</span> <br />
   
            <span>Parc Montceau, 35 parc de Courcelles</span> <br />
   
            <span>75008 Paris</span> <br /><br />
    
            <span>Contact : </span> <br />
    
            <i class='glyphicon glyphicon-earphone white'></i>
  
            <span>
                <a href='tel:+33102030405'>01.02.03.04.05</a>
            </span> <br />
    
            <i class='glyphicon glyphicon-envelope white'></i>
    
            <span class='coord_email'><a href='mailto:resa@montceau.festival.fr'>resa@montceau.festival.fr</a></span>
            
        </div>
        
        <div class='col-xs-12 col-md-4'>

            <h4 class='text-center'>Nos diffusions : </h4>
    
        {foreach from=$films item=$film}
            <p class='lien-footer'><a class='a-footer' href='presentation_film.php?film={$film["index"]}'>{$film["nom_film"]}</a></p> <br /> 
        {/foreach}
    
        </div>
    
   
        <div class='col-xs-12 col-md-4'>
    
            <h4 class='text-center media_titre'>Nos médias sociaux : </h4>
 
            <div class='row media_soc'>

                <span><img src='img/twitter.png' class='logo' alt='Logo Twitter' />@festivalmontceau</span><br />
                <span><img src='img/facebook.png' class='logo' alt='Logo Facebook' />Festival du Cinéma en Plein Air</span><br />
                <span><img src='img/instagram.png' class='logo' alt='Logo Instagram' />festivalcinema</span>
 
            </div>
   
        </div>
    
    </div>
   
</div>
    