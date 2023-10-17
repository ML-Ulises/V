$(document).ready(function () {

    $("#mostrarMensaje").click(function () {
        var nombre = $("#nombre").val();
        if (nombre !== "") {
            $("#nombreMostrado").text(nombre);
            $("#mensaje").show();
        }
    });


    $("#ocultarMensaje").click(function () {
        $("#mensaje").hide();
    });


    var sugerencias = ["Ulises", "Oswaldo", "Marisol", "Angel", "javier", "victoria", "ariadna", "sofia", "yazmin", "fatima"];

    $("#autocomplete").on("input", function () {
        var consulta = $(this).val().toLowerCase();
        $("#sugerencias").empty();
        for (var i = 0; i < sugerencias.length; i++) {
            if (sugerencias[i].toLowerCase().includes(consulta)) {
                $("#sugerencias").append("<li>" + sugerencias[i] + "</li>");
            }
        }
    });
});
