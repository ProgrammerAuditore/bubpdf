<div class="container">
    <h1 class="title-main-content-css">
        @isset($__env->getSections()['contenido-titulo'])
            @yield('contenido-titulo')
        @else
            Sin titulo de página declare
        @endif
    </h1>
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                @yield('contenido-principal')
            </div>
        </div>
    </div>
</div>
