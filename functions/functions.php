
<?php 

            $films = array(0 => array("nom_film" => "Gran Torino", "image" => "img/film1.jpg", "index" => "0", "genre" => "Drame", "acteurs" => "Clint Eastwood, Bee Vang, Ahney Her", "synopsis" => "Walt Kowalski, un vétéran de la guerre de Corée, raciste et irascible, vient de perdre sa femme. Une nuit, il surprend Thao, un de ses jeunes voisins, en train d'essayer de voler sa Ford Gran Torino 1972, dans le cadre d'une épreuve imposée par le gang qui veut le recruter.", "seances" => array("5 août 18h", "6 août 20h", "7 août 22h"), "bande_annonce" => "https://www.youtube.com/embed/R8OtQ-RyCGA?rel=0"), 
               1 => array("nom_film" => "Shutter Island", "image" => "img/shutter_island.jpg", "index" => "1", "genre" => "Thriller psychologique", "acteurs" => "Leonardo DiCaprio, Mark Ruffalo, Ben Kingsley", "synopsis" => "En 1954, le marshal Teddy Daniels et son coéquipier Chuck Aule sont envoyés enquêter sur l'île de Shutter Island, dans un hôpital psychiatrique où sont internés de dangereux criminels. L'une des patientes, Rachel Solando, a inexplicablement disparu. Comment la meurtrière a-t-elle pu sortir d'une cellule fermée de l'extérieur ? Le seul indice retrouvé dans la pièce est une feuille de papier sur laquelle on peut lire une suite de chiffres et de lettres sans signification apparente. Oeuvre cohérente d'une malade, ou cryptogramme ?", "seances" => array("5 août 20h", "6 août 22h", "8 août 18h"), "bande_annonce" => "https://www.youtube.com/embed/inAFW2CluQ4?rel=0"), 
               2 => array("nom_film" => "La liste de Schindler", "image" => "img/liste_schindler.jpg", "index" => "2", "genre" => "Film historique", "acteurs" => "Liam Neeson, Ben Kingsley, Ralph Fiennes", "synopsis" => "Evocation des années de guerre d'Oskar Schindler, fils d'industriel d'origine autrichienne rentré à Cracovie en 1939 avec les troupes allemandes. Il va, tout au long de la guerre, protéger des juifs en les faisant travailler dans sa fabrique et en 1944 sauver huit cents hommes et trois cents femmes du camp d'extermination de Auschwitz-Birkenau.", "seances" =>array("5 août 22h", "7 août 22h", "8 août 20h"), "bande_annonce" => "https://www.youtube.com/embed/dyq5Eo197ds"), 
               3 => array("nom_film" => "Black Swan", "image" => "img/black_swan.jpg", "index" => "3", "genre" => "Thriller dramatique", "acteurs" => "Natalie Portman, Mila Kunis, Winona Ryder", "synopsis" => "Sa vie, comme celle de toutes ses consoeurs, est entièrement vouée à la danse.Lorsque Thomas Leroy, le directeur artistique de la troupe, décide de remplacer la danseuse étoile Beth Mcintyre pour leur nouveau spectacle, 'Le Lac des Cygnes', son choix s'oriente vers Nina.", "seances" => array("6 août à 18h", "7 août à 20h", "8 août à 22h"), "bande_annonce" => "https://www.youtube.com/embed/BwfH0HA-7Sw?rel=0"));


function get_header($pagename) {
    $result = '<div class="header">';
    $result .= "<div class='background'></div>"; /* Div contenant l'image */
    $result .= "<div class='caption'>";
    $result .= '<span class="header-title text-center">FESTIVAL DU FILM EN PLEIN AIR</span>';
    $result .= '<span class="header-subtitle text-center">Parc Montceau, Paris</h3>';
    
    $result .= '</div>'; // End div caption
    
    $result .= '<div class="menu">';
    $result .= '<a href="index.php" '. ($pagename == "index.php" ? 'class="actuel"' : "" ) .'>Accueil</a>';
    $result .= '<a href="liste_films.php" '. ($pagename == "liste_films.php" ? 'class="actuel"' :"") . '>Nos diffusions </a>';
    $result .= '<a href="form_resa.php" '. ($pagename == "form_resa.php" ? 'class="actuel"' :""). '>Préinscription</a>';
    $result .= '</div>'; // End div menu
    
    $result .= '</div>'; // End div container
    return $result;
}


