@extends('plantilla.base')

@section('pagina-titulo', 'Sucursales')

@section('contenido-titulo', 'Sucursales')

@section('pagina-descripcion', 'Sucursales')

@section('contenido-principal')
<div class="datatable-css">
    <table id="crudTable" ref="crudTable" class="table table-striped nowrap" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Ver</th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Logotipo">Logotipo</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Nombre">Nombre</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Gerente">Gerente</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Dirección">Dirección</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Estado">No. Teléfono</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Estado">Horario</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Estado">No. Empleados</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Estado">Descripción</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Estado">Estado</span></th>
                <th><span data-bs-toggle="tooltip" data-bs-placement="top" title="Acciones">Acciones</span></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th data-skip="on">Ver</th>
                <th>Logotipo</th>
                <th>Nombre</th>
                <th>Gerente</th>
                <th>Dirección</th>
                <th>No. Teléfono</th>
                <th>Horario</th>
                <th>No. Empleados</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th data-skip="on">Acciones</th>
            </tr>
            <tr>
                <th data-skip="on">Ver</th>
                <th>Logotipo</th>
                <th>Nombre</th>
                <th>Gerente</th>
                <th>Dirección</th>
                <th>No. Teléfono</th>
                <th>Horario</th>
                <th>No. Empleados</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th data-skip="on">Acciones</th>
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
        data: @json($crudtable_arr),
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
                data: 'append_logo',
                searchable: false,
                render: function(data, type, row) {
                    return `<div>
                        <img src="${data}" width="60" height="60" />
                        </div>`;
                }
            },
            {
                data: 'nombre',
                searchable: true
            },
            {
                data: 'gerente',
                searchable: true
            },
            {
                data: 'direccion',
                searchable: true
            },
            {
                data: 'num_tel',
                searchable: true
            },
            {
                data: 'horario_atencion',
                searchable: true
            },
            {
                data: 'num_empleado',
                searchable: true
            },
            {
                data: 'descripcion',
                searchable: true
            },
            {
                data: 'estado',
                searchable: false,
                render: function(data, type, row) {
                    if (data == 'Cerrado') return '<span class="badge bg-danger">Cerrado</span>';
                    else return '<span class="badge bg-success">Abierto</span>';
                }
            },
            {
                data: null,
                searchable: false,
                render: function(data, type, row) {
                    let ver_actividad = "{{ route('bubpdf.pagina.sucursales.actividad-sucursal', ['id' => '~id~']) }}";
                    ver_actividad = ver_actividad.replace('~id~', row.id);

                    return `<div>
                            <a href="${ver_actividad}" role="button" class="btn btn-sm btn-primary txt-white p-2">Ver actividades</a>
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
