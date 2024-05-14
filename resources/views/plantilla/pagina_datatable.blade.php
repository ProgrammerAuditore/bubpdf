@extends('plantilla.base')

@section('pagina-titulo', 'Página | Datatable JS')

@section('contenido-titulo', 'Página | Datatable JS')

@section('pagina-descripcion', 'Página | Datatable JS')

@section('contenido-principal')
<div class="datatable-css">
    <table id="crudTable" ref="crudTable" class="table table-striped nowrap" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Ver</th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Foto">Foto</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Nombre">Nombre</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="No. teléfono">No. teléfono</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Descripción">Descripción</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Estado">Estado</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Acciones">Acciones</span></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th data-skip="on">Ver</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>No. teléfono</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th data-skip="on">Acciones</th>
            </tr>
            <tr>
                <th>Ver</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>No. teléfono</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection

@push('scripts')
@include('config.dataTableJs')

<script>
    const configDataTable = {
        id: 'crudTable',
        data: [{
            id: 0,
            foto: 'na',
            nombre: 'Desconocido',
            no_tel: '0000-000-0000-000',
            des: 'Sin descripción',
            estado: false
        }],
        searching: true,
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
        // Configure Ajax
        /*
        processing: true,
        serverSide: true,
        ajax: {
            "url": "https://",
            "type": "POST"
        },
        */
    };

    dataTableJs.crud.initDataTable(configDataTable);
</script>
@endpush
