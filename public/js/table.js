$(document).ready(function() {
    $(".clickable-row").click(function() {
        // Récupérer l'URL ou l'action à effectuer lors du clic
        var url = $(this).data("href");

        // Rediriger vers l'URL ou exécuter une action spécifique
        window.location = url;
    });
});