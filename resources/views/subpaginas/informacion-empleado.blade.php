@extends('plantilla.base')

@section('pagina-titulo', 'Información de empleado')

@section('contenido-titulo', 'Información de empleado')

@section('pagina-descripcion', 'Información de empleado')

@section('contenido-principal')
<!-- Información personal -->
<div class="card mb-4">
    <div class="card-header">
        <div class="txt-label-css">Información personal</div>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-1">
                <div data-mdb-input-init class="form-outline">
                    <img src="/{{ $empleado->append_foto_img }}" style="width:60px;height:60px;" />
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Nombres</label>
                    <input type="text" id="form6Example1" class="form-control" placeholder="{{ $empleado->nombres }}" value="{{ $empleado->nombres }}" readonly />
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Apellidos</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $empleado->apellidos }}" value="{{ $empleado->apellidos }}" readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Sexo</label>
                    <input type="text" id="form6Example1" class="form-control" placeholder="{{ $empleado->sexo }}" value="{{ $empleado->sexo }}" readonly />
                </div>
            </div>
            <div class="col-1">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Edad</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $empleado->edad }}" value="{{ $empleado->edad }}" readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Correo electrónico</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $empleado->correo }}" value="{{ $empleado->correo }}" readonly />
                </div>
            </div>
            <div class="col-12">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Domicilio</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $empleado->domicilio }}" value="{{ $empleado->domicilio }}" readonly />
                </div>
            </div>
            <div class="col-12">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">RFC</label>
                    <input type="text" id="form6Example2" class="form-control" placeholder="{{ $empleado->rfc }}" value="{{ $empleado->rfc }}" readonly />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Información del empleado -->
<div class="card mb-4">
    <div class="card-header">
        <div class="txt-label-css">Información del empleado</div>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">No. de control</label>
                    <input type="text" id="form6Example1" class="form-control"
                    placeholder="{{ $info_empleado->no_control }}"
                    value="{{ $info_empleado->no_control }}"
                    readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Empleado (Tipo)</label>
                    <input type="text" id="form6Example2" class="form-control"
                    placeholder="{{ $info_empleado->tipo }}"
                    value="{{ $info_empleado->tipo }}"
                    readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Razón Social</label>
                    <input type="text" id="form6Example1" class="form-control"
                    placeholder="{{ $info_empleado->razon_social }}"
                    value="{{ $info_empleado->razon_social }}"
                    readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Puesto</label>
                    <input type="text" id="form6Example1" class="form-control"
                    placeholder="{{ $info_empleado->puesto }}"
                    value="{{ $info_empleado->puesto }}"
                    readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Rol</label>
                    <input type="text" id="form6Example2" class="form-control"
                    placeholder="{{ $info_empleado->rol }}"
                    value="{{ $info_empleado->rol }}"
                    readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Rango</label>
                    <input type="text" id="form6Example2" class="form-control"
                    placeholder="{{ $info_empleado->rango }}"
                    value="{{ $info_empleado->rango }}"
                    readonly />
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Duración</label>
                    <input type="text" id="form6Example2" class="form-control"
                    placeholder="{{ $info_empleado->duracion }}"
                    value="{{ $info_empleado->duracion }}"
                    readonly />
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Salario</label>
                    <input type="text" id="form6Example2" class="form-control"
                    placeholder="{{ $info_empleado->salario }}"
                    value="{{ $info_empleado->salario }}"
                    readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Descripción puesto de trabajo</label>
                    <textarea class="form-control" readonly>{{$info_empleado->puesto_descripcion}}</textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Días de trabajo</label>
                    <input type="text" id="form6Example1" class="form-control"
                    placeholder="{{ $info_empleado->dias_de_trabajo }}"
                    value="{{ $info_empleado->dias_de_trabajo }}"
                    readonly />
                </div>
            </div>
            <div class="col-6">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Horario laborales</label>
                    <input type="text" id="form6Example2" class="form-control"
                    placeholder="{{ $info_empleado->horario }}"
                    value="{{ $info_empleado->horario }}"
                    readonly />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