function gen_grillefilms() {
    $element = "";
    global $films;
    $compteur = 0;
    $val = $compteur;
    foreach($films as $film) {
        if ($compteur == 2) {
            $val += 1;
        }
        $element .= "<div class='film col-xs-12 col-sm-5 col-lg-2 col-lg-push-". strval($val) ." " . ($compteur % 2 == 1 ? "col-xs-push-2":"") . "'>";
        $element .= "<a class='lienfilm' href='presentation_film.php?film=". $film["index"] . "'> <img src='". $film["image"] . "' class='img-responsive img-rounded' />";
        $element .= "<div id='captionfilm'></div>"; // Emplacement flouté de l'image
        
        $element .= "<h5 class='txtfilm'>". $film["nom_film"] . "</h5></a></div>";
        
        $compteur++;
        $val++;
        
    }
    return $element;
}

function gen_pres_film($id) { // Récupère l'Id du film stocké dans $_GET, et renvoie la page de présentation du film générée
    global $films;
    $film = $films[$id];
    
    /* Image */
    $res = "";
    $res .= "<h3 class='text-center titre_pres_film'>". $film['nom_film'] . "</h3> <br />";
    $res .= "<div class='row'>";
    $res .= "<div class='col-lg-4 hidden-xs hidden-sm hidden-md image-description-film'>";
    $res .= "<img src='". $film["image"] . "' alt='". $film["nom_film"] ."' class='img-responsive img-rounded' />";
    $res .= "</div>";
    
    /* Description du film */
    $res .= "<div class='col-xs-11 col-lg-8 col-xs-offset-1 col-lg-offset-0'>";
    
    $res .= "<span><strong>Genre : </strong>". $film['genre'] ."</span> <br /> <br />";
    $res .= "<span><strong>Acteurs : </strong>". $film["acteurs"] ."</span> <br /> <br />";
    $res .= "<p><strong>Synopsis : </strong>". $film["synopsis"] . "</p> <br /> <br />";
    
    /* Bande-annonce */
    
    $res .= '<div class="col-xs-x12 text-center">';
    $res .= "<h4 class='text-left'>Bande-annonce :</h3>";
    $res .= '<iframe align="left" width="50%" height="400" src="' . $film["bande_annonce"] . '">';
    $res .='</iframe></div>';
    $res .= "</div></div>";
    
    
    
    /* Résa */
    
    $res .= "<div class='row resa
    '>";
    $res .= "<h3 class='text-center titre'>Réservation</h3>";
    $res .= "<div class='text-center'>";
    $res .= "<a href='form_resa.php?film=" . $film["index"] . "' class='bouton'>Je réserve ! </a></div></div>";
    
    
    
    
    
    
    return $res;
    
}

function get_footer() {
    global $films;
    $res = "";
    $res .= "<div class='footer panel-footer img-rounded'>";
    
    $res .= "<div class='row row-footer'>";
    $res .= "<div class='col-xs-4 txtfooter'>";
    $res .= "<span>Festival du Cinéma en Plein Air</span> <br />";
    $res .= "<span>Parc Montceau, 35 parc de Courcelles</span> <br />";
    $res .= "<span>75008 Paris</span> <br /><br />";
    $res .= "<span>Contact : </span> <br />";
    $res .= "<i class='glyphicon glyphicon-earphone white'></i>";
    $res .= "<span><a href='tel:+33102030405'>01.02.03.04.05</a></span> <br />";
    $res .= "<i class='glyphicon glyphicon-envelope white'></i>";
    $res .= "<span class='coord_email'><a href='mailto:resa@montceau.festival.fr'>resa@montceau.festival.fr</a></span>";
    $res .= "</div>"; /* End div colonne gauche footer */
    
    /* Div diffusions */
    $res .= "<div class='col-xs-4'>";
    $res .= "<h4 class='text-center'>Nos diffusions : </h4>";
    
    foreach($films as $film) {
        $res .= "<p class='lien-footer'><a class='a-footer' href='presentation_film.php?film=" . $film["index"] . "'>". $film["nom_film"] . "</a></p> <br />";
    }
    
    $res .= "</div>";
    
    $res .= "<div class='col-xs-4'>"; /* Div colonne droite footer */
    $res .= "<h4 class='text-center media_titre'>Nos médias sociaux : </h4>";
    $res .= "<div class='row media_soc'>"; /* Div Instagram, FB, Twitter */
    $res .= "<span><img src='img/twitter.png' class='logo' alt='Logo Twitter' />@festivalmontceau</span><br />";
    $res .= "<span><img src='img/facebook.png' class='logo' alt='Logo Facebook' />Festival du Cinéma en Plein Air</span><br />";
    $res .= "<span><img src='img/instagram.png' class='logo' alt='Logo Instagram' />festivalcinema</span>";
    $res .= "</div>"; /* End div media_soc  */
    $res .= "</div>"; /* End colonne droite footer */
    $res .= "</div>"; /* End div class row */
    $res .= "</div>";
    
    return $res;
    
}


?>

