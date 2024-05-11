@extends('plantilla.base')

@section('pagina-titulo', 'Inicio')

@section('contenido-titulo', 'Inicio')

@section('pagina-descripcion', 'Inicio')

@section('contenido-principal')
<div class="pb-4">
    <h1 class="text-1xl text-slate-500 py-2">Resumen General</h1>
    <p>El sistema de gestión de empleados y sucursales (fake) proporciona una plataforma integral para administrar empleados y sucursales ficticias de múltiples empresas. Con capacidades que incluyen la generación de contratos laborales, acceso a información detallada de empleados y sucursales, así como la descarga de datos financieros, este sistema ofrece herramientas fundamentales para la gestión eficiente de recursos humanos y operativos.</p>
</div>
<div class="pb-4">
    <h1 class="text-1xl text-slate-500 py-2">Principales Funcionalidades</h1>
    <ul>
        <li>
            <h1 class="font-bold">Generación de Contratos Laborales</h1>
            <p>El sistema permite la creación y generación de contratos laborales personalizados para empleados de diferentes empresas y sucursales ficticias.</p>
        </li>
        <li>
            <h1 class="font-bold">Información Detallada de Empleados</h1>
            <p>Proporciona acceso rápido y fácil a la información detallada de cada empleado, incluyendo datos personales, historial laboral, evaluaciones de desempeño y capacitaciones realizadas.</p>
        </li>
        <li>
            <h1 class="font-bold">Información Detallada de Sucursales</h1>
            <p>Permite visualizar información específica sobre cada sucursal ficticia, como ubicación, tamaño del equipo, datos de contacto y estadísticas operativas.</p>
        </li>
        <li>
            <h1 class="font-bold">Descarga de Información Financiera</h1>
            <p>Facilita la descarga de datos financieros relevantes, como nóminas, presupuestos de sucursales y análisis de costos, para su posterior análisis y elaboración de informes.</p>
        </li>
    </ul>
</div>
<div class="pb-4">
    <h1 class="text-1xl text-slate-500 py-2">Estadísticas de Uso</h1>
    <ul>
        <li>
            Usuarios Activos: <span class="">200</span>
        </li>
        <li>
            Empresas Registradas: <span class="">200</span>
        </li>
        <li>
            Sucursales Registradas: <span class="">200</span>
        </li>
        <li>
            Contratos Generados: <span class="">200</span>
        </li>
        <li>
            Descargas de Información Financiera: <span class="">200</span>
        </li>
    </ul>
</div>
@endsection
