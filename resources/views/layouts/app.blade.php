<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>@yield('title', 'Dashboard')</title>

                <!-- AdminLTE CSS desde CDN -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
                        <!-- FontAwesome -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
                                <!-- Bootstrap (opcional, para mayor compatibilidad) -->
                                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
                                    </head>
                                    <body class="hold-transition sidebar-mini">
                                        <div class="wrapper">
                                                <!-- Navbar -->
                                                        @include('layouts.navbar')

                                                                <!-- Sidebar -->
                                                                        @include('layouts.sidebar')

                                                                                <!-- Content Wrapper -->
                                                                                        <div class="content-wrapper">
                                                                                                    <section class="content">
                                                                                                                    <div class="container-fluid">
                                                                                                                                        @yield('content')
                                                                                                                                                        </div>
                                                                                                                                                                    </section>
                                                                                                                                                                            </div>

                                                                                                                                                                                    <!-- Footer -->
                                                                                                                                                                                            @include('layouts.footer')
                                                                                                                                                                                                </div>

                                                                                                                                                                                                    <!-- jQuery -->
                                                                                                                                                                                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                                                                                                                                                                            <!-- Bootstrap Bundle -->
                                                                                                                                                                                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
                                                                                                                                                                                                                    <!-- AdminLTE JS -->
                                                                                                                                                                                                                        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
                                                                                                                                                                                                                        </body>
                                                                                                                                                                                                                        </html>