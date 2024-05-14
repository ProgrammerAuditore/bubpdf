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
                data: 'append_foto_img',
                searchable: false,
                render: function(data, type, row) {
                    return `<div>
                        <img src="${data}" width="60" height="60" />
                        </div>`;
                }
            },
            {
                data: 'nombres',
                searchable: true
            },
            {
                data: 'apellidos',
                searchable: true
            },
            {
                data: 'sexo',
                searchable: true
            },
            {
                data: 'edad',
                searchable: true
            },
            {
                data: 'correo',
                searchable: true
            },
            {
                data: 'rfc',
                searchable: true
            },
            {
                data: 'domicilio',
                searchable: true
            },
            {
                data: null,
                searchable: false,
                render: function(data, type, row) {
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
