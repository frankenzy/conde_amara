<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />


    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->

    @vite(['resources/js/projet.js'])

    <style>
        .navbar-vertical.navbar-expand-xs .navbar-collapse {
            display: block;
            overflow: auto;
            height: 100% !important;
        }
    </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts._aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts._nav')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            @yield('content')

            {{-- -------------------------------- --}}
            {{--  --}}
            {{-- FOOTER --}}
            {{--  --}}
            {{-- -------------------------------- --}}
            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                <span>
                                    SITE WEB FOR IT2D PROJECT- COPYWRITE JUNE 2022
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="#" class="nav-link pe-0 text-muted" target="_blank">Master</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <!--   Core JS Files   -->











































































    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        $('.collapse').collapse()
    </script>

    <!-- Github buttons -->



    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->

</body>

</html>
