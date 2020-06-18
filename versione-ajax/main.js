$(document).ready(function(){
    var source = $("#hb-template").html();
    var template = Handlebars.compile(source);


// chiamata ajax da database
      $.ajax({
        url: "database/dischi.php",
        method: "GET",
        success: function(dischi) {
            console.log(dischi)
            for (var i = 0; i < dischi.length; i++) {
                var oggetto = dischi[i];
                var titolo = oggetto.title;
                var autore = oggetto.author;
                var anno   = oggetto.year;
                var immagine = oggetto.poster;
    // preparo contesto per handlebar
                var context = {
                    'poster' : immagine,
                    'title '    :titolo,
                    'name'     : autore,
                    'anno' : anno,
                };


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
