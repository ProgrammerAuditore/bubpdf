<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">

    <!-- Custom -->
    <title>Data Table</title>
    <meta content="" name="description">
    <meta content="Author" name="ProgrammerAuditore">
    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/favicon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="d-flex flex-column min-vh-100">
    <header class="main_header">
        <img src="assets/images/logo.png" alt="" class="img-fluid">
        <h4>BubPDF</h4>
    </header>

    <div class="d-flex flex-grow-1" style="min-height: 100vh;">
        <div class="d-flex flex-column flex-shrink-0 p-3 nav-bar-aside-css">
            <ul class="nav nav-pills flex-column mb-auto" style="padding-top: 2rem; padding-bottom: 2rem;">
                <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="bi bi-house nav-link-icon-css" ></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-pie-chart nav-link-icon-css" ></i>
                        Panel
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-buildings nav-link-icon-css" ></i>
                        Empresas
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-people-fill nav-link-icon-css"  ></i>
                        Empleados
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-files nav-link-icon-css" ></i>
                        Contratos
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-shop nav-link-icon-css" ></i>
                        Sucursales
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 m-5">
            <h1 class="title-main-content-css">
                Empleados
            </h1>
            <div class="container py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="datatable-css">
                            <table id="example" class="table table-striped table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- End Footer -->

    <!-- JavaScript Files -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
