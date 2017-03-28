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
    </head>
    <body>

            
    <header class='navbar'>
        <?php echo get_header(); ?>
    </header>
        <div class='container'>
            <div class='row text-center'>
                <h4>Liste des films</h4>
            </div>
            <div class='row xs-col-10 xs-offset-1'>
                <table id='listefilms'>
                    <thead>
                        <th>Date et heure</th>
                        <th>Nom du film</th>
                        <th>Places disponibles</th>
                        <th>Lien</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5 août, 18h</td>
                            <td>Film 1</td>
                            <td>100</td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                        <tr>
                            <td>5 août, 20h</td>
                            <td>Film 2</td>
                            <td>100</td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                        <tr>
                            <td>5 août, 22h</td>
                            <td>Film 4</td>
                            <td></td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                        <tr>
                            <td>6 août, 18h</td>
                            <td>Film 4</td>
                            <td></td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                        <tr>
                            <td>6 août, 20h</td>
                            <td>Film 2</td>
                            <td></td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                        <tr>
                            <td>6 août, 22h</td>
                            <td>Film 3</td>
                            <td></td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="#">Lien vers page du film</a></td>
                        </tr>
                    </tbody>
                </table>
            
            </div>
            
    
            
        </div>
    </body>
</html>