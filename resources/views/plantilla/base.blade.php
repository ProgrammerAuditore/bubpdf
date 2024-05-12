<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">

    <!-- Custom -->
    <title>
        BubPDF
        @isset($__env->getSections()['pagina-titulo'])
        | @yield('pagina-titulo')
        @endif
    </title>

    <meta content="@yield('pagina-descripcion')" name="description">
    <meta content="Author" name="ProgrammerAuditore">
    <link href="images/favicon.png" rel="icon">
    <link href="images/favicon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="d-flex flex-column min-vh-100">
    @include('componentes.main_header')

    <div class="d-flex flex-grow-1" style="min-height: 100vh;">
        @include('componentes.navbar_aside')

        <div class="flex-grow-1 m-5">
            @include('componentes.contenido')
        </div>
    </div>

    @include('componentes.pie_pagina')

    <!-- JavaScript Files -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>


    <!-- Bloque para scripts adicionales -->
    @stack('scripts')

</body>

</html>
