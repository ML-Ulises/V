//-------------------------------
let availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C ++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Maravilloso",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Esquema"
  ];

$(document).ready(function(){

  $("#search").autocomplete ({
      source: availableTags,
      minLength : 2
  });

  $("#btnSaludar").click(function(){
      $("#divSaludos").html("<h1>Bienvenidos. Reciban un cordial saludo</h1>"); 
  });
  $("#btnMostrar").click(function(){
      $("#divSaludos").show();
  });
  $("#btnOcultar").click(function(){
      $("#divSaludos").hide();
  });

  $("#btnFindPokemon").click(function(){
       let id = $("#pokemonId").val();
       let url = "https://pokeapi.co/api/v2/berry/"  + id;  
      
      $.ajax(url, {
          dataType: 'json', // type of response data
          timeout: 500,     // timeout milliseconds   
          success: function (data,status,xhr) {
              console.log(data);   
              let pokemon = data; 
              $("#result").html("<h1>" + pokemon.name + "</h1>");
          },
          error: function (jqXhr, textStatus, errorMessage) { 
              $("#result").html('Error: ' + errorMessage);
          }
      });
  });
});
