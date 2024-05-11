<!-- Footer -->
<footer class="text-white py-5 mt-auto footer-css">
    <div class="container">
        <div class="row">
            <!-- Columna de QA -->
            <div class="col-md-4 d-none d-md-block">
                <h3>Preguntas frecuentes</h3>
                <ul class="list-unstyled">
                    <li><a href="#">¿Cómo usar el sistema?</a></li>
                    <li><a href="#">¿Los datos son reales?</a></li>
                    <li><a href="#">¿Las empresas son reales?</a></li>
                    <li><a href="#">¿Los archivos generados se almacenan en la nube/servidor?</a></li>
                    <li><a href="#">¿Puedo insertar datos de prueba?</a></li>
                </ul>
            </div>

            <!-- Columna de Acerca de -->
            <div class="col-md-4 d-none d-md-block">
                <h3 class="text-lg font-semibold mb-4">Acerca de</h3>
                <p>{{ config('app.description') ?? 'Sin descripcion' }}</p>
            </div>

            <!-- Columna de Redes Sociales -->
            <div class="col-md-4">
                <h3 class="text-lg font-semibold mb-4">Redes Sociales</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">GitHub</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright y Año -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-muted small">&copy; <span id="currentYear"></span> {{ config('app.created_by') }}. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
