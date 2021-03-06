
<?php 

    $films = array(0 => array("nom_film" => "Gran Torino", "image" => "img/film1.jpg", "index" => "0", "genre" => "Drame", "acteurs" => "Clint Eastwood, Bee Vang, Ahney Her", "synopsis" => "Walt Kowalski, un vétéran de la guerre de Corée, raciste et irascible, vient de perdre sa femme. Une nuit, il surprend Thao, un de ses jeunes voisins, en train d'essayer de voler sa Ford Gran Torino 1972, dans le cadre d'une épreuve imposée par le gang qui veut le recruter.", "seances" => array("5 août 18h", "6 août 20h", "7 août 22h"), "bande_annonce" => "https://www.youtube.com/embed/R8OtQ-RyCGA?rel=0"), 
               1 => array("nom_film" => "Shutter Island", "image" => "img/shutter_island.jpg", "index" => "1", "genre" => "Thriller psychologique", "acteurs" => "Leonardo DiCaprio, Mark Ruffalo, Ben Kingsley", "synopsis" => "En 1954, le marshal Teddy Daniels et son coéquipier Chuck Aule sont envoyés enquêter sur l'île de Shutter Island, dans un hôpital psychiatrique où sont internés de dangereux criminels. L'une des patientes, Rachel Solando, a inexplicablement disparu. Comment la meurtrière a-t-elle pu sortir d'une cellule fermée de l'extérieur ? Le seul indice retrouvé dans la pièce est une feuille de papier sur laquelle on peut lire une suite de chiffres et de lettres sans signification apparente. Oeuvre cohérente d'une malade, ou cryptogramme ?", "seances" => array("5 août 20h", "6 août 22h", "8 août 18h"), "bande_annonce" => "https://www.youtube.com/embed/inAFW2CluQ4?rel=0"), 
               2 => array("nom_film" => "La liste de Schindler", "image" => "img/liste_schindler.jpg", "index" => "2", "genre" => "Film historique", "acteurs" => "Liam Neeson, Ben Kingsley, Ralph Fiennes", "synopsis" => "Evocation des années de guerre d'Oskar Schindler, fils d'industriel d'origine autrichienne rentré à Cracovie en 1939 avec les troupes allemandes. Il va, tout au long de la guerre, protéger des juifs en les faisant travailler dans sa fabrique et en 1944 sauver huit cents hommes et trois cents femmes du camp d'extermination de Auschwitz-Birkenau.", "seances" =>array("5 août 22h", "7 août 22h", "8 août 20h"), "bande_annonce" => "https://www.youtube.com/embed/dyq5Eo197ds"), 
               3 => array("nom_film" => "Black Swan", "image" => "img/black_swan.jpg", "index" => "3", "genre" => "Thriller dramatique", "acteurs" => "Natalie Portman, Mila Kunis, Winona Ryder", "synopsis" => "Sa vie, comme celle de toutes ses consoeurs, est entièrement vouée à la danse.Lorsque Thomas Leroy, le directeur artistique de la troupe, décide de remplacer la danseuse étoile Beth Mcintyre pour leur nouveau spectacle, 'Le Lac des Cygnes', son choix s'oriente vers Nina.", "seances" => array("6 août à 18h", "7 août à 20h", "8 août à 22h"), "bande_annonce" => "https://www.youtube.com/embed/BwfH0HA-7Sw?rel=0"));


require_once("smarty/Smarty.class.php");

$smarty = new Smarty();

$smarty->assign("films", $films);
$smarty->assign("pagename", basename($_SERVER['PHP_SELF']));

?>

