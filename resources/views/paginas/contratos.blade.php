@extends('plantilla.base')

@section('pagina-titulo', 'Contrato nuevo')

@section('contenido-titulo', 'Contrato nuevo')

@section('pagina-descripcion', 'Contrato nuevo')

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
                <input type="number" name="Texto2" class="form-control" placeholder="1" value="1" />
                <div id="passwordHelpBlock" class="form-text">
                    ej. <span class="badge text-bg-dark">1</span>, <span class="badge text-bg-dark">2</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-4">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Mes<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto3" class="form-control" placeholder="Enero" value="Enero" />
                <div id="passwordHelpBlock" class="form-text">
                    ej. <span class="badge text-bg-dark">Enero</span>, <span class="badge text-bg-dark">Febrero</span>, <span class="badge text-bg-dark">Marzo</span>, <span class="badge text-bg-dark">Abril</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Año<span class="campo-requerido-css">*</span></label>
                <input type="number" name="Texto4" class="form-control" placeholder="2022" value="1968" />
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
                <input type="text" name="Texto5" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Dirección completo (Patrón)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto6" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nacionalidad<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto7" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Razón Social<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto8" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
            <div id="passwordHelpBlock" class="form-text">
                Escribe si la persona es Física o Moral, como su razón social.
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">RFC<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto13" class="form-control" value="Desconocido" placeholder="Desconocido" required />
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
                <input type="text" name="Texto9" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Dirección completo (Empleado)<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto10" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Nacionalidad<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto11" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Razón Social<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto14" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe si la persona es Física o Moral, como su razón social.
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">RFC<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto12" class="form-control" value="Desconocido" placeholder="Desconocido" required />
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
                <input type="text" name="Texto15" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe la duración del contrato, por ej. <span class="badge text-bg-dark">1 año</span>, <span class="badge text-bg-dark">6 meses</span>, <span class="badge text-bg-dark">101 días</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Salario<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto16" class="form-control" value="Desconocido" placeholder="Desconocido" required />
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Días Laborales<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto17" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe los días laborales del empleado, por ej. <span class="badge text-bg-dark">Lunes</span>, <span class="badge text-bg-dark">Martes</span>, <span class="badge text-bg-dark">Miércoles</span>, etc.
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label txt-label-css">Horario Laboral<span class="campo-requerido-css">*</span></label>
                <input type="text" name="Texto18" class="form-control" value="Desconocido" placeholder="Desconocido" required />
                <div id="passwordHelpBlock" class="form-text">
                    Escribe el horario laboral del empleado, por ej. <span class="badge text-bg-dark">8:30 AM - 1:30 PM</span>, <span class="badge text-bg-dark">3:00 PM - 6:00 PM</span>, etc.
                </div>
            </div>
        </div>
    </div>
</div>
<button type="button" id="btn-generar-pdf" class="btn btn-success p-2">Generar PDF</button>
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
                        const formUrl = "{{ asset('/formatos-pdf/formato-contrato-de-trabajo.pdf') }}".replace(/\//g, "\\");
                        const formPdfBytes = await fetch(formUrl).then(res => res.arrayBuffer());

                        // Get binary Logo and Emblem image (PNG necesary)
                        const image01Url = "{{ asset('/images/BubPDF.png') }}".replace(/\//g, "\\");
                        const image01Bytes = await fetch(image01Url).then(res => res.arrayBuffer());

                        // Load file .PDF
                        const pdfDoc = await PDFDocument.load(formPdfBytes);

                        // Get Font Style
                        const helvetica = await pdfDoc.embedFont(StandardFonts.Helvetica);
                        const fontSize = 9;
                        const maxCharacters = 90;

                        // Get fill form to file PDF
                        const form = pdfDoc.getForm();

                        // Emblem images
                        const logoImage = await pdfDoc.embedPng(image01Bytes);

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
                        const logoImageField = form.getButton('Botón1');
                        logoImageField.setImage(logoImage);

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
