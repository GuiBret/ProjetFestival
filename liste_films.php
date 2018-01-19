<!doctype html>
<?php
include ("functions/functions.php");

$arr = array()

?>

<html>
    <head>
        <title>Festival du Film au Parc Montceau</title>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='css/styles.css' type='text/css'/>
        <link rel='stylesheet' href='css/bootstrap.css' type='text/css' />
        
    </head>
    <body>

            
    <header>
        <?php
            echo get_header(basename($_SERVER['PHP_SELF']));
        ?>
    
    </header>
        
    <div class='container-fluid'>
        <h2 class='text-center'>Les films sélectionnés : </h2> <br />
        <p>Pour voir la description d'un film (et éventuellement de réserver des places, qui sait !), cliquez sur le nom du film sous l'affiche.</p>
        <div id='row grille_films'>
            <?php echo gen_grillefilms(); ?>    
        </div>
                
    </div>
        
    <?php
        echo get_footer();
    ?>
        
            
           
            
    
            
    
    </body>
</html>