<!doctype html>
<?php
include ("functions/functions.php");

$smarty->assign("films", $films);
$smarty->display("liste_films.tpl");


?>

