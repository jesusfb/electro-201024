<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
    <link href="<?php echo BASE_URL; ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader
    <link href="<?php echo BASE_URL; ?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php echo BASE_URL; ?>assets/js/pace.min.js"></script>
-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css">
    <!-- Bootstrap CSS -->
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/app.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/dark-theme.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/semi-dark.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/header-colors.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/fullcalendar/css/main.min.css" />

    <title><?php echo TITLE . '' . $data['title']; ?></title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?php echo BASE_URL; ?>assets/images/logo_cotiza.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">COTIZAHOY</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="<?php echo BASE_URL . 'admin'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-house"></i>
                        </div>
                        <div class="menu-title">Principal</div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASE_URL . 'cotizaciones'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-rectangle-list"></i>
                        </div>
                        <div class="menu-title">Cotizar</div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASE_URL . 'clientes'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-users"></i>
                        </div>
                        <div class="menu-title">Clientes</div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASE_URL . 'productos'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                        </div>
                        <div class="menu-title">Productos</div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASE_URL . 'categorias'; ?>">
                        <div class="parent-icon"><i class="fa-sharp fa-solid fa-layer-group"></i>
                        </div>
                        <div class="menu-title">Categorias</div>
                    </a>
                </li>
                
              
                <li>
                    <a href="<?php echo BASE_URL . 'admin/datos'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-gear"></i>
                        </div>
                        <div class="menu-title">Configuración</div>
                    </a>
                </li>
           
               
              
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative">
                            <h6><?php echo TITLE; ?></h6>
                        </div>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if ($_SESSION['perfil_usuario'] == null) {
                                $perfil = BASE_URL . 'assets/images/logo.png';
                            } else {
                                $perfil = BASE_URL . $_SESSION['perfil_usuario'];
                            } ?>
                            <img src="<?php echo $perfil; ?>" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php echo $_SESSION['nombre_usuario']; ?></p>
                                <p class="designattion mb-0"><?php echo $_SESSION['correo_usuario']; ?></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL . 'usuarios/profile'; ?>"><i class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL . 'usuarios/salir'; ?>"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">