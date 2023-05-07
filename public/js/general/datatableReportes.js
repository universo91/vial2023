$(document).ready(function () {
    $('#example').DataTable({
        language: {
            "search":       "Buscar",
            "lengthMenu":   "Mostrar _MENU_ registros por página",
            "info":         "Mostrando pagina _PAGE_ de _PAGES_",
            "paginate":     {
                "previous": "Anterior",
                "next":     "Siguiente",
                "first":    "Primero",
                "last":     "Ultimo"
            }
        },
        scrollX: true,
        ordering: false,
        fixedHeader:{
            header: true
        }
    });
});

