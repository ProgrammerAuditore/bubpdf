@extends('plantilla.base')

@section('pagina-titulo', 'Información de empleado')

@section('contenido-titulo', 'Información de empleado')

@section('pagina-descripcion', 'Información de empleado')

@section('contenido-principal')

<!-- Información del extra -->
<div class="mb-4" hidden>
    <div class="col-12 mb-2">
        <div data-mdb-input-init class="form-outline">
            <label class="form-label txt-label-css">Municipio y/o Estado del contrato<span class="campo-requerido-css">*</span></label>
            <input type="text" name="Texto1" class="form-control" value="Puerto Vallarta, Jal. Mex." placeholder="Puerto Vallarta, Jal. Mex." readonly />
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Día<span class="campo-requerido-css">*</span></label>
                <input type="number" name="Texto2" class="form-control" placeholder="1" value="1" />
                <div id="passwordHelpBlock" class="form-text">
                    ej. <span class="badge text-bg-dark">1</span>, <span class="badge text-bg-dark">2</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-4">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Mes<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto3" class="form-control" placeholder="Febrero" value="Febrero" />
            </div>
        </div>
        <div class="col-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Año<span class="campo-requerido-css">*</span></label>
                <input type="number" name="Texto4" class="form-control" placeholder="2024" value="2024" />
            </div>
        </div>
    </div>
</div>

<!-- Información del patrón -->
<div class="card mb-4" hidden>
    <div class="card-header">
        <div class="txt-label-css">Información del patrón</div>
    </div>
    <div class="card-body">
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nombre completo (Patrón)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto5" class="form-control" value="Emanuel Robles Glez" placeholder="Emanuel Robles Glez" readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Dirección completo (Patrón)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto6" class="form-control" value="San Platón, El satélite ext. #4441" placeholder="San Platón, El satélite ext. #4441" readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nacionalidad<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto7" class="form-control" value="Mexicana" placeholder="Mexicana" readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Razón Social<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto13" class="form-control" value="Moral" placeholder="Moral" readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">RFC<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto8" class="form-control" value="EMRO0123456ELEZ" placeholder="EMROGL0123456ELEZ" readonly />
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
                <input type="text" name="Texto9" class="form-control"
                value="{{ $empleado->nombres }} {{ $empleado->apellidos }}"
                placeholder="{{ $empleado->nombres }} {{ $empleado->apellidos }}"
                readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Dirección completo (Empleado)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto10" class="form-control"
                value="{{ $empleado->domicilio }}"
                placeholder="{{ $empleado->domicilio }}"
                readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nacionalidad<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto11" class="form-control" value="Mexicana" placeholder="Mexicana" readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Razón Social<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto14" class="form-control"
                value="{{ $info_empleado->razon_social }}"
                placeholder="{{ $info_empleado->razon_social }}"
                readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">RFC<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto12" class="form-control"
                value="{{ $empleado->rfc }}"
                placeholder="{{ $empleado->rfc }}"
                readonly />
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
                <input type="text" name="Texto15" class="form-control"
                value="{{ $info_empleado->duracion }}"
                placeholder="{{ $info_empleado->duracion }}"
                readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Salario<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto16" class="form-control"
                value="{{ $info_empleado->salario }}"
                placeholder="{{ $info_empleado->salario }}"
                readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Días Laborales<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto17" class="form-control"
                value="{{ $info_empleado->dias_de_trabajo }}"
                placeholder="{{ $info_empleado->dias_de_trabajo }}"
                readonly />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Horario Laboral<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto18" class="form-control"
                value="{{ $info_empleado->horario }}"
                placeholder="{{ $info_empleado->horario }}"
                readonly />
            </div>
        </div>
    </div>
</div>
<button type="button" id="btn-generar-pdf" class="btn btn-success p-2">Descargar PDF</button>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#btn-generar-pdf').click(
            async function() {
                let pdfBytes = null;

                Swal.fire({
                    title: 'Generando archivo PDF',
                    html: 'Por favor, espera...',
                    timer: 0,
                    timerProgressBar: false,
                    didOpen: async () => {
                        Swal.showLoading();
                        // Tu código existente para cargar el formulario PDF
                        const {
                            PDFDocument,
                            StandardFonts
                        } = PDFLib;

                        // Get binary PDF
                        const formUrl = "{{ asset('/formatos-pdf/formato-contrato-de-trabajo-fill-firma.pdf') }}".replace(/\//g, "\\");
                        const formPdfBytes = await fetch(formUrl).then(res => res.arrayBuffer());

                        // Get binary Logo and Emblem image (PNG necesary)
                        const image01Url = "{{ asset('/images/BubPDF.png') }}".replace(/\//g, "\\");
                        const image01Bytes = await fetch(image01Url).then(res => res.arrayBuffer());

                        // Get binary Logo and Emblem image (PNG necesary)
                        const image02Url = "{{ asset('/images/firma_empresa.png') }}".replace(/\//g, "\\");
                        const image02Bytes = await fetch(image02Url).then(res => res.arrayBuffer());

                        // Get binary Logo and Emblem image (PNG necesary)
                        const image03Url = "{{ asset('/images/firma_empleado.png') }}".replace(/\//g, "\\");
                        const image03Bytes = await fetch(image03Url).then(res => res.arrayBuffer());

                        // Load file .PDF
                        const pdfDoc = await PDFDocument.load(formPdfBytes);

                        // Get Font Style
                        const helvetica = await pdfDoc.embedFont(StandardFonts.Helvetica);
                        const fontSize = 12;
                        const maxCharacters = 90;

                        // Get fill form to file PDF
                        const form = pdfDoc.getForm();

                        // Emblem images
                        const image01 = await pdfDoc.embedPng(image01Bytes);
                        const image02 = await pdfDoc.embedPng(image02Bytes);
                        const image03 = await pdfDoc.embedPng(image03Bytes);

                        const txtInputs = document.querySelectorAll('input');
                        // Iterar sobre los elementos seleccionados
                        txtInputs.forEach((input, index) => {
                            // Obtener el valor del input
                            const value = input.value;
                            const name = input.name;
                            try {
                                const siField = form.getTextField(name);
                                siField.defaultUpdateAppearances(helvetica);
                                siField.setFontSize(fontSize);
                                siField.setText(value);
                            } catch (err) {}
                        });

                        // Add logo
                        try{
                            const boton1 = form.getButton('Botón1');
                            boton1.setImage(image01);
                        }catch(err){}

                        try{
                            const boton2 = form.getButton('Botón2');
                            boton2.setImage(image02);
                        }catch(err){}

                        try{
                            const boton3 = form.getButton('Botón3');
                            boton3.setImage(image03);
                        }catch(err){}

                        form.flatten();

                        // Serialize the PDFDocument to bytes
                        pdfBytes = await pdfDoc.save();

                        // Create a Blob from the PDF bytes
                        const pdfBlob = new Blob([pdfBytes], {
                            type: 'application/pdf'
                        });

                        Swal.close();
                    },
                    didClose: () => {
                        Swal.fire({
                            title: 'PDF Generado',
                            html: 'Contrato generado exitosamente.',
                            icon: 'success',
                            timer: 2700,
                            timerProgressBar: true,
                        });

                        // Download the PDF file
                        download(pdfBytes, 'contrato generado', "application/pdf");
                    },
                    showConfirmButton: false,
                    allowOutsideClick: false
                });
            });
    });
</script>
@endpush
