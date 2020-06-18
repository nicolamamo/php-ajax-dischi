$(document).ready(function(){



// chiamata ajax da database
  $.ajax({
    url: "database/dischi.php",
    method: "GET",
    success: function(dischi) {
        //console.log(dischi)
        var dischi = dischi.respsponse;
        for (var i = 0; i < dischi.length; i++) {
            var oggetto = dischi[i];
            var titolo = dischi.title;
            var autore = dischi.author;
            var anno   = dischi.year;
            var immagine = dischi.poster;
// preparo contesto per handlebar
            var context = {
        'poster' : immagine,
        'title '    :titolo,
        'name'     : autore,
        'anno' : anno,
    };
        var source = $("#hb-template").html();
          var template = Handlebars.compile(source);

          var html = template(context);
          $(".cds-container").append(html)

    }//fine ciclo-for


    },
    error: function() {
        alert('errore')
}
});//fine ajax


});//fine document ready
// recupero dischi restituiti dall api (array)
