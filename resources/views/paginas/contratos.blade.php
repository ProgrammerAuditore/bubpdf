@extends('plantilla.base')

@section('pagina-titulo', 'Contratos')

@section('contenido-titulo', 'Contratos')

@section('pagina-descripcion', 'Contratos')

@section('contenido-principal')
<div class="mb-4">
    <p>* Esta página contiene un formulario para genera un nuevo contrato usando una plantilla de contrato de trabajo.</p>
    <p style="color:red;font-weight: 700;">* Todos los campos son obligatorios.</p>
</div>

<!-- Información del extra -->
<div class="mb-4">
    <div class="col-12 mb-2">
        <div data-mdb-input-init class="form-outline">
            <label class="form-label txt-label-css">Nombre de la empresa<span class="campo-requerido-css">*</span></label>
            <input type="text" name="Texto1" class="form-control" value="BubPDF" placeholder="BubPDF" required />
        </div>
    </div>
    <div class="row mb-4">
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Día<span class="campo-requerido-css">*</span></label>
                    <input type="text" id="form6Example2" class="form-control"  readonly />
                    <div id="passwordHelpBlock" class="form-text">
                    ej. <span class="badge text-bg-dark">1</span>, <span class="badge text-bg-dark">2</span>, etc.
                </div>
                </div>
            </div>
            <div class="col-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Mes<span class="campo-requerido-css">*</span></label>
                    <input type="text" id="form6Example1" class="form-control"  readonly />
                    <div id="passwordHelpBlock" class="form-text">
                    ej. <span class="badge text-bg-dark">Enero</span>, <span class="badge text-bg-dark">Febrero</span>, <span class="badge text-bg-dark">Marzo</span>, <span class="badge text-bg-dark">Abril</span>, etc.
                </div>
                </div>
            </div>
            <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label txt-label-css">Año<span class="campo-requerido-css">*</span></label>
                    <input type="text" id="form6Example2" class="form-control"  readonly />
                    <div id="passwordHelpBlock" class="form-text">
                    ej. <span class="badge text-bg-dark">2012</span>, <span class="badge text-bg-dark">2022</span>, etc.
                </div>
                </div>
            </div>
        </div>
</div>

<!-- Información del patrón -->
<div class="card mb-4">
    <div class="card-header">
        <div class="txt-label-css">Información del patrón</div>
    </div>
    <div class="card-body">
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nombre completo (Patrón)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Dirección completo (Patrón)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nacionalidad<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Razón Social<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">RFC<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
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
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nombre completo (Empleado)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Dirección completo (Empleado)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nacionalidad<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Razón Social<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe si la persona es Física o Moral, como su razón social.
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">RFC<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
    </div>
</div>

<!-- Información del contrato -->
<div class="card mb-4">
    <div class="card-header">
        <div class="txt-label-css">Información del contrato</div>
    </div>
    <div class="card-body">
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Duración del contrato<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe la duración del contrato, por ej. <span class="badge text-bg-dark">1 año</span>, <span class="badge text-bg-dark">6 meses</span>, <span class="badge text-bg-dark">101 días</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Salario<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Días Laborales<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe los días laborales del empleado, por ej. <span class="badge text-bg-dark">Lunes</span>, <span class="badge text-bg-dark">Martes</span>, <span class="badge text-bg-dark">Miércoles</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Horario Laboral<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto1" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe el horario laboral del empleado, por ej. <span class="badge text-bg-dark">8:30 AM - 1:30 PM</span>, <span class="badge text-bg-dark">3:00 PM - 6:00 PM</span>, etc.
                </div>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-success p-2">Generar PDF</button>
@endsection

@push('scripts')

@endpush
