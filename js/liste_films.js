$(document).ready(() => {

    $("#carousel-films").carousel(); // Creates the carousel


    // Swipe controls
    
    $("#carousel-films").on("swipeleft", () => {
        $("#carousel-films").carousel("next");
    });

    $("#carousel-films").on("swiperight", () => {
        $("#carousel-films").carousel("prev");
    });
})
