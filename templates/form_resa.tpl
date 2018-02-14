<!doctype html>

<html>
    <head>
        {include file="links.tpl" title="Préinscription"} 
        <link rel="stylesheet" type="text/css" href="css/form_resa.css" />
    
    </head>
    <body>
        
        <header>
            
        {include file="header.tpl"}
        </header>
        <div class='container-fluid'>
            <div id='message'>
                <p>Votre préinscription a été enregistrée. Vous devriez bientôt recevoir un mail de confirmation.</p>
            </div>
            <h2 class='text-center' id='titreform'>Réservation</h2>
            
            <div id="content" class="d-flex flex-row">
                <div class='col-md-4 offset-md-1 hidden-sm-down'>
                <img src='img/popcorn.jpg' id='affiche' style='display:hidden' class="img-fluid" />
            </div>
            <form>
                <div class='col-12 offset-1 formulaire'>
                    <div class='form-group'>
                        <label for='nom' class='control-label'>Nom :  </label>
                        <div class='controls'>
                            <input type='text' name='nom' />
                        </div>
                    </div>
                    
                    <div class='form-group'>
                        
                        <label for='prenom' class='control-label'>Prénom : </label>
                        <div class='controls'>
                            <input type='text' name='prenom' />
                        </div>
                    </div>
                    <div class='form-group'>
                        
                        <label for='email' class='control-label'>Email : </label>
                        <div class='controls'>
                            <input type='email' name='email' />
                        </div>
                    </div>
                    
                    <div class='form-group'>
                        <label for='nb_places' class='control-label'>Nombre de places : </label>
                        <div class='controls'>
                            <input type='number' name='nb_places' />
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='film' class='control-label'>Film : </label>
                        <div class='controls'>
                            <select name='film' id='film'></select>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='seance' class='control-label'>Séance : </label>
                        <div class='controls'>
                            <select name='seance' id='seance'></select> 
                        </div>
                    </div>
 
                    <div class='form-group'>
                        <a href='#' class='bouton text-center' id='btn-resa-form'>Je réserve !</a>
                    </div>
                </div>
            </form>
        </div>
            
            
            </div>
            
    <footer>
        {include file="footer.tpl"}
    </footer>
        {include file="scripts.tpl"}
    <script src='js/form.js'></script>
    
    </body>
</html>