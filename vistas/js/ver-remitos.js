/*********************/ /*********************/ /*********************/ /*********************/
/***************************CARGAR DINAMICAMENTE LA TABLA DE REMITOS***********************/


var perfilOculto = $("#perfilOculto").val();
$.ajax({
    url: "ajax/datatable-remitos.ajax.php",
    success: function(respuesta) {

    }

})

/* ==================================================
    Data Table
    ==================================================*/
$(".tablaRemitosGuardados").DataTable({


    "ajax": "ajax/datatable-remitos.ajax.php?perfilOculto=" + perfilOculto,

    "pageLength": 10,
    "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla =(",
        "sInfo": "Registros del _START_ al _END_ - Total: _TOTAL_",
        "sInfoEmpty": "Registros del  del 0 al 0 - Total: 0",
        "sInfoFiltered": "(filtrado de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "copy": "Copiar",
            "colvis": "Visibilidad"
        }
    }

});