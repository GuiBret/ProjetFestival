<!doctype html>
<?php
    include("functions/functions.php");
?>

<html>
    <head>
        <?php echo genHeader("Préinscription") ?>
    
    </head>
    <body>
        
        <header>
            
        <?php
            echo get_header(basename($_SERVER['PHP_SELF']));
        ?>
        </header>
        <div class='container-fluid'>
            <div id='message'>
                <p>Votre préinscription a été enregistrée. Vous devriez bientôt recevoir un mail de confirmation.</p>
            </div>
            <h2 class='text-center' id='titreform'>Réservation</h2>
            <div class='col-md-4 col-md-offset-1 hidden-xs hidden-sm'>
                <img src='img/popcorn.jpg' id='affiche' style='display:hidden' />
            </div>
            <form>
                <div class='col-xs-4 col-xs-offset-4 col-md-5 col-md-offset-1 formulaire'>
                    <div class='input-group'>
                        <label for='nom' class='control-label'>Nom :  </label>
                        <div class='controls'>
                            <input type='text' name='nom' />
                        </div>
                    </div>
                    
                    <div class='input-group'>
                        
                        <label for='prenom' class='control-label'>Prénom : </label>
                        <div class='controls'>
                            <input type='text' name='prenom' />
                        </div>
                    </div>
                    <div class='input-group'>
                        
                        <label for='email' class='control-label'>Email : </label>
                        <div class='controls'>
                            <input type='email' name='email' />
                        </div>
                    </div>
                    
                    <div class='input-group'>
                        <label for='nb_places' class='control-label'>Nombre de places : </label>
                        <div class='controls'>
                            <input type='number' name='nb_places' />
                        </div>
                    </div>
                    <div class='input-group'>
                        <label for='film' class='control-label'>Film : </label>
                        <div class='controls'>
                            <select name='film' id='film'></select>
                        </div>
                    </div>
                    <div class='input-group'>
                        <label for='seance' class='control-label'>Séance : </label>
                        <div class='controls'>
                            <select name='seance' id='seance'></select> 
                        </div>
                    </div>
                    <div class='input-group'>
                        <div class='controls'>
                            <a href='#' class='bouton' id='btn-resa-form'>Je réserve !</a>
                        
                        </div>
                    </div>


                    
                </div>
            </form>
        </div>
    <?php
        echo get_footer();
    ?>
        
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src='js/form.js'></script>
    
    </body>
</html>