document.addEventListener("DOMContentLoaded", () => {
    listarCitas();
});

function listarCitas() {
    $('#dataTable').DataTable({
        ajax: {
            url: 'controller/citas.php',
            type: 'GET',
            dataSrc: ''
        },
        columns: [
            { data: 'nombre',className: 'wrap-text'  },
            { data: 'email',className: 'wrap-text'  },
            { data: 'asunto', className: 'wrap-text' },
            { data: 'mensaje',className: 'wrap-text'  },
            { data: 'fecha_creacion' },
            {
                data: 'estado',
                render: function (data) {
                    return data == 1 ? 'Pendiente' : 'Atendido';
                }
            },
            {
                data: 'id',
                render: function (data, type, row) {
                  const clase = row.estado == 1 ? 'btn-danger' : 'btn-success';
                  const texto = row.estado == 1 ? 'Atender' : 'Atendido';
                  return `<div class="d-flex justify-content-center">
                    <button class="btn ${clase} btn-sm py-0 px-2 text-nowrap btn-cambiar-estado" data-id="${data}" data-estado="${row.estado}">
                      ${texto}
                    </button>
                  </div>`;
                }
            }
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
}
$(document).on('click', '.btn-cambiar-estado', function () {
    const id = $(this).data('id');
    const estadoActual = $(this).data('estado');
  
    if (estadoActual != 1) {
      Swal.fire({
        icon: 'info',
        title: 'Ya está atendido',
        text: 'Este usuario ya fue marcado como atendido.',
        confirmButtonColor: '#602350',
        iconColor: '#602350'
      });
      return;
    }
  
    Swal.fire({
      icon: 'question',
      title: '¿Marcar como atendido?',
      text: '¿Estás seguro de cambiar el estado de esta cita?',
      showCancelButton: true,
      confirmButtonColor: '#602350',
      cancelButtonColor: '#aaa',
      confirmButtonText: 'Sí, cambiar',
      cancelButtonText: 'Cancelar',
      iconColor: '#602350'
    }).then((result) => {
      if (result.isConfirmed) {
        fetch('controller/citas.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ id: id })
        })
        .then(res => res.json())
        .then(json => {
          if (json.success) {
            Swal.fire({
              icon: 'success',
              title: '¡Estado actualizado!',
              text: json.message,
              confirmButtonColor: '#602350',
              iconColor: '#602350'
            });
            $('#dataTable').DataTable().ajax.reload(null, false);
          } else {
            throw new Error(json.message);
          }
        })
        .catch(err => {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: err.message,
            confirmButtonColor: '#d33'
          });
        });
      }
    });
  });
  
