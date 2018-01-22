<!doctype html>
<?php

require("functions/functions.php");
require_once("smarty/Smarty.class.php");

$smarty = new Smarty();


$smarty->display("index.tpl");

?>
