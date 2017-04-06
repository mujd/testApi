$(document).ready(function () {
                $('#example').DataTable({
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ Registros por pagína",
                        "zeroRecords": "No se encontraron registros.",
                        "info": "Mostrando Pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles con ese nombre",
                        "infoFiltered": "(Registros disponibles: _MAX_)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscar:",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior", },
                        "aria": {
                            "sortAscending": ": activar el ordenar columnas de forma ascendente",
                            "sortDescending": ": activar el ordenar columnas de forma descendente"
                        }

                    }
                });
            });