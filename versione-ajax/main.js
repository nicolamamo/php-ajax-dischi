$(document).ready(function(){



// chiamata ajax da database
  $.ajax({
    url: "database/dischi.php",
    method: "GET",
    success: function(dischi) {
        var dischi = dischi.response
        console.log(dischi)



    },
    error: function() {
        alert('errore')
    }
  });
});
// recupero dischi restituiti dall api (array)
