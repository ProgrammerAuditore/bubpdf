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

    <!-- JQuery -->
    <script src="{{ secure_asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap JS -->
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js/popper.min.js') }}"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/datatables.min.css') }}">

    <!-- PDF-Lib JS -->
    <script src="{{ secure_asset('js/pdf-lib.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ secure_asset('js/chart.js') }}"></script>
    <script src="{{ secure_asset('js/chart-utils.min.js') }}"></script>
    <script src="{{ secure_asset('js/chartjs-plugin-doughnutlabel.min.js') }}"></script>

    <!-- Download JS -->
    <script src="{{ secure_asset('js/download.min.js') }}"></script>

    <!-- SweetAlert JS -->
    <script src="{{ secure_asset('js/sweetalert2@11.js') }}"></script>

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
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">

</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Back to top button -->
    <div id="scrollToTopBtn" class="btn-top">
        <i class="bi bi-arrow-up"></i>
    </div>

    @include('componentes.main_header')

    <div class="d-flex">
        @include('componentes.navbar_aside')

        <div class="flex-grow-1 my-5">
            @include('componentes.contenido')
        </div>
    </div>

    @include('componentes.pie_pagina')

    <!-- JavaScript Files -->

    <script src="{{ secure_asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ secure_asset('js/datatables.min.js') }}"></script>
    <script src="{{ secure_asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ secure_asset('js/vfs_fonts.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Mostrar el botón flotante al desplazarse hacia abajo
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scrollToTopBtn').addClass('show-btn-top');
                } else {
                    $('#scrollToTopBtn').removeClass('show-btn-top');
                }
            });

            // Hacer clic en el botón para desplazarse hacia arriba
            $('#scrollToTopBtn').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            $('#hamburger-button').click(function() {
                $('#icon-hamburger').toggle();
                $('#icon-close').toggle();
                $('#sidebar-navbar').toggleClass('show');
            });
        });
    </script>

    <!-- Bloque para scripts adicionales -->
    @stack('scripts')

</body>

</html>
