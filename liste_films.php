<!doctype html>
<?php
include ("functions/functions.php");

require_once("smarty/Smarty.class.php");

$smarty = new Smarty();

$smarty->display("liste_films.tpl");


?>

