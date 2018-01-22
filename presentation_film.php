<!doctype html>
<?php
    include ("functions/functions.php");

    require_once("smarty/Smarty.class.php");

    $smarty = new Smarty();

    $smarty->assign("film", $films[$_GET["film"]]);



    $smarty->display("presentation_film.tpl");
?>

