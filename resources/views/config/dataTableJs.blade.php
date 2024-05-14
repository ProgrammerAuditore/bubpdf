<script>
    window.dataTableJs = {};
    window.dataTableJs.crud = {
        initDataTable: function(configDataTable = {}, configCellEdit = {}) {
            // Get id for DataTable JS render
            const idDataTable = configDataTable.id ?
                configDataTable.id : 'crudTable';

            // Get config DataTableJs
            dataTableJs.crud.configDataTable = {
                ...dataTableJs.crud.configDataTable,
                ...configDataTable
            };

            // Get config CellEdit
            dataTableJs.crud.configCellEdit = {
                ...dataTableJs.crud.configCellEdit,
                ...configCellEdit
            };

            // Create DataTableJs
            dataTableJs.crud.table = $('#' + idDataTable).DataTable(dataTableJs.crud.configDataTable);

            if (dataTableJs.crud.configCellEdit.enableCellEdit) {
                // Configure MakeCellsEditable
                dataTableJs.crud.table.MakeCellsEditable({
                    ...dataTableJs.crud.configCellEdit,
                    ...configCellEdit,
                });
            }

            //dataTableJs.crud.table.draw();
            $.fn.dataTable.ext.errMode = 'none';
        },
        configDataTable: {
            /*
            id: 'crudTable',
            data: [{
                id: 0,
                foto: 'na',
                nombre: 'Desconocido',
                no_tel: '0000-000-0000-000',
                des: 'Sin descripción',
                estado: false
            }],
            */
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
            // !! Definir las columnas de la tabla
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
            /*
            columns: [{
                    data: null,
                    searchable: false,
                    width: 80,
                    className: 'd-flex justify-between align-items-center',
                    render: function(data, type, row) {
                        return `<div>
                            <button class="btn btn-sm btn-secondary txt-white p-2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>`;
                    }
                },
                {
                    data: 'foto',
                    searchable: false,
                    render: function(data, type, row) {
                        return `<div>
                        <img src="/images/empleado.png" width="60" height="60" />
                        </div>`;
                    }
                },
                {
                    data: 'nombre',
                    searchable: true
                },
                {
                    data: 'no_tel',
                    searchable: true
                },
                {
                    data: 'des',
                    searchable: true
                },
                {
                    data: 'estado',
                    searchable: false,
                    render: function(data, type, row) {
                        if (data == false) return '<span class="badge bg-danger">Desactivado</span>';
                        else return '<span class="badge bg-success">Activado</span>';
                    }
                },
                {
                    data: null,
                    searchable: false,
                    render: function(data, type, row) {
                        return `<div>
                            <button class="btn btn-sm btn-primary txt-white">View</button>
                            <button class="btn btn-sm btn-warning txt-white">Edit</button>
                            <button class="btn btn-sm btn-danger txt-white">Delete</button>
                        </div>`;
                        return `<select class="form-control">
                            <option disabled selected>Actions</option>
                            <option>View</option>
                            <option>Edit</option>
                            <option>Delete</option>
                        </select>`;
                    }
                },
            ],
            */
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
                            return 'Mostrando información sobre ' + data['nombres'];
                        }
                    }),
                    renderer: function(api, rowIdx, columns) {

                        var data = $.map(columns, function(col, i) {
                            var columnHeading = dataTableJs.crud.table.columns().header()[col.columnIndex];

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
                "<'row mt-2 d-print-none '<'col-sm-12 col-md-8'l><'col-sm-12 col-md-4'p>>B",
        },
        configCellEdit: {
            inputCss: 'form-control',
            placeholder: 'Ingrese datos..',
            onUpdate: null,
            allowNulls: {
                columns: [],
                errorClass: 'error'
            },
            columns: [],
            confirmationButton: {
                confirmText: 'Hecho',
                confirmCss: 'btn btn-sm btn-success my-1 mx-0',
                cancelCss: 'btn btn-sm btn-danger my-1 mx-0',
                cancelText: 'Cancelar',
            }
        },
        functionsToRunOnDataTablesDrawEvent: [],
        addFunctionToDataTablesDrawEventQueue: function(functionName) {
            if (this.functionsToRunOnDataTablesDrawEvent.indexOf(functionName) == -1) {
                this.functionsToRunOnDataTablesDrawEvent.push(functionName);
            }
        },
        responsiveToggle: function(dt) {
            $(dt.table().header()).find('th').toggleClass('all');
            dt.responsive.rebuild();
            dt.responsive.recalc();
        },
        executeFunctionByName: function(str, args) {
            var arr = str.split('.');
            var fn = window[arr[0]];

            for (var i = 1; i < arr.length; i++) {
                fn = fn[arr[i]];
            }
            fn.apply(window, args);
        },
        executeCellEditOnUpdate: function(updatedCell, updatedRow, oldValue) {
            new Noty({
                type: "success",
                title: "Crud DataTable",
                text: `<strong>Crud DataTable</strong><br>Registro cambiado.`
            }).show();
        }
    };

    jQuery(document).ready(function() {
        // enable tooltip Boostrap
        $(function(){
            $('[data-bs-toggle="tooltip"]').tooltip();
        });


        // override ajax error message
        $.fn.dataTable.ext.errMode = 'none';
        $('#' + dataTableJs.crud.configDataTable.id).on('error.dt', function(e, settings, techNote, message) {
            alert('Error al cargar los datos desde AJAX');
        });

        // on DataTable draw event run all functions in the queue
        // (eg. delete and details_row buttons add functions to this queue)
        $('#' + dataTableJs.crud.configDataTable.id).on('draw.dt', function() {
            dataTableJs.crud.functionsToRunOnDataTablesDrawEvent.forEach(function(functionName) {
                dataTableJs.crud.executeFunctionByName(functionName);
            });
        }).dataTable();

        // when datatables-colvis (column visibility) is toggled
        // rebuild the datatable using the datatable-responsive plugin
        $('#' + dataTableJs.crud.configDataTable.id).on('column-visibility.dt', function(event) {
            dataTableJs.crud.table.responsive.rebuild();
        }).dataTable();

        // when columns are hidden by reponsive plugin,
        // the table should have the has-hidden-columns class
        dataTableJs.crud.table.on('responsive-resize', function(e, datatable, columns) {
            if (dataTableJs.crud.table.responsive.hasHidden()) {
                $('#' + dataTableJs.crud.configDataTable.id).removeClass('has-hidden-columns').addClass('has-hidden-columns');
            } else {
                $('#' + dataTableJs.crud.configDataTable.id).removeClass('has-hidden-columns');
            }
        });

        // make sure the column headings have the same width as the actual columns
        // after the user manually resizes the window
        var resizeTimer;

        function resizeCrudTableColumnWidths() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // Run code here, resizing has "stopped"
                dataTableJs.crud.table.columns.adjust();
            }, 250);
        }
        $(window).on('resize', function(e) {
            resizeCrudTableColumnWidths();
        });
        $('.sidebar-toggler').click(function() {
            resizeCrudTableColumnWidths();
        });

    });
</script>
