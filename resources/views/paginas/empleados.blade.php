@extends('plantilla.base')

@section('pagina-titulo', 'Empleados')

@section('contenido-titulo', 'Empleados')

@section('pagina-descripcion', 'Empleados')

@section('contenido-principal')
<div class="datatable-css">
    <table id="crudTable" ref="crudTable" class="table table-striped display nowrap" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Ver</th>
                <th>Foto</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>RFC</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th data-skip="on">Ver</th>
                <th>Foto</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>RFC</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <th data-skip="on">Ver</th>
                <th>Foto</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>RFC</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var crudTable = $('#crudTable').DataTable({
            id: 'crudTable',
            data: @json($crudtable_arr),
            // !! Cambiar el idioma al español
            language: {
                url: '{{ asset("json/datatables.spanish.json") }}',
            },
            searching: true,
            autoWidth: true,
            info: true,
            paging: true,
            pagingType: "full_numbers",
            lengthMenu: [
                [10, 25, 50, 100, 500, 1000, -1],
                [10, 25, 50, 100, 500, 1000, "Todos"]
            ],
            pageLength: 10,
            columnDefs: [{
                    className: "d-text text-center",
                    targets: "_all"
                },
                {
                    style: {
                        "white-space": "normal"
                    },
                    targets: "_all"
                },
            ],
            columns: [
                {
                    data: null,
                    searchable: false,
                    width: 80,
                    className: 'd-flex justify-between align-items-center',
                    render: function (data, type, row) {
                        return `<div>
                            <button class="btn btn-sm btn-secondary txt-white p-2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>`;
                    }
                },
                {
                    data: 'append_foto_img',
                    searchable: false,
                    render: function (data, type, row) {
                        return `<div>
                        <img src="${data}" width="60" height="60" />
                        </div>`;
                    }
                },
                {data: 'nombres', searchable: true},
                {data: 'apellidos', searchable: true},
                {data: 'sexo', searchable: true},
                {data: 'edad', searchable: true},
                {data: 'correo', searchable: true},
                {data: 'rfc', searchable: true},
                {data: 'domicilio', searchable: true},
                {
                    data: null,
                    searchable: false,
                    render: function (data, type, row) {
                        //return ``;
                        let url_informacion = "{{ route('bubpdf.pagina.empleados.informacion-empleado', ['id' => '~id~']) }}";
                        url_informacion = url_informacion.replace('~id~', row.id);

                        let url_contrato = "{{ route('bubpdf.pagina.empleados.contrato-empleado', ['id' => '~id~']) }}";
                        url_contrato = url_contrato.replace('~id~', row.id);

                        return `<div>
                            <a href="${url_informacion}" class="btn btn-sm btn-primary txt-white p-2">Ver info.</a>
                            <a href="${url_contrato}" class="btn btn-sm btn-warning txt-white p-2">Ver contrato</a>
                            <a href="#" class="btn btn-sm btn-warning txt-white p-2">Ver firma</a>
                        </div>`;
                    }
            },
            ],
            // !! >>> Crear la tabla responsiva
            //scrollX: true,
            responsive: true,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            // show the content of the first column
                            // as the modal header
                            var data = row.data();
                            return 'Mostrando información sobre '+ data['nombres'];
                        }
                    }),
                    renderer: function(api, rowIdx, columns) {

                        var data = $.map(columns, function(col, i) {
                            var columnHeading = crudTable.columns().header()[col.columnIndex];

                            // hide columns that have VisibleInModal false
                            if ($(columnHeading).attr('data-visible-in-modal') == 'false') {
                                return '';
                            }

                            return '<tr data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
                                '<td style="vertical-align:top; border:none;"><strong>' + col.title.trim() + ':' + '<strong></td> ' +
                                '<td style="padding-left:10px;padding-bottom:10px; border:none;">' + col.data + '</td>' +
                                '</tr>';
                        }).join('');

                        return data ?
                            $('<table class="table table-striped mb-0">').append('<tbody>' + data + '</tbody>') :
                            false;
                    },
                }
            },
            fixedHeader: true,
            // !! >>> Exportación de datos  <<<<
            buttons: {
                buttons: [{
                        extend: "collection",
                        text: '<i class="bi bi-download"></i>&nbsp;&nbsp;Exportar',
                        fade: false,
                        buttons: [{
                                extend: "csv",
                                title: "Lista de empleados",
                                exportOptions: {
                                    modifier: {
                                        page: "all",
                                    },
                                },
                            },
                            {
                                extend: "excel",
                                title: "Lista de empleados",
                                exportOptions: {
                                    modifier: {
                                        page: "all",
                                    },
                                },
                            },
                            {
                                extend: "pdfHtml5",
                                title: "Lista de empleados",
                                exportOptions: {
                                    modifier: {
                                        page: "all",
                                    },
                                },
                            },
                        ],
                    },
                    {
                        extend: "copy",
                        className: "btn btn-primary glyphicon glyphicon-duplicate",
                    },
                    // !! >>> Crear botones personalizados
                    /*
                    {
                        text: 'Select all',
                        className: 'btn btn-sm btn-outline-blue',
                        action: function() {
                            reassignQueryTable.rows().select();
                        }
                    },
                    {
                        text: 'Select none',
                        className: 'btn btn-sm btn-outline-red',
                        action: function() {
                            reassignQueryTable.rows().deselect();
                        }
                    },
                    {
                        extend: 'collection',
                        text: 'Table control',
                        buttons: [{
                                text: 'Toggle start date',
                                action: function(e, dt, node, config) {
                                    dt.column(-2).visible(!dt.column(-2).visible());
                                }
                            },
                            {
                                text: 'Toggle salary',
                                action: function(e, dt, node, config) {
                                    dt.column(-1).visible(!dt.column(-1).visible());
                                }
                            }
                        ]
                    },
                    {
                        text: 'Crear usuario',
                        action: function(e, dt, node, config) {
                            alert('Button activated');
                        }
                    },
                    */
                ],
                dom: {
                    button: {
                        tag: "button",
                        className: "btn btn-sm btn-secondary",
                    },
                    buttonLiner: {
                        tag: "null",
                    },
                },
            },
            // !! Crear campos de busqueda
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function(index) {
                        let column = this;
                        const skip = column.footer().getAttribute('data-skip');

                        if (skip === 'on' || skip === 'true') {
                            return;
                        }

                        // get title
                        let title = column.footer().textContent;

                        // Create input element
                        let input = document.createElement('input');
                        input.style.width = '100%';
                        input.placeholder = title;
                        input.classList.add('form-control');
                        column.footer().replaceChildren(input);

                        // Event listener for user input
                        input.addEventListener('keyup', () => {
                            if (column.search() !== this.value) {
                                column.search(input.value).draw();
                            }
                        });
                    });
            },
            // !! >>> Configure Ajax <<<<
            /*
            processing: true,
            serverSide: true,
            ajax: {
                "url": "https://",
                "type": "POST"
            },
            */
            // !! >>> Distribución de información  <<<< // <'col-sm-12 col-md-4'B>
            //dom: "Bfrtip",
            dom: "<'row hidden'<'col-sm-6'i><'col-sm-6 d-print-none'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row mt-2 d-print-none '<'col-sm-12 col-md-8'l><'col-sm-12 col-md-4 'p>>B",
        });


    });
</script>
@endpush
