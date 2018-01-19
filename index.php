<!doctype html>
<?php
include ("functions/functions.php");
?>

<html>
    <head>
        <title>Festival du Film au Parc Montceau</title>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='css/styles.css' type='text/css'/>
        <link rel='stylesheet' href='css/bootstrap.css' type='text/css' />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
    </head>
    
    <body>    
        <header>
            <?php echo get_header(basename($_SERVER['PHP_SELF'])); ?>
        </header>
        <div class='container-fluid'>
            <h3 class='text-center titreindex'>Bienvenue sur le site du Festival du film !</h3> <br />
            <div class='row content'>
                <div class='col-xs-12 col-md-5 col-md-push-1'>

                        <p> Ce festival se déroulera dans le cadre idyllique du Parc Montceau, et verra la diffusion de quatre films durant les 4 jours de festival, du 5 au 8 août prochain. <br /> <br />
                            <span class='soustitre_liste'>Les films en compétition seront :</span> <br /> 
                        </p>

                        <ul class='text-center filmsdiff'>
                            <li>Gran Torino (qui ouvrira le festival)</li>
                            <li>Shutter Island</li>
                            <li>La liste de Schindler</li>
                            <li>Black Swan (qui sera le film de clôture)</li>
                        </ul>




                </div>
                <div class='col-xs-12 col-md-5 col-md-push-2'>
                    <p>Pour vous préinscrire, veuillez vous rendre sur le formulaire d'inscription dont le lien est accessible dans le menu, ou dirigez-vous vers la page de présentation d'un des films, puis cliquez sur le bouton "Je réserve". <br />
                    </p>
                </div>
            </div>
            <div class='row'>
                <div class='text-center'>
                    <p class='label-bouton-liste'>Cliquez sur le bouton ci-dessous pour voir la liste des projections : </p>
                    <a href='liste_films.php' class='bouton'>Cliquez ici !</a> 
                </div>
            </div>
             <div id='push'></div>

        </div>
        <?php
            echo get_footer();
        ?>
    </body>
</html>