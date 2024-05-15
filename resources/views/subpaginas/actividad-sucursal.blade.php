@extends('plantilla.base')

@section('pagina-titulo', 'Actividades de Sucursal')

@section('contenido-titulo', 'Actividades de Sucursal')

@section('pagina-descripcion', 'Actividades de Sucursal')

@section('contenido-principal')

<div class="card mb-4">
    <div class="card-header">
        <h1 class="txt-label-css">Información personal
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-1">
                <div data-mdb-input-init class="form-outline">
                    <img src="{{ $sucursal->append_logo }}" style="width:60px;height:60px;" />
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Nombre del sucursal</label>
                    <input type="text" id="form6Example1" class="form-control" placeholder="{{ $sucursal->nombre }}" value="{{ $sucursal->nombre }}" readonly />
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Gerente del sucursal</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $sucursal->gerente }}" value="{{ $sucursal->gerente }}" readonly />
                </div>
            </div>

        </div>
        <div class="row mb-4">
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Dirección del sucursal</label>
                    <input type="text" id="form6Example1" class="form-control" placeholder="{{ $sucursal->direccion }}" value="{{ $sucursal->direccion }}" readonly />
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Horario de atención</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $sucursal->horario_atencion }}" value="{{ $sucursal->horario_atencion }}" readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Estado</label>
                    <input type="text" id="form6Example1" class="form-control" placeholder="{{ $sucursal->estado }}" value="{{ $sucursal->estado }}" readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">No. Empleado</label>
                    <input type="text" id="form6Example1" class="form-control" placeholder="{{ $sucursal->num_empleado }}" value="{{ $sucursal->num_empleado }}" readonly />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="datatable-css">
    <table id="crudTable" ref="crudTable" class="table table-striped nowrap" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Ver</th>
                <th>No. Empleado</th>
                <th>Nombre Empleado</th>
                <th>Correo Empleado</th>
                <th>Tel. Empleado</th>
                <th>Actividad</th>
                <th>Detalles</th>
                <th>Autorizado Por</th>
                <th>Fecha/Hora Inicio</th>
                <th>Fecha/Hora Final</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th data-skip="on">Ver</th>
                <th>No. Empleado</th>
                <th>Nombre Empleado</th>
                <th>Correo Empleado</th>
                <th>Tel. Empleado</th>
                <th>Actividad</th>
                <th>Detalles</th>
                <th>Autorizado Por</th>
                <th>Fecha/Hora Inicio</th>
                <th>Fecha/Hora Final</th>
                <th>Estado</th>
            </tr>
            <tr>
                <th>Ver</th>
                <th>No. Empleado</th>
                <th>Nombre Empleado</th>
                <th>Correo Empleado</th>
                <th>Tel. Empleado</th>
                <th>Actividad</th>
                <th>Detalles</th>
                <th>Autorizado Por</th>
                <th>Fecha/Hora Inicio</th>
                <th>Fecha/Hora Final</th>
                <th>Estado</th>
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
        data: @json($crudTable_arr),
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
                data: 'no_empleado',
                searchable: true
            },
            {
                data: 'nombre_responsable',
                searchable: true
            },
            {
                data: 'correo_responsable',
                searchable: true
            },
            {
                data: 'tel_responsable',
                searchable: true
            },
            {
                data: 'actividad',
                searchable: true
            },
            {
                data: 'detalles',
                searchable: true
            },
            {
                data: 'autorizado_por',
                searchable: true
            },
            {
                data: 'fecha_inicio',
                searchable: true
            },
            {
                data: 'fecha_final',
                searchable: true
            },
            {
                data: 'estado',
                searchable: false,
                render: function(data, type, row) {
                    if (data === 'Finalizado')
                        return `<span class="badge bg-success">Finalizado</span>`;
                    else
                        return `<span class="badge bg-primary">En proceso</span>`;
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
