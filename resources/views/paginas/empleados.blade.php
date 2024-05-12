@extends('plantilla.base')

@section('pagina-titulo', 'Empleados')

@section('contenido-titulo', 'Empleados')

@section('pagina-descripcion', 'Empleados')

@section('contenido-principal')
<div class="datatable-css">
    <table id="crudTable" ref="crudTable" class="table table-striped">
        <thead class="table-warning">
            <tr class="datatable-thead-css">
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            <tr class="datatable-tfoot-css">
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
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
            layout: {
                topStart: {
                    buttons: [{
                        text: 'My button',
                        action: function(e, dt, node, config) {
                            alert('Button activated');
                        }
                    }]
                }
            },
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
            // !! >>> Crear la tabla responsiva
            responsive: false,
            /*
            fixedHeader: true,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            // show the content of the first column
                            // as the modal header
                            // var data = row.data();
                            // return data[0];
                            return '';
                        }
                    } ),
                    renderer: function ( api, rowIdx, columns ) {

                    var data = $.map( columns, function ( col, i ) {
                        var columnHeading = crudTable.columns().header()[col.columnIndex];

                        // hide columns that have VisibleInModal false
                        if ($(columnHeading).attr('data-visible-in-modal') == 'false') {
                            return '';
                        }

                        return '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                    '<td style="vertical-align:top; border:none;"><strong>'+col.title.trim()+':'+'<strong></td> '+
                                    '<td style="padding-left:10px;padding-bottom:10px; border:none;">'+col.data+'</td>'+
                                '</tr>';
                    } ).join('');

                    return data ?
                        $('<table class="table table-striped mb-0">').append( '<tbody>' + data + '</tbody>' ) :
                        false;
                    },
                }
            },
            */
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
