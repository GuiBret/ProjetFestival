$(document).ready(function (){
    
    var data = { 
                "films":[
                    {"id":"0", "nom":"Gran Torino", "image": "img/gran_torino.jpg", "seances": ["5 août 18h", "6 août 20h", "7 août 22h"]}, 
                    {"id":"1", "nom":"Shutter Island", "image": "img/shutter_island.jpg", "seances":["5 août 20h", "6 août 22h", "8 août 18h"]},
                    {"id":"2", "nom":"La liste de Schindler", "image": "img/liste_schindler.jpg", "seances":["5 août 22h", "7 août 22h", "8 août 20h"]},
                    {"id":"3", "nom":"Black Swan", "image": "img/black_swan.jpg", "seances":["6 août à 18h", "7 août à 20h", "8 août à 22h"]} ]
    };

    let $select_films = $("select#film"),
        $select_seance = $("select#seance"),
        $img = $("img#affiche"),
        $titre = $("h2#titreform"),
        $message = $("div#message"),
        $bouton = $("a#btn-resa-form");
    
    /* Récupère l'argument */
    jQuery.urlParam = function(name){
        var results = new RegExp('[/\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
           return null;
        }
        else{
           return results[1] || 0;
        }
    }
    
    
    var arg = jQuery.urlParam("film");
    remplirSelectFilms(arg); 
    if(arg !== null) {
           
        majAffiche(arg);
        majTitre(arg);
        remplirSelectSeances();
    }
    else {
        $defaut = $("<option></option>");
        $defaut.html("Choisissez un film");
        $select_seance.append($defaut);
    }
    
    
    
    $select_films.on("change", function() {
        changerImage();
        remplirSelectSeances(); 
        $titre.html(`Réservation pour ${$("select#film option:selected").html()}`);
    });
    
    $bouton.on("click", function(e) {
        e.preventDefault();
        
        afficherMessage();
        $("html").animate({
            scrollTop: 0
        }, function() {
                $message.animate({opacity:1}, 2000, function() {
                $message.animate({opacity:0}, 2000); 
            });    
        });
        
        
        
    });
    
    
    function changerImage() {
        $film_selectionne = $("select#film option:selected").html()
        var film;
        for(film of data.films) {
            if(film.nom === $film_selectionne) {
                $img.attr("src", film.image);
            }
        }
    }
    
    function remplirSelectFilms(arg) {
        var film;
        for (film of data.films) {
            var $option = $("<option></option>");
            $option.html(film['nom']);
            if(arg !== null && arg === film["id"]) {
                $option.attr("selected", "selected");
            }
            
            $select_films.append($option);
        }
    }
    
    function majAffiche(arg) {
        var film;
        for (film of data.films) {
            if(film["id"] === arg) {
                $img.attr("src", film.image);
            }
        }
    }
    function majTitre(arg) {
        for (film of data.films) {
            if(film["id"] === arg) {
                $titre.html("Réservation pour "+ film.nom);
            }
        }
        
    }
    
    function remplirSelectSeances() {
        var film_actuel = $select_films.find(":selected").text();
        $select_seance.html(""); // On nettoie le select pour ne pas garder les séances précédentes si on a déjà eu un changement
        for (film of data.films) {
            if(film["nom"] === film_actuel) {
                var seance;
                for(seance of film.seances) {
                    var $option = $("<option></option>");
                    $option.html(seance);
                    
                    $select_seance.append($option);
                    
                }
            }
        }
    }
    function afficherMessage() {
        $message.css("display", "block");
    }

});
