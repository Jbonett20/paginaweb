document.addEventListener("DOMContentLoaded", function () {
    $('#usuariosTable').DataTable({
        ajax: {
            url: 'controller/usuarios.php',
            type: 'GET',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'nombre' },
            { data: 'apellidos' },
            { data: 'telefono' },
            { data: 'email' },
            { data: 'fecha_creacion' }
        ],
        destroy: true,
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
            paginate: {
                previous: '&laquo; Anterior&nbsp;&nbsp;',
                next: '&nbsp;&nbsp;Siguiente &raquo;'
            },
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_ registros",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando 0 a 0 de 0 registros",
            zeroRecords: "No se encontraron resultados",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            loadingRecords: "Cargando...",
            processing: "Procesando..."
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
        drawCallback: function () {
            $('.dataTables_paginate .pagination').addClass('justify-content-center mt-4 gap-2');
        }
    });
});
