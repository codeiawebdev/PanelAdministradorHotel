// Esta línea asegura que el código se ejecutará una vez que el documento HTML esté completamente cargado y listo.
$(document).ready(function(){
    // Selecciona la tabla con el id "bootstrap-data-table" y crea una instancia de DataTable sobre ella.
    var dataTable = $("#bootstrap-data-table").DataTable({
        responsive: true,
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
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

    // Define una función llamada handleWindowResize que ajustará las columnas de la tabla y recalculará su responsividad.
    function handleWindowResize() {
        dataTable.columns.adjust().responsive.recalc();
    }

    // Registra un evento en la ventana (ventana del navegador) que se dispara cuando se cambia el tamaño de la ventana.
    // Cuando ocurre el evento "resize" (cambio de tamaño), se ejecutará la función handleWindowResize.
    $(window).on('resize', handleWindowResize);



});

