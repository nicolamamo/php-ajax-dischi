$(document).ready(function(){



// chiamata ajax da database
  $.ajax({
    url: "database/dischi.php",
    method: "GET",
    success: function(dischi) {
        var dischi = data.response
        // recupero dischi restituiti dall api (array)
        console.log(dischi);
        alert('bravo!');

    },
    error: function() {
        alert('errore')
    }
  });
});
