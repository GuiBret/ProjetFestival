<?php 

function get_header() {
    $result = '<div class="row">';
    $result .= "<img src='img/header_img.png' alt='Image du header' class='img-responsive'/>";
    $result .= '<div class="caption">';
    $result .= '<h3 class="text-center">Festival du Film en Plein Air</h3>';
    
    $result .= '</div></div>';
    return $result;
}


?>

