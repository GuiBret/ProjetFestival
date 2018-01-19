<!doctype html>
<?php
include ("functions/functions.php");
?>

<html>
    <head>
        <?php echo genHeader("Présentation d'un film"); ?>
    </head>
    <body>
        <header>
            <?php echo get_header(basename($_SERVER['PHP_SELF'])); ?>
        </header>
        <div class='container-fluid'>
            <?php 

                echo gen_pres_film(intval($_GET["film"]));
                
            ?>
        </div>
        <?php
            echo get_footer();
        ?>
    </body>
</html>