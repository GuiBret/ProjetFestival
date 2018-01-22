<!doctype html>
<?php
    include ("functions/functions.php");

    $smarty->assign("film", $films[$_GET["film"]]);

    $smarty->display("presentation_film.tpl");
?>

